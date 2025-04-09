<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\FoodItem;
use App\Models\Restaurant;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VendorController extends Controller
{


    protected $slug;
    protected $vendor;
    protected $userLikes = [];

    public function __construct(Request $request)
    {
        /* اخترت انى اعمل constructor لانى بستخدمvendor فى عمل اى عملية بالتالى بستدعية مرة واحدة */
        $this->slug = $request->route('vendor_slug');
        $this->vendor = Restaurant::where('slug', $this->slug)->firstOrFail();
    }

    public function welcome()
    {
        // dd($vendor_slug);

        return view('customer.welcome', ['vendor' => $this->vendor]);
    }
    public function index($vendor_slug)
    {
        $vendor_id = $this->vendor->id;
        $categories = Category::with(['subcategories.foodItems' => function ($query) use ($vendor_id) {
            $query->where('restaurant_id', $vendor_id); // شرط على رقم المطعم
        }])->get();

        // قم بتصفية الفئات بناءً على ما إذا كانت تحتوي على أي فئات فرعية بها منتجات
        $filteredCategories = $categories->filter(function ($category) {
            return $category->subcategories->contains(function ($subcategory) {
                return $subcategory->foodItems->isNotEmpty();
            });
        });
        // dd($filteredCategories);

        $foodItems = FoodItem::select(
            'food_items.id',
            'food_items.subcategory_id',
            'food_items.restaurant_id',
            'food_items.name',
            'food_items.description',
            'food_items.price',
            'food_items.image',
            DB::raw('COALESCE(AVG(order_ratings_and_comments.rating), 0) as average_rating')
        )
            ->leftJoin('order_ratings_and_comments', 'food_items.id', '=', 'order_ratings_and_comments.food_item_id')
            ->groupBy('food_items.id', 'food_items.subcategory_id', 'food_items.restaurant_id', 'food_items.name', 'food_items.description', 'food_items.price', 'food_items.image') // تضمين جميع الأعمدة هنا
            ->orderByDesc('average_rating') // ترتيب تنازلي بناءً على متوسط التقييم
            ->take(2)
            ->where('food_items.restaurant_id', $this->vendor->id) // إضافة شرط المطعم
            ->get();
        return view('customer.index', ['vendor' => $this->vendor, 'foodItems' => $foodItems, 'categories' => $filteredCategories]);
    }


    public function showMenu($vendor_slug)
    {
        $vendor_id = $this->vendor->id;
        $subcategories = Subcategory::with(['foodItems' => function ($query) use ($vendor_id) {
            $query->where('restaurant_id', $vendor_id); // شرط على رقم المطعم
        }])->get();
        $subcategories = $subcategories->filter(function ($subcategory) {
            return $subcategory->foodItems->isNotEmpty();
        });
        $foodItems = FoodItem::with('likes')->select(
            'food_items.id',
            'food_items.subcategory_id',
            'food_items.restaurant_id',
            'food_items.name',
            'food_items.description',
            'food_items.price',
            'food_items.image',
            DB::raw('COALESCE(AVG(order_ratings_and_comments.rating), 0) as average_rating')
        )
            ->leftJoin('order_ratings_and_comments', 'food_items.id', '=', 'order_ratings_and_comments.food_item_id')
            ->where('food_items.restaurant_id', $this->vendor->id) // إضافة شرط المطعم
            ->groupBy('food_items.id', 'food_items.subcategory_id', 'food_items.restaurant_id', 'food_items.name', 'food_items.description', 'food_items.price', 'food_items.image') // تضمين جميع الأعمدة هنا
            ->orderByDesc('average_rating') // ترتيب تنازلي بناءً على متوسط التقييم
            ->get();
        // dd(auth('customer')->user()->likes->pluck('id')->toArray());
        if (auth('customer')->user()) {
            $this->userLikes = auth('customer')->user()->likes->pluck('id')->toArray();
        }
        return view('customer.product', [
            'foodItems' => $foodItems,
            'vendor' => $this->vendor,
            'subcategories' => $subcategories,
            'likes' =>  $this->userLikes,
        ]);
    }


    public function showFoodItem($vendor_slug, $food_item_id)

    {
        $rating = null;
        $foodItem = FoodItem::with('ratingsAndComments', 'likes')->find($food_item_id);
        if ($foodItem->ratingsAndComments()->count() > 0) {
            $ratingItem = $foodItem->ratingsAndComments()->where('customer_id', auth('customer')->id())
                ->whereNotNull('rating')
                ->first();
            if ($ratingItem) {
                $rating = $ratingItem->rating;
            } else {
                $rating = 0;
            }
        }
        if (auth('customer')->user()) {
            $this->userLikes = auth('customer')->user()->likes->pluck('id')->toArray();
        }
        return view('customer.product-detail', [
            'vendor' => $this->vendor,
            'foodItem' => $foodItem,
            'rating' => $rating,
            'likes' =>  $this->userLikes,
        ]);
    }


    public function showNotifications()
    {

        return view('customer.notification', ['vendor' => $this->vendor]);
    }



    public function getProductsByCategory($vendor_slug, $subcategoryId)
    {
        $products = FoodItem::with('likes',)
            ->where('restaurant_id', $this->vendor->id)
            ->where('subcategory_id', $subcategoryId)->get();
        // dd($products);


        $productsWithRatings = $products->map(function ($product) {
            return [
                'id' => $product->id,
                'name' => $product->name,
                'description' => $product->description,
                'price' => $product->price,
                'image' => $product->image,
                'likes' => $product->likes,
                'vendor_slug' => $this->vendor->slug,
                'average_rating' => $product->average_rating,
            ];
        });

        return response()->json($productsWithRatings);
    }




    public function showtocategory($vendor_slug, $category_id)
    {
        $vendor_id = $this->vendor->id;
        $subcategories = Subcategory::with(['foodItems' => function ($query) use ($vendor_id) {
            $query->where('restaurant_id', $vendor_id); // شرط على رقم المطعم
        }])->where('category_id', $category_id)->get();


        $subcategories = $subcategories->filter(function ($subcategory) {
            return $subcategory->foodItems->isNotEmpty();
        });


        $foodItems = FoodItem::with('likes')->select(
            'food_items.id',
            'food_items.subcategory_id',
            'food_items.restaurant_id',
            'food_items.name',
            'food_items.description',
            'food_items.price',
            'food_items.image',
            DB::raw('COALESCE(AVG(order_ratings_and_comments.rating), 0) as average_rating')
        )
            ->leftJoin('order_ratings_and_comments', 'food_items.id', '=', 'order_ratings_and_comments.food_item_id')
            ->where('food_items.restaurant_id', $this->vendor->id) // إضافة شرط المطعم
            ->groupBy('food_items.id', 'food_items.subcategory_id', 'food_items.restaurant_id', 'food_items.name', 'food_items.description', 'food_items.price', 'food_items.image') // تضمين جميع الأعمدة هنا
            ->orderByDesc('average_rating')
            ->where('restaurant_id', $this->vendor->id) // ترتيب تنازلي بناءً على متوسط التقييم
            ->get();

        if (auth('customer')->user()) {
            $this->userLikes = auth('customer')->user()->likes->pluck('id')->toArray();
        }
        return view('customer.product', [
            'foodItems' => $foodItems,
            'vendor' => $this->vendor,
            'subcategories' => $subcategories,
            'likes' =>  $this->userLikes,
        ]);
    }
}

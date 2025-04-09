{{-- 1. عرض السلة (cart.index ) :


.

2. إضافة عنصر إلى السلة (cart.add):
يمكنك إضافة زر لإضافة عنصر إلى السلة من صفحة المنتج:

<form action="{{ route('cart.add') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $product->id }}">
    <input type="hidden" name="name" value="{{ $product->name }}">
    <input type="hidden" name="price" value="{{ $product->price }}">
    <input type="number" name="quantity" value="1" min="1">
    <button type="submit">إضافة إلى السلة</button>
</form>

3.
 تحديث الكمية في السلة (cart.update):
تم تضمين تحديث الكمية في السلة داخل الـ View السابق الخاص بعرض السلة. النموذج الخاص بالتحديث يكون بهذا الشكل:

<form action="{{ route('cart.update') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $item->id }}">
    <input type="number" name="quantity" value="{{ $item->quantity }}" min="1">
    <button type="submit">تحديث</button>
</form>

4. إزالة عنصر من السلة (cart.remove):
يمكنك استخدام هذا النموذج لإزالة عنصر محدد من السلة:
<form action="{{ route('cart.remove') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $item->id }}">
    <button type="submit">إزالة</button>
</form>

5. إفراغ السلة بالكامل (cart.clear):
هذا النموذج يستخدم لإفراغ السلة بشكل كامل:
<form action="{{ route('cart.clear') }}" method="POST">
    @csrf
    <button type="submit">إفراغ السلة</button>
</form>
--}}

{{-- @dd(Session::get('cart')) --}}



أولاً، سنقوم بإنشاء جدول لحفظ اللايكات لكل عنصر طعام.

Schema::create('likes', function (Blueprint $table) {
    $table->id(); // المفتاح الأساسي
    $table->foreignId('food_item_id')->constrained('food_items')->onDelete('cascade'); // الربط مع جدول الطعام
    $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade'); // الربط مع جدول الزبائن
    $table->timestamps(); // الوقت الذي تم فيه إضافة أو إزالة اللايك
});


2. إعداد الموديل Like:

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['food_item_id', 'customer_id'];

    // علاقة مع موديل الطعام
    public function foodItem()
    {
        return $this->belongsTo(FoodItem::class);
    }

    // علاقة مع موديل الزبائن
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}

3


. إعداد FoodItem Model للعلاقة مع اللايكات:
لإضافة العلاقة بين FoodItem واللايكات:
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    // علاقة مع اللايكات
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    // للتحقق إذا قام الزبون بإضافة لايك
    public function isLikedByCustomer($customerId)
    {
        return $this->likes()->where('customer_id', $customerId)->exists();
    }
}


4. إنشاء LikeController للتحكم في اللايكات:
namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\FoodItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    // إضافة أو إزالة اللايك
    public function toggleLike($foodItemId)
    {
        $customerId = Auth::guard('customer')->id(); // جلب ID الزبون المصادق عليه

        // التحقق إذا قام الزبون بإضافة لايك مسبقاً
        $existingLike = Like::where('food_item_id', $foodItemId)
            ->where('customer_id', $customerId)
            ->first();

        if ($existingLike) {
            // إذا كان اللايك موجود، نقوم بإزالته
            $existingLike->delete();
            return response()->json(['message' => 'Like removed successfully']);
        } else {
            // إذا لم يكن اللايك موجود، نقوم بإضافته
            Like::create([
                'food_item_id' => $foodItemId,
                'customer_id' => $customerId
            ]);
            return response()->json(['message' => 'Like added successfully']);
        }
    }

    // عرض عدد اللايكات لعنصر طعام محدد
    public function getLikesCount($foodItemId)
    {
        $likesCount = Like::where('food_item_id', $foodItemId)->count();
        return response()->json(['likes_count' => $likesCount]);
    }
}


5. إضافة الراوتات:
نضيف الراوتات للتحكم في اللايكات:
use App\Http\Controllers\LikeController;

// إضافة أو إزالة لايك
Route::post('/food-items/{foodItemId}/like', [LikeController::class, 'toggleLike'])
    ->middleware('auth:customer') // التأكد أن الزبون مصادق عليه
    ->name('food-items.like');

// جلب عدد اللايكات لعنصر معين
Route::get('/food-items/{foodItemId}/likes-count', [LikeController::class, 'getLikesCount'])
    ->name('food-items.likes-count');




مثال على الـ Blade:
<!-- عرض اللايك -->
<button id="like-button-{{ $foodItem->id }}" onclick="toggleLike({{ $foodItem->id }})">
    @if($foodItem->isLikedByCustomer(auth('customer')->id()))
        Unlike
    @else
        Like
    @endif
</button>

<script>
    function toggleLike(foodItemId) {
        fetch(`/food-items/${foodItemId}/like`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json',
            },
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            // تحديث زر اللايك هنا إذا أردت
        })
        .catch(error => console.error('Error:', error));
    }
</script>


$('#foodItems-list').append(
    `<li>
        <div class="item-content">
            <div class="item-inner">
                <div class="item-title-row">
                    <h6 class="item-title"><a href="{{route('vendor.menu.fooditem',['vendor_slug' =>${vendor_slug},"product_id"=>1])}}">'${product.name}'</a></h6>
                    <div class="item-subtitle">${product.description}</div>
                </div>
                <div class="item-footer">
                    <div class="d-flex align-items-center">
                        <h6 class="me-3">${product.price}</h6>
                        {{-- <del class="off-text"><h6>$ 8.9</h6></del> --}}
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-star"></i>
                        <h6>${ number_format(product.average_rating, 1) }</h6>
                    </div>
                </div>
            </div>
            <div class="item-media media media-90"><img src="{{asset('customer/assets/images/food/pic1.png')}}" alt="logo">
                <button onclick="toggleLikeProduct('${vendor_slug}' ,${product.id})"   style="background: none ; outline: none; border: none; cursor: pointer;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.785 2.04751C15.9489 2.04694 15.1209 2.21163 14.3486 2.53212C13.5764 2.85261 12.8751 3.32258 12.285 3.91501L12 4.18501L11.73 3.91501C11.1492 3.2681 10.4424 2.74652 9.65306 2.3822C8.86367 2.01787 8.00824 1.81847 7.13912 1.79618C6.27 1.7739 5.40547 1.9292 4.59845 2.25259C3.79143 2.57599 3.05889 3.06066 2.44566 3.67695C1.83243 4.29325 1.35142 5.02819 1.03206 5.83682C0.712696 6.64544 0.561704 7.51073 0.588323 8.37973C0.614942 9.24873 0.818613 10.1032 1.18687 10.8907C1.55513 11.6783 2.08022 12.3824 2.73002 12.96L12 22.2675L21.3075 12.96C22.2015 12.0677 22.8109 10.9304 23.0589 9.6919C23.3068 8.45338 23.1822 7.16915 22.7006 6.00144C22.2191 4.83373 21.4023 3.83492 20.3534 3.13118C19.3045 2.42744 18.0706 2.05034 16.8075 2.04751H16.785Z" 
                        fill=""/>
                    </svg>
                </button>
            </div>
        </div>
    </li>`
);
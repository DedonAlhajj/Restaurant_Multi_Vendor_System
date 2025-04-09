<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Like;
use App\Models\FoodItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    // إضافة أو إزالة اللايك
    public function toggleLike(Request $request)
    {
        $foodItemId = $request->foodItemId;
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

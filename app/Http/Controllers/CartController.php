<?php
namespace App\Http\Controllers;
use App\Http\Requests\AddCartRequest;
use App\Models\CartItem;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(AddCartRequest $request)
    {
        $user   = $request->user();
        $skuId  = $request->input('sku_id');
        $amount = $request->input('amount');

        // 从数据库中查询该商品是否已经在购物车中
        if ($cart = $user->cartItems()->where('product_sku_id', $skuId)->first()) {

            // 如果存在则直接叠加商品数量
            $cart->update([
                'amount' => $cart->amount + $amount,
            ]);
        } else {

            // 否则创建一个新的购物车记录
            $cart = new CartItem(['amount' => $amount]);
            $cart->user()->associate($user);//同理
            $cart->productSku()->associate($skuId);//把 $skuId 赋值给 $cart->product_sku_id 字段
            $cart->save();
        }

        return [];
    }
}

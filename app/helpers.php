<?php

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

function quantity($product_id, $color_id = null)
{
    $product = Product::find($product_id);

    if ($color_id) {
        $quantity = $product->colors->find($color_id)->pivot->quantity;
    } else {
        $quantity = $product->quantity;
    }

    return $quantity;
}

function qty_added($product_id, $color_id = null)
{
    $cart = Cart::content();

    $item = $cart->where('id', $product_id)
        ->where('options.color_id', $color_id)->first();

    if ($item) {
        return $item->qty;
    } else {
        return 0;
    }
}

function qty_available($product_id, $color_id = null)
{
    $a = quantity($product_id, $color_id);
    $b = qty_added($product_id, $color_id);
    return  $a - $b;
}

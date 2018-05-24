<?php

namespace App\Http\Controllers;

use App\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request){
        $productId=$request->productId;
        $productById=Product::find($productId);
        $res=Cart::add([
            'id'=>$productById->id,
            'name'=>$productById->productName,
            'price'=>$productById->productPrice,
            'qty'=>$request->productQuantity,
            'options' => array('image' => $productById->productImage),
            //'image'=>$productById->productImage,
        ]);

        return redirect('/showCart');

    }
    public function cartView(){
        $cartProducts=Cart::content();
        return view('frontEnd.cart.showCart',['cartProducts'=>$cartProducts]);
    }
    public function updateCart(Request $request){
        Cart::update($request->rowId,$request->productQuantity);
        return redirect('/showCart');
    }
    public function removeCartProduct($rowId){
        Cart::remove($rowId);
        return redirect('/showCart');
    }
}

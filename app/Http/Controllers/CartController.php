<?php

namespace App\Http\Controllers;

use App\Mail\OrderEmail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    function store(Request $request)
    {
        $product = Product::find($request->id);
        if (Session::get("cart.$product->id")) {
            $amount = Session::get("cart.$product->id.amount") + $request->amount;
            Session::put("cart.$product->id.amount", $amount);
        } else {
            $productToSave = [
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'amount' => $request->amount,
                'id' => $product->id,
            ];

            Session::put("cart.$product->id", $productToSave);
        }

        Mail::to('kudriashova.ag@gmail.com')->send(new OrderEmail($product->name));


        return view('shop._cart');
    }
}





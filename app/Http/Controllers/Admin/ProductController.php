<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    }
    public function destroy($id)
{
    // Найдите товар по его ID и удалите его
    $product = Product::find($id);
    if (!$product) {
        // Товар не найден
        return redirect()->route('products.index')->with('error', 'Товар не найден.');
    }

    $product->delete();

    return redirect()->route('products.index')->with('success', 'Товар успешно удален.');
}
}

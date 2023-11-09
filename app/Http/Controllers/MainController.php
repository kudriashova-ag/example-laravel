<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;
use LiqPay;

class MainController extends Controller
{

    function index(): View
    {

        $liqpay = new LiqPay(env('LIQPAY_PUBLIC'), env('LIQPAY_PRIVATE'));
        $order_ligpay_id = time();
        $html = $liqpay->cnb_form(array(
            'action'         => 'pay',
            'amount'         => '1',
            'currency'       => 'UAH',
            'description'    => 'description text',
            'order_id'       => $order_ligpay_id,
            'version'        => '3',
            'result_url'     => 'http://example-laravel/pay?order_ligpay_id='. $order_ligpay_id
        ));


    



        // $ch = curl_init('https://jsonplaceholder.typicode.com/todos/1');
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $result = curl_exec($ch);
        // curl_close($ch);

        // dd(json_decode($result));


        /** @var Article $article  */
       /*  $article = Article::first();
        dd($article->getAttribute('active'));
        dd($article->active);  // __get   __set */

        // $category = new Category();
        // $category->name = 'Category 4';  $category->name = $request->name;
        // $category->description = 'description Category 3';
        // $category->save();
        // dd($category->id);

        $categories = Category::all();
       // dd($categories);


        $title = 'Main page';
        
        return view('index', compact('title', 'categories', 'html'));
    }


    function pay(Request $request){
        $private_key = env('LIQPAY_PRIVATE');

        $sign = base64_encode(sha1(
            $private_key .
            $request->data .
            $private_key,
            1
        ));

        if($sign === $request->signature){
            $liqpay = new LiqPay(env('LIQPAY_PUBLIC'), env('LIQPAY_PRIVATE'));
            $res = $liqpay->api("request", array(
                'action'        => 'status',
                'version'       => '3',
                'order_id'      => $request->order_ligpay_id
            ));

            if($res->status === 'success'){
                // save
                // redirect
            }
        }
        else{
            return 'Error';
        }


       
    }



    function contacts(): View
    {
        return view('contacts');
    }

    function sendEmail(Request $request)
    {
        
        $request->validate([
            'name' => 'required|min:2|max:15',
            'email' => 'required|email',
            'message' => 'required|min:5'
        ]);

        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        mail('kudriashova.ag@gmail.com', 'Email from laravel', "$name, $email, $message");

        // return redirect('/contacts')->with('success', 'Thank you!'); // по url
        // return redirect()->route('contacts')->with('success', 'Thank you!'); // по назві маршруту
        // return to_route('contacts')->with('success', 'Thank you!'); // по назві маршруту !!!
        return redirect()->back()->with('success', 'Thank you!'); // повернення на попередню сторінку
    }
}
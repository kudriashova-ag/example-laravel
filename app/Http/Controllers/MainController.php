<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{

    function index(): View
    {
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
        
        return view('index', compact('title', 'categories'));
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
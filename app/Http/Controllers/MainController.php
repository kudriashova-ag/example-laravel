<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    function index(): View
    {
        $title = 'Main page';
        $subtitle = '<em>Subtitle</em>';
        $users = [];

        return view('index', compact('title', 'subtitle', 'users'));
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
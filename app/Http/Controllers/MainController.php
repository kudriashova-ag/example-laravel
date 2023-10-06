<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index() {
        $title = 'Main page';
        $subtitle = '<em>Subtitle</em>';
        $users = [];

        return view('index', compact('title', 'subtitle', 'users'));
    }

    function contacts() {
        return view('contacts');
    }
}

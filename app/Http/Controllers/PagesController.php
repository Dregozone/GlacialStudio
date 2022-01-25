<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function home() {

        return view('home');
    }

    public function about() {

        return view('about');
    }

    public function products() {

        return view('products');
    }

    public function portfolio() {

        return view('portfolio');
    }

    public function contact() {

        return view('contact');
    }

    public function contactSubmit(Request $request) {

        dd($request);
    }

    public function news() {

        return view('news');
    }

    public function tos() {

        return view('tos');
    }

    public function pp() {

        return view('pp');
    }
}

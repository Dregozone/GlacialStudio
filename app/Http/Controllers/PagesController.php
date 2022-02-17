<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function home() {

        $categories = ProductCategory::all();

        return view('home', [
            'page' => 'home',
            'categories' => $categories,
        ]);
    }

    public function about() {

        return view('about', [
            'page' => 'about',
        ]);
    }

    public function products() {

        $products = Product::all();

        return view('products', [
            'page' => 'products',
            'products' => $products,
        ]);
    }

    public function portfolio() {

        return view('portfolio', [
            'page' => 'portfolio',
        ]);
    }

    public function contact() {

        return view('contact', [
            'page' => 'contact',
        ]);
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

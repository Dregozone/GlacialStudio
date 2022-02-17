<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\ProductCategory;

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

        $projects = Project::all();

        return view('portfolio', [
            'page' => 'portfolio',
            'projects' => $projects,
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

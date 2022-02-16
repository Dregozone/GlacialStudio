<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function home() {

        return view('home', [
            "page" => "home",
        ]);
    }

    public function about() {

        return view('about');
    }

    public function products() {

        $products = Product::all();

        //echo '<pre>';
        //print_r( $products[0]->productCategory[0]->name );
        //echo '</pre>';

        //dd( $products[0] );

        return view('products', [
            "page" => "products",
            'products' => $products,
        ]);
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

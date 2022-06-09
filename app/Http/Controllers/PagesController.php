<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Mail\ContactFormSubmission;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    
    public function home() {

        $categories = ProductCategory::
              where('is_active', '=', true)
            ->get();
        
        $projects = Project::
              where('is_active', '=', true)
            ->orderBy('order', 'ASC')
            ->skip(0)
            ->take(9)
            ->get();

        return view('home', [
            'page' => 'home',
            'categories' => $categories,
            'projects' => $projects,
        ]);
    }

    public function about() {

        return view('about', [
            'page' => 'about',
        ]);
    }

    public function products() {

        $products = Product::
              join('product_categories', 'product_categories.id', '=', 'products.category_id')
            ->where('products.is_active', '=', true)
            ->where('product_categories.is_active', '=', true)
            ->orderBy('product_categories.order', 'ASC')
            ->orderBy('products.order', 'ASC')
            ->get();

        return view('products', [
            'page' => 'products',
            'products' => $products,
        ]);
    }

    public function portfolio() {

        $projects = Project::
              where('is_active', '=', true)
            ->get();

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

        Mail::
              to('aclearmonth@gmail.com')
            ->send(new ContactFormSubmission($request));

        return redirect()
            ->route("contact")
            ->with(["message" => "Your message has been sent!"]);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view(
             "home"
            ,array(
                "a" => "1"
            )
        );
    }
    
    public function about() {
        //
    }

    public function products() {
        //
    }

    public function portfolio() {
        //
    }

    public function contact() {
        //
    }

    public function news() {
        //
    }

    public function termsofservice() {
        //
    }

    public function privacypolicy() {
        //
    }
    
}

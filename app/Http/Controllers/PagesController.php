<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function home() {

        $testimonials = DB::select('select * from testimonials');

        //dd( $testimonials );

        return view("home", [
                "a" => "1",
                "testimonials" => $testimonials,
            ]
        );
    }

    public function about() {

        return view(
             "about"
            ,array(
                "a" => "1"
            )
        );
    }

    public function products() {

        return view(
             "products"
            ,array(
                "a" => "1"
            )
        );
    }

    public function portfolio() {

        return view(
             "portfolio"
            ,array(
                "a" => "1"
            )
        );
    }

    public function contact(Request $request) {

        $name = $request->post('name');
        $email = $request->post('email');
        $reason = $request->post('reason');
        $message = $request->post('message');

        return view(
             "contact"
            ,array(
                 "name" => $name
                ,"email" => $email
                ,"reason" => $reason
                ,"message" => $message
            )
        );
    }

    public function news() {

        return view(
             "news"
            ,array(
                "a" => "1"
            )
        );
    }

    public function termsofservice() {

        return view(
             "termsofservice"
            ,array(
                "a" => "1"
            )
        );
    }

    public function privacypolicy() {

        return view(
             "privacypolicy"
            ,array(
                "a" => "1"
            )
        );
    }
}

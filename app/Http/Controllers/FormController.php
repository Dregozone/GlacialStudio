<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        dd("will handle contact form submission here");

        // Send email
        // Mail::to(config('mail.from.address'))->send(new ContactForm($request->all()));

        return redirect()->route('home')->with('success', 'Message sent successfully!');
    }
}

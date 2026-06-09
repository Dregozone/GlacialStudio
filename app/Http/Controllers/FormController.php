<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FormController extends Controller
{
    private const MAX_MESSAGE_LENGTH = 5000;

    public function submit(Request $request)
    {
        $sanitizeInput = static function (mixed $value): string {
            if (! is_string($value)) {
                return '';
            }

            $withoutEmbeddedScripts = $value;

            do {
                $currentValue = $withoutEmbeddedScripts;
                $withoutEmbeddedScripts = preg_replace('/<(script|style)\b[^>]*>.*?<\/\1>/is', '', $currentValue) ?? $currentValue;
            } while ($withoutEmbeddedScripts !== $currentValue);

            return trim(strip_tags($withoutEmbeddedScripts));
        };

        $request->merge([
            'name' => Str::squish($sanitizeInput($request->input('name'))),
            'email' => Str::lower($sanitizeInput($request->input('email'))),
            'message' => $sanitizeInput($request->input('message')),
        ]);

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:'.self::MAX_MESSAGE_LENGTH],
        ]);

        ContactMessage::query()->create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

        return redirect()->route('home')->with('success', 'Message sent successfully!');
    }
}

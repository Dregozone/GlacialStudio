<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FormController extends Controller
{
    private const MAX_MESSAGE_LENGTH = 5000;
    private const CAPTCHA_LEFT_SESSION_KEY = 'contact_captcha_left';
    private const CAPTCHA_RIGHT_SESSION_KEY = 'contact_captcha_right';
    private const CAPTCHA_ANSWER_SESSION_KEY = 'contact_captcha_answer';

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
            'captcha' => [
                'required',
                'integer',
                static function (string $attribute, mixed $value, \Closure $fail) use ($request): void {
                    if (! $request->session()->has(self::CAPTCHA_ANSWER_SESSION_KEY)) {
                        $fail('Captcha challenge expired. Please try again.');

                        return;
                    }

                    $expectedAnswer = (int) $request->session()->get(self::CAPTCHA_ANSWER_SESSION_KEY);

                    if ((int) $value !== $expectedAnswer) {
                        $fail('Captcha answer is incorrect.');
                    }
                },
            ],
        ]);

        ContactMessage::query()->create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

        $request->session()->forget([
            self::CAPTCHA_LEFT_SESSION_KEY,
            self::CAPTCHA_RIGHT_SESSION_KEY,
            self::CAPTCHA_ANSWER_SESSION_KEY,
        ]);

        return redirect()->route('home')->with('success', 'Message sent successfully!');
    }
}

<?php

use App\Models\ContactMessage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Component;
use Spatie\Honeypot\Exceptions\SpamException;
use Spatie\Honeypot\Http\Livewire\Concerns\HoneypotData;
use Spatie\Honeypot\SpamProtection;

new class extends Component {
    private const MAX_MESSAGE_LENGTH = 5000;

    public string $name = '';

    public string $email = '';

    public string $message = '';

    public string $cfTurnstileResponse = '';

    public HoneypotData $honeypotData;

    public ?string $successMessage = null;

    public function mount(): void
    {
        $this->name = (string) old('name', $this->name);
        $this->email = (string) old('email', $this->email);
        $this->message = (string) old('message', $this->message);
        $this->honeypotData = new HoneypotData();
    }

    public function submit(): void
    {
        try {
            app(SpamProtection::class)->check($this->honeypotData->toArray());
        } catch (SpamException) {
            $this->reset(['name', 'email', 'message']);
            $this->honeypotData = new HoneypotData();
            $this->successMessage = 'Message sent successfully!';

            return;
        }

        $this->successMessage = null;
        $this->resetValidation();

        if (empty($this->cfTurnstileResponse)) {
            $this->addError('cfTurnstileResponse', 'Please complete the security check.');

            return;
        }

        $turnstileResult = Http::asForm()->timeout(10)->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
            'secret' => config('services.turnstyle.secret_key'),
            'response' => $this->cfTurnstileResponse,
            'remoteip' => request()->ip(),
        ]);

        if (! $turnstileResult->successful() || ! $turnstileResult->json('success')) {
            $this->cfTurnstileResponse = '';
            $this->dispatch('turnstile-reset');
            $this->addError('cfTurnstileResponse', 'Security check failed. Please try again.');

            return;
        }

        $this->name = Str::squish($this->sanitizeInput($this->name));
        $this->email = Str::lower($this->sanitizeInput($this->email));
        $this->message = $this->sanitizeInput($this->message);

        $validated = $this->validate();

        ContactMessage::query()->create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

        $this->reset(['name', 'email', 'message', 'cfTurnstileResponse']);
        $this->honeypotData = new HoneypotData();
        $this->successMessage = 'Message sent successfully!';
        $this->dispatch('turnstile-reset');
    }

    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:'.self::MAX_MESSAGE_LENGTH],
        ];
    }

    private function sanitizeInput(mixed $value): string
    {
        if (! is_string($value)) {
            return '';
        }

        $withoutEmbeddedScripts = $value;

        do {
            $currentValue = $withoutEmbeddedScripts;
            $withoutEmbeddedScripts = preg_replace('/<(script|style)\b[^>]*>.*?<\/\1>/is', '', $currentValue) ?? $currentValue;
        } while ($withoutEmbeddedScripts !== $currentValue);

        return trim(strip_tags($withoutEmbeddedScripts));
    }
};

?>

<section class="section-padding scroll-mt-20 lg:scroll-mt-24 bg-glacier-950 relative" id="contact">
    <div class="container-custom" x-data="{ shown: false }" x-intersect.once="shown = true">
        {{-- Section Header --}}
        <div class="text-center mb-16 lg:mb-20">
            <div
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                class="transition-all duration-700"
            >
                <span class="section-label">
                    <i class="fa-solid fa-envelope text-[10px]" aria-hidden="true"></i>
                    Contact
                </span>
            </div>
            <h2
                class="text-3xl sm:text-4xl md:text-5xl font-display font-bold text-white mb-6"
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                style="transition: all 0.7s ease; transition-delay: 100ms;"
            >
                Get in <span class="gradient-text">Touch</span>
            </h2>
            <p
                class="text-lg text-glacier-400 max-w-3xl mx-auto leading-relaxed"
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                style="transition: all 0.7s ease; transition-delay: 200ms;"
            >
                Ready to start your next project? Let's discuss how we can bring your vision to life.
            </p>
        </div>

        {{-- Availability Notice --}}
        <div
            class="max-w-2xl mx-auto mb-12"
            :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
            style="transition: all 0.7s ease; transition-delay: 300ms;"
        >
            <div class="bg-amber-500/10 border border-amber-500/20 rounded-2xl p-6 text-center backdrop-blur-sm" role="status">
                <div class="flex items-center justify-center mb-4">
                    <div class="w-11 h-11 bg-amber-500/20 rounded-xl flex items-center justify-center mr-3">
                        <i class="fa-solid fa-clock text-amber-400" aria-hidden="true"></i>
                    </div>
                    <h3 class="text-lg font-display font-semibold text-amber-300">Currently Unavailable</h3>
                </div>
                <p class="text-amber-300/80 leading-relaxed text-sm">
                    I am not currently taking on any new projects.
                    
                    <br />
                    <br />
                    
                    Please check back later or follow us on social media for updates.
                </p>
            </div>
        </div>

        {{-- Contact Info Grid --}}
        <div
            class="grid md:grid-cols-2 gap-8 lg:gap-12 max-w-4xl mx-auto"
            :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
            style="transition: all 0.7s ease; transition-delay: 400ms;"
        >
            {{-- Contact Details --}}
            <div class="space-y-8">
                <div>
                    <h3 class="text-2xl font-display font-semibold text-white mb-5">
                        Contact Information
                    </h3>
                    <p class="text-glacier-400 leading-relaxed">
                        While we're not taking new projects right now, feel free to reach out for future opportunities or general inquiries.
                    </p>
                </div>

                <div class="space-y-5">
                    <div class="flex items-center space-x-4 group">
                        <div class="w-11 h-11 bg-primary-500/10 rounded-xl flex items-center justify-center group-hover:bg-primary-500/20 transition-colors duration-300 shrink-0">
                            <i class="fa-solid fa-envelope text-primary-400 text-sm" aria-hidden="true"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white text-sm font-sans">Email</h4>
                            <p class="text-glacier-400 text-sm">aclearmonth@gmail.com</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 group">
                        <div class="w-11 h-11 bg-accent-500/10 rounded-xl flex items-center justify-center group-hover:bg-accent-500/20 transition-colors duration-300 shrink-0">
                            <i class="fa-solid fa-location-dot text-accent-400 text-sm" aria-hidden="true"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white text-sm font-sans">Location</h4>
                            <p class="text-glacier-400 text-sm">United Kingdom</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 group">
                        <div class="w-11 h-11 bg-cyan-500/10 rounded-xl flex items-center justify-center group-hover:bg-cyan-500/20 transition-colors duration-300 shrink-0">
                            <i class="fa-brands fa-facebook text-cyan-400 text-sm" aria-hidden="true"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white text-sm font-sans">Social Media</h4>
                            <a href="https://www.facebook.com/GlacialStudioWebSolutions" target="_blank" rel="noreferrer"
                                class="text-primary-400 hover:text-primary-300 transition-colors duration-200 text-sm">
                                Follow us on Facebook
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Contact Form --}}
            <div class="glass-card p-7 sm:p-8">
                <h3 class="text-xl font-display font-semibold text-white mb-5">
                    Send a Message
                </h3>

                @if ($successMessage || session('success'))
                    <div class="mb-4 rounded-xl border border-emerald-500/20 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-300">
                        {{ $successMessage ?? session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-4 rounded-xl border border-rose-500/20 bg-rose-500/10 px-4 py-3 text-sm text-rose-200" role="alert">
                        Please correct the highlighted fields and try again.
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.submit') }}" wire:submit="submit" class="space-y-4" novalidate>
                    @csrf

                    <div>
                        <label for="contact-name" class="block text-xs font-medium text-glacier-300 mb-2 font-sans">Name</label>
                        <input id="contact-name" type="text" name="name" wire:model="name" required
                            @class([
                                'w-full rounded-xl bg-white/5 px-4 py-3 text-sm text-white placeholder-glacier-500 focus:outline-none focus:ring-2',
                                'border border-white/[0.06] focus:ring-primary-500/30' => ! $errors->has('name'),
                                'border border-rose-500/40 focus:ring-rose-500/30' => $errors->has('name'),
                            ])>
                        @error('name')
                            <p class="mt-2 text-xs text-rose-300">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="contact-email" class="block text-xs font-medium text-glacier-300 mb-2 font-sans">Email</label>
                        <input id="contact-email" type="email" name="email" wire:model="email" required
                            @class([
                                'w-full rounded-xl bg-white/5 px-4 py-3 text-sm text-white placeholder-glacier-500 focus:outline-none focus:ring-2',
                                'border border-white/[0.06] focus:ring-primary-500/30' => ! $errors->has('email'),
                                'border border-rose-500/40 focus:ring-rose-500/30' => $errors->has('email'),
                            ])>
                        @error('email')
                            <p class="mt-2 text-xs text-rose-300">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="contact-message" class="block text-xs font-medium text-glacier-300 mb-2 font-sans">Message</label>
                        <textarea id="contact-message" rows="3" name="message" wire:model="message" required @class([
                            'w-full resize-none rounded-xl bg-white/5 px-4 py-3 text-sm text-white placeholder-glacier-500 focus:outline-none focus:ring-2',
                            'border border-white/[0.06] focus:ring-primary-500/30' => ! $errors->has('message'),
                            'border border-rose-500/40 focus:ring-rose-500/30' => $errors->has('message'),
                        ])></textarea>
                        @error('message')
                            <p class="mt-2 text-xs text-rose-300">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <div wire:ignore>
                            <div
                                id="cf-turnstile-contact"
                                class="cf-turnstile"
                                data-sitekey="{{ config('services.turnstyle.site_key') }}"
                                data-theme="dark"
                                data-size="flexible"
                                data-callback="onTurnstileSuccess"
                                data-expired-callback="onTurnstileExpired"
                                data-error-callback="onTurnstileError"
                            ></div>
                        </div>
                        @error('cfTurnstileResponse')
                            <p class="mt-2 text-xs text-rose-300">{{ $message }}</p>
                        @enderror
                    </div>
                    <x-honeypot livewire-model="honeypotData" />
                    <button type="submit" class="w-full btn-primary disabled:cursor-not-allowed disabled:opacity-70" wire:loading.attr="disabled" wire:target="submit">
                        <span wire:loading.remove wire:target="submit">Send Message</span>
                        <span wire:loading wire:target="submit">Sending...</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@script
<script>
    window.onTurnstileSuccess = function (token) {
        $wire.cfTurnstileResponse = token;
    };
    window.onTurnstileExpired = function () {
        $wire.cfTurnstileResponse = '';
    };
    window.onTurnstileError = function () {
        $wire.cfTurnstileResponse = '';
    };

    $wire.on('turnstile-reset', () => {
        if (typeof turnstile !== 'undefined') {
            turnstile.reset('#cf-turnstile-contact');
        }
    });
</script>
@endscript

<?php

use Livewire\Component;

new class extends Component {};

?>

<section class="section-padding bg-gradient-to-br from-primary-50 via-white to-accent-50 relative overflow-hidden">
    {{-- Background Elements --}}
    <div class="absolute inset-0">
        <div
            class="absolute top-10 right-10 w-64 h-64 bg-primary-200 rounded-full mix-blend-multiply filter blur-xl opacity-60">
        </div>
        <div
            class="absolute bottom-10 left-10 w-48 h-48 bg-accent-200 rounded-full mix-blend-multiply filter blur-xl opacity-60">
        </div>
    </div>

    <div class="container-custom relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            {{-- Content --}}
            <div class="text-center lg:text-left">
                <h2 class="text-4xl md:text-5xl font-display font-bold text-glacier-900 mb-6">
                    Making a <span class="gradient-text">Difference</span>
                </h2>
                <p class="text-lg text-glacier-600 leading-relaxed mb-8">
                    Since January 2025, Glacial Studio has been committed to donating 5% of all profits from product
                    sales and subscriptions to good causes that combat climate change or support animal conservation
                    projects.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <div class="bg-white rounded-xl p-6 shadow-lg border border-primary-100">
                        <div class="text-3xl font-bold text-primary-600 mb-2">5%</div>
                        <div class="text-sm text-glacier-600">of profits donated</div>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-lg border border-accent-100">
                        <div class="text-3xl font-bold text-accent-600 mb-2">100%</div>
                        <div class="text-sm text-glacier-600">commitment to change</div>
                    </div>
                </div>
            </div>

            {{-- Visual Element --}}
            <div class="relative">
                <div class="bg-white rounded-2xl shadow-xl p-8 border border-primary-100">
                    <div class="text-center">
                        <div
                            class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fa-solid fa-heart text-3xl text-primary-600"></i>
                        </div>
                        <h3 class="text-2xl font-display font-semibold text-glacier-900 mb-4">
                            Every Purchase Helps
                        </h3>
                        <p class="text-glacier-600 leading-relaxed">
                            Every purchase you make helps us to help them. Together, we can create a positive impact on
                            our planet and its inhabitants.
                        </p>
                        <div class="mt-6 flex items-center justify-center space-x-4 text-sm text-glacier-500">
                            <span class="flex items-center">
                                <i class="fa-solid fa-leaf text-green-500 mr-2"></i>
                                Climate Action
                            </span>
                            <span class="flex items-center">
                                <i class="fa-solid fa-paw text-orange-500 mr-2"></i>
                                Animal Conservation
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

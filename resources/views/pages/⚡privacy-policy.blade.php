<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Privacy Policy - Glacial Studio')] class extends Component {};

?>

<div>
    <livewire:header />

    <div class="min-h-screen bg-glacier-950">
        <div class="container-custom py-20 lg:py-28">
            <div class="max-w-4xl mx-auto">
                {{-- Page Header --}}
                <div class="text-center mb-14" x-data="{ shown: false }" x-intersect.once="shown = true">
                    <div
                        :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                        class="transition-all duration-700"
                    >
                        <span class="section-label">
                            <i class="fa-solid fa-shield-halved text-[10px]" aria-hidden="true"></i>
                            Legal
                        </span>
                    </div>
                    <h1
                        class="text-4xl md:text-5xl font-display font-bold text-white mb-4"
                        :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                        style="transition: all 0.7s ease; transition-delay: 100ms;"
                    >
                        Privacy <span class="gradient-text">Policy</span>
                    </h1>
                    <p
                        class="text-glacier-400"
                        :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                        style="transition: all 0.7s ease; transition-delay: 200ms;"
                    >
                        Last updated: {{ date('F j, Y') }}
                    </p>
                </div>

                {{-- Content --}}
                <div class="glass-card p-8 md:p-12 space-y-10">

                    <section>
                        <h2 class="text-2xl font-display font-semibold text-white mb-4">Introduction</h2>
                        <p class="text-glacier-400 leading-relaxed mb-4">
                            Glacial Studio ("we", "our", or "us") is committed to protecting your privacy. This Privacy
                            Policy explains how we collect, use, disclose, and safeguard your information when you visit
                            our website or use our services.
                        </p>
                        <p class="text-glacier-400 leading-relaxed">
                            By using our website and services, you consent to the data practices described in this
                            policy.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-display font-semibold text-white mb-4">Information We Collect</h2>

                        <h3 class="text-lg font-semibold text-glacier-200 mb-3 font-sans">Personal Information</h3>
                        <p class="text-glacier-400 leading-relaxed mb-4">
                            We may collect personal information that you voluntarily provide to us when you:
                        </p>
                        <ul class="list-disc list-inside text-glacier-400 space-y-2 mb-6 marker:text-primary-500/50">
                            <li>Contact us through our website forms</li>
                            <li>Request a quote for our services</li>
                            <li>Subscribe to our newsletter</li>
                            <li>Engage with our social media accounts</li>
                            <li>Apply for employment opportunities</li>
                        </ul>

                        <p class="text-glacier-400 leading-relaxed mb-4">
                            This information may include:
                        </p>
                        <ul class="list-disc list-inside text-glacier-400 space-y-2 mb-6 marker:text-primary-500/50">
                            <li>Name and contact information (email, phone number)</li>
                            <li>Company name and job title</li>
                            <li>Project requirements and specifications</li>
                            <li>Communication preferences</li>
                        </ul>

                        <h3 class="text-lg font-semibold text-glacier-200 mb-3 font-sans">Automatically Collected Information</h3>
                        <p class="text-glacier-400 leading-relaxed mb-4">
                            When you visit our website, we automatically collect certain information about your device,
                            including:
                        </p>
                        <ul class="list-disc list-inside text-glacier-400 space-y-2 marker:text-primary-500/50">
                            <li>IP address and location data</li>
                            <li>Browser type and version</li>
                            <li>Operating system</li>
                            <li>Pages visited and time spent on each page</li>
                            <li>Referring website</li>
                            <li>Device information</li>
                        </ul>
                    </section>

                    <section>
                        <h2 class="text-2xl font-display font-semibold text-white mb-4">How We Use Your Information</h2>
                        <p class="text-glacier-400 leading-relaxed mb-4">
                            We use the information we collect to:
                        </p>
                        <ul class="list-disc list-inside text-glacier-400 space-y-2 mb-6 marker:text-primary-500/50">
                            <li>Provide and maintain our web development services</li>
                            <li>Respond to your inquiries and provide customer support</li>
                            <li>Send you project updates and communications</li>
                            <li>Improve our website and services</li>
                            <li>Comply with legal obligations</li>
                            <li>Protect against fraud and abuse</li>
                        </ul>
                    </section>

                    <section>
                        <h2 class="text-2xl font-display font-semibold text-white mb-4">Information Sharing and Disclosure</h2>
                        <p class="text-glacier-400 leading-relaxed mb-4">
                            We do not sell, trade, or otherwise transfer your personal information to third parties
                            without your consent, except in the following circumstances:
                        </p>
                        <ul class="list-disc list-inside text-glacier-400 space-y-2 mb-6 marker:text-primary-500/50">
                            <li><strong class="text-glacier-200">Service Providers:</strong> We may share information with trusted third-party
                                service providers who assist us in operating our website and providing services</li>
                            <li><strong class="text-glacier-200">Legal Requirements:</strong> We may disclose information if required by law or
                                to protect our rights and safety</li>
                            <li><strong class="text-glacier-200">Business Transfers:</strong> In the event of a merger, acquisition, or sale of
                                assets, your information may be transferred</li>
                        </ul>
                    </section>

                    <section>
                        <h2 class="text-2xl font-display font-semibold text-white mb-4">Data Security</h2>
                        <p class="text-glacier-400 leading-relaxed">
                            We implement appropriate technical and organizational security measures to protect your
                            personal information against unauthorized access, alteration, disclosure, or destruction.
                            However, no method of transmission over the internet is 100% secure.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-display font-semibold text-white mb-4">Your Rights</h2>
                        <p class="text-glacier-400 leading-relaxed mb-4">
                            Under UK data protection law, you have the following rights:
                        </p>
                        <ul class="list-disc list-inside text-glacier-400 space-y-2 mb-6 marker:text-primary-500/50">
                            <li><strong class="text-glacier-200">Access:</strong> Request a copy of the personal data we hold about you</li>
                            <li><strong class="text-glacier-200">Rectification:</strong> Request correction of inaccurate personal data</li>
                            <li><strong class="text-glacier-200">Erasure:</strong> Request deletion of your personal data</li>
                            <li><strong class="text-glacier-200">Restriction:</strong> Request restriction of processing of your data</li>
                            <li><strong class="text-glacier-200">Portability:</strong> Request transfer of your data to another controller</li>
                            <li><strong class="text-glacier-200">Objection:</strong> Object to processing of your personal data</li>
                        </ul>
                        <p class="text-glacier-400 leading-relaxed">
                            To exercise these rights, please contact us using the information provided below.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-display font-semibold text-white mb-4">Cookies and Tracking Technologies</h2>
                        <p class="text-glacier-400 leading-relaxed">
                            We use cookies and similar tracking technologies to enhance your browsing experience and
                            analyze website traffic. You can control cookie settings through your browser preferences.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-display font-semibold text-white mb-4">Third-Party Links</h2>
                        <p class="text-glacier-400 leading-relaxed">
                            Our website may contain links to third-party websites. We are not responsible for the
                            privacy practices of these external sites. We encourage you to review their privacy
                            policies.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-display font-semibold text-white mb-4">Children's Privacy</h2>
                        <p class="text-glacier-400 leading-relaxed">
                            Our services are not intended for children under 13 years of age. We do not knowingly
                            collect personal information from children under 13.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-display font-semibold text-white mb-4">Changes to This Privacy Policy</h2>
                        <p class="text-glacier-400 leading-relaxed">
                            We may update this Privacy Policy from time to time. We will notify you of any changes by
                            posting the new Privacy Policy on this page and updating the "Last updated" date.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-display font-semibold text-white mb-4">Contact Us</h2>
                        <p class="text-glacier-400 leading-relaxed mb-4">
                            If you have any questions about this Privacy Policy or our data practices, please contact
                            us:
                        </p>
                        <div class="bg-white/[0.03] border border-white/[0.06] rounded-xl p-6">
                            <p class="text-white font-medium">Glacial Studio</p>
                            <p class="text-glacier-400 text-sm">Email: info@glacialstudio.com</p>
                            <p class="text-glacier-400 text-sm">Location: United Kingdom</p>
                        </div>
                    </section>

                </div>

                {{-- Back to Home --}}
                <div class="text-center mt-10">
                    <a href="{{ route('home') }}" class="btn-secondary group">
                        <i class="fa-solid fa-arrow-left mr-2 group-hover:-translate-x-1 transition-transform duration-200" aria-hidden="true"></i>
                        Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>

    <livewire:footer />
</div>

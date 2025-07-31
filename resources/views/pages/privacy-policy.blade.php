<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Glacial Studio - Professional web development and digital solutions. Creating modern, effective web applications and digital experiences.">
    <meta name="keywords" content="web development, digital solutions, Laravel, modern web applications">
    <meta name="author" content="Glacial Studio">

    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Glacial Studio" />
    <link rel="manifest" href="/site.webmanifest" />

    <title>Privacy Policy - Glacial Studio</title>

    <!-- Modern Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="font-sans antialiased bg-white">

    {{-- Header --}}
    @include('includes.header')

    <div class="min-h-screen bg-gradient-to-br from-glacier-50 via-white to-primary-50">
        <div class="container-custom py-16">
            <div class="max-w-4xl mx-auto">
                {{-- Page Header --}}
                <div class="text-center mb-12">
                    <h1 class="text-4xl md:text-5xl font-display font-bold text-glacier-900 mb-6">
                        Privacy <span class="gradient-text">Policy</span>
                    </h1>
                    <p class="text-lg text-glacier-600">
                        Last updated: {{ date('F j, Y') }}
                    </p>
                </div>

                {{-- Content --}}
                <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12 space-y-8">

                    {{-- Introduction --}}
                    <section>
                        <h2 class="text-2xl font-display font-semibold text-glacier-900 mb-4">Introduction</h2>
                        <p class="text-glacier-600 leading-relaxed mb-4">
                            Glacial Studio ("we", "our", or "us") is committed to protecting your privacy. This Privacy
                            Policy explains how we collect, use, disclose, and safeguard your information when you visit
                            our website or use our services.
                        </p>
                        <p class="text-glacier-600 leading-relaxed">
                            By using our website and services, you consent to the data practices described in this
                            policy.
                        </p>
                    </section>

                    {{-- Information We Collect --}}
                    <section>
                        <h2 class="text-2xl font-display font-semibold text-glacier-900 mb-4">Information We Collect
                        </h2>

                        <h3 class="text-xl font-semibold text-glacier-800 mb-3">Personal Information</h3>
                        <p class="text-glacier-600 leading-relaxed mb-4">
                            We may collect personal information that you voluntarily provide to us when you:
                        </p>
                        <ul class="list-disc list-inside text-glacier-600 space-y-2 mb-6">
                            <li>Contact us through our website forms</li>
                            <li>Request a quote for our services</li>
                            <li>Subscribe to our newsletter</li>
                            <li>Engage with our social media accounts</li>
                            <li>Apply for employment opportunities</li>
                        </ul>

                        <p class="text-glacier-600 leading-relaxed mb-4">
                            This information may include:
                        </p>
                        <ul class="list-disc list-inside text-glacier-600 space-y-2 mb-6">
                            <li>Name and contact information (email, phone number)</li>
                            <li>Company name and job title</li>
                            <li>Project requirements and specifications</li>
                            <li>Communication preferences</li>
                        </ul>

                        <h3 class="text-xl font-semibold text-glacier-800 mb-3">Automatically Collected Information</h3>
                        <p class="text-glacier-600 leading-relaxed mb-4">
                            When you visit our website, we automatically collect certain information about your device,
                            including:
                        </p>
                        <ul class="list-disc list-inside text-glacier-600 space-y-2">
                            <li>IP address and location data</li>
                            <li>Browser type and version</li>
                            <li>Operating system</li>
                            <li>Pages visited and time spent on each page</li>
                            <li>Referring website</li>
                            <li>Device information</li>
                        </ul>
                    </section>

                    {{-- How We Use Your Information --}}
                    <section>
                        <h2 class="text-2xl font-display font-semibold text-glacier-900 mb-4">How We Use Your
                            Information</h2>
                        <p class="text-glacier-600 leading-relaxed mb-4">
                            We use the information we collect to:
                        </p>
                        <ul class="list-disc list-inside text-glacier-600 space-y-2 mb-6">
                            <li>Provide and maintain our web development services</li>
                            <li>Respond to your inquiries and provide customer support</li>
                            <li>Send you project updates and communications</li>
                            <li>Improve our website and services</li>
                            <li>Comply with legal obligations</li>
                            <li>Protect against fraud and abuse</li>
                        </ul>
                    </section>

                    {{-- Information Sharing --}}
                    <section>
                        <h2 class="text-2xl font-display font-semibold text-glacier-900 mb-4">Information Sharing and
                            Disclosure</h2>
                        <p class="text-glacier-600 leading-relaxed mb-4">
                            We do not sell, trade, or otherwise transfer your personal information to third parties
                            without your consent, except in the following circumstances:
                        </p>
                        <ul class="list-disc list-inside text-glacier-600 space-y-2 mb-6">
                            <li><strong>Service Providers:</strong> We may share information with trusted third-party
                                service providers who assist us in operating our website and providing services</li>
                            <li><strong>Legal Requirements:</strong> We may disclose information if required by law or
                                to protect our rights and safety</li>
                            <li><strong>Business Transfers:</strong> In the event of a merger, acquisition, or sale of
                                assets, your information may be transferred</li>
                        </ul>
                    </section>

                    {{-- Data Security --}}
                    <section>
                        <h2 class="text-2xl font-display font-semibold text-glacier-900 mb-4">Data Security</h2>
                        <p class="text-glacier-600 leading-relaxed mb-4">
                            We implement appropriate technical and organizational security measures to protect your
                            personal information against unauthorized access, alteration, disclosure, or destruction.
                            However, no method of transmission over the internet is 100% secure.
                        </p>
                    </section>

                    {{-- Your Rights --}}
                    <section>
                        <h2 class="text-2xl font-display font-semibold text-glacier-900 mb-4">Your Rights</h2>
                        <p class="text-glacier-600 leading-relaxed mb-4">
                            Under UK data protection law, you have the following rights:
                        </p>
                        <ul class="list-disc list-inside text-glacier-600 space-y-2 mb-6">
                            <li><strong>Access:</strong> Request a copy of the personal data we hold about you</li>
                            <li><strong>Rectification:</strong> Request correction of inaccurate personal data</li>
                            <li><strong>Erasure:</strong> Request deletion of your personal data</li>
                            <li><strong>Restriction:</strong> Request restriction of processing of your data</li>
                            <li><strong>Portability:</strong> Request transfer of your data to another controller</li>
                            <li><strong>Objection:</strong> Object to processing of your personal data</li>
                        </ul>
                        <p class="text-glacier-600 leading-relaxed">
                            To exercise these rights, please contact us using the information provided below.
                        </p>
                    </section>

                    {{-- Cookies --}}
                    <section>
                        <h2 class="text-2xl font-display font-semibold text-glacier-900 mb-4">Cookies and Tracking
                            Technologies</h2>
                        <p class="text-glacier-600 leading-relaxed mb-4">
                            We use cookies and similar tracking technologies to enhance your browsing experience and
                            analyze website traffic. You can control cookie settings through your browser preferences.
                        </p>
                    </section>

                    {{-- Third-Party Links --}}
                    <section>
                        <h2 class="text-2xl font-display font-semibold text-glacier-900 mb-4">Third-Party Links</h2>
                        <p class="text-glacier-600 leading-relaxed">
                            Our website may contain links to third-party websites. We are not responsible for the
                            privacy practices of these external sites. We encourage you to review their privacy
                            policies.
                        </p>
                    </section>

                    {{-- Children's Privacy --}}
                    <section>
                        <h2 class="text-2xl font-display font-semibold text-glacier-900 mb-4">Children's Privacy</h2>
                        <p class="text-glacier-600 leading-relaxed">
                            Our services are not intended for children under 13 years of age. We do not knowingly
                            collect personal information from children under 13.
                        </p>
                    </section>

                    {{-- Changes to Policy --}}
                    <section>
                        <h2 class="text-2xl font-display font-semibold text-glacier-900 mb-4">Changes to This Privacy
                            Policy</h2>
                        <p class="text-glacier-600 leading-relaxed">
                            We may update this Privacy Policy from time to time. We will notify you of any changes by
                            posting the new Privacy Policy on this page and updating the "Last updated" date.
                        </p>
                    </section>

                    {{-- Contact Information --}}
                    <section>
                        <h2 class="text-2xl font-display font-semibold text-glacier-900 mb-4">Contact Us</h2>
                        <p class="text-glacier-600 leading-relaxed mb-4">
                            If you have any questions about this Privacy Policy or our data practices, please contact
                            us:
                        </p>
                        <div class="bg-glacier-50 rounded-lg p-6">
                            <p class="text-glacier-700 font-medium">Glacial Studio</p>
                            <p class="text-glacier-600">Email: info@glacialstudio.com</p>
                            <p class="text-glacier-600">Location: United Kingdom</p>
                        </div>
                    </section>

                </div>

                {{-- Back to Home --}}
                <div class="text-center mt-8">
                    <a href="{{ route('home') }}" class="btn-primary">
                        <i class="fa-solid fa-arrow-left mr-2"></i>
                        Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('includes.footer')

</body>

</html>

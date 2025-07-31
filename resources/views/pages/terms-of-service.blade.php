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

    <title>Terms of Service - Glacial Studio</title>

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
                        Terms of <span class="gradient-text">Service</span>
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
                            These Terms of Service ("Terms") govern your use of Glacial Studio's website and services.
                            By accessing or using our services, you agree to be bound by these Terms.
                        </p>
                        <p class="text-glacier-600 leading-relaxed">
                            Glacial Studio ("we", "our", or "us") provides web development and digital services. These
                            Terms apply to all users of our website and services.
                        </p>
                    </section>

                    {{-- Services --}}
                    <section>
                        <h2 class="text-2xl font-display font-semibold text-glacier-900 mb-4">Services</h2>
                        <p class="text-glacier-600 leading-relaxed mb-4">
                            We provide the following services:
                        </p>
                        <ul class="list-disc list-inside text-glacier-600 space-y-2 mb-6">
                            <li>Web application development</li>
                            <li>Website design and development</li>
                            <li>Digital solutions and consulting</li>
                            <li>Maintenance and support services</li>
                            <li>Custom software development</li>
                        </ul>
                        <p class="text-glacier-600 leading-relaxed">
                            We reserve the right to modify, suspend, or discontinue any part of our services at any
                            time.
                        </p>
                    </section>

                    {{-- User Responsibilities --}}
                    <section>
                        <h2 class="text-2xl font-display font-semibold text-glacier-900 mb-4">User Responsibilities</h2>
                        <p class="text-glacier-600 leading-relaxed mb-4">
                            When using our services, you agree to:
                        </p>
                        <ul class="list-disc list-inside text-glacier-600 space-y-2 mb-6">
                            <li>Provide accurate and complete information</li>
                            <li>Maintain the security of your account and information</li>
                            <li>Not use our services for any illegal or unauthorized purpose</li>
                            <li>Not interfere with or disrupt our services</li>
                            <li>Comply with all applicable laws and regulations</li>
                            <li>Respect intellectual property rights</li>
                        </ul>
                    </section>

                    {{-- Payment Terms --}}
                    <section>
                        <h2 class="text-2xl font-display font-semibold text-glacier-900 mb-4">Payment Terms</h2>
                        <p class="text-glacier-600 leading-relaxed mb-4">
                            For paid services:
                        </p>
                        <ul class="list-disc list-inside text-glacier-600 space-y-2 mb-6">
                            <li>Payment terms will be specified in individual project agreements</li>
                            <li>All prices are quoted in British Pounds (GBP) unless otherwise stated</li>
                            <li>Payment is due according to the agreed schedule</li>
                            <li>Late payments may result in service suspension</li>
                            <li>Refunds are handled on a case-by-case basis</li>
                        </ul>
                    </section>

                    {{-- Intellectual Property --}}
                    <section>
                        <h2 class="text-2xl font-display font-semibold text-glacier-900 mb-4">Intellectual Property</h2>
                        <p class="text-glacier-600 leading-relaxed mb-4">
                            <strong>Our Rights:</strong> We retain ownership of our proprietary technology, designs, and
                            methodologies.
                        </p>
                        <p class="text-glacier-600 leading-relaxed mb-4">
                            <strong>Client Rights:</strong> Upon full payment, clients own the custom deliverables
                            created for their project, subject to any third-party licensing restrictions.
                        </p>
                        <p class="text-glacier-600 leading-relaxed">
                            <strong>Portfolio Rights:</strong> We may include completed projects in our portfolio and
                            marketing materials unless otherwise agreed in writing.
                        </p>
                    </section>

                    {{-- Project Terms --}}
                    <section>
                        <h2 class="text-2xl font-display font-semibold text-glacier-900 mb-4">Project Terms</h2>
                        <p class="text-glacier-600 leading-relaxed mb-4">
                            For custom development projects:
                        </p>
                        <ul class="list-disc list-inside text-glacier-600 space-y-2 mb-6">
                            <li>Project scope and deliverables will be defined in a separate agreement</li>
                            <li>Timelines are estimates and may be subject to change</li>
                            <li>Client feedback and approval are required at designated milestones</li>
                            <li>Changes to project scope may affect timeline and pricing</li>
                            <li>Final deliverables will be provided upon project completion and payment</li>
                        </ul>
                    </section>

                    {{-- Limitation of Liability --}}
                    <section>
                        <h2 class="text-2xl font-display font-semibold text-glacier-900 mb-4">Limitation of Liability
                        </h2>
                        <p class="text-glacier-600 leading-relaxed mb-4">
                            To the maximum extent permitted by law:
                        </p>
                        <ul class="list-disc list-inside text-glacier-600 space-y-2 mb-6">
                            <li>We are not liable for any indirect, incidental, or consequential damages</li>
                            <li>Our total liability is limited to the amount paid for the specific service</li>
                            <li>We are not responsible for third-party services or integrations</li>
                            <li>We do not guarantee uninterrupted or error-free service</li>
                        </ul>
                    </section>

                    {{-- Warranty and Support --}}
                    <section>
                        <h2 class="text-2xl font-display font-semibold text-glacier-900 mb-4">Warranty and Support</h2>
                        <p class="text-glacier-600 leading-relaxed mb-4">
                            <strong>Warranty:</strong> We provide a 30-day warranty period for custom development work,
                            during which we will fix any bugs or issues that prevent the agreed functionality from
                            working as specified.
                        </p>
                        <p class="text-glacier-600 leading-relaxed mb-4">
                            <strong>Support:</strong> Ongoing support and maintenance services are available under
                            separate agreements.
                        </p>
                        <p class="text-glacier-600 leading-relaxed">
                            <strong>Exclusions:</strong> Warranty does not cover issues caused by third-party services,
                            client modifications, or changes in requirements after project completion.
                        </p>
                    </section>

                    {{-- Confidentiality --}}
                    <section>
                        <h2 class="text-2xl font-display font-semibold text-glacier-900 mb-4">Confidentiality</h2>
                        <p class="text-glacier-600 leading-relaxed mb-4">
                            We respect the confidentiality of your business information and will:
                        </p>
                        <ul class="list-disc list-inside text-glacier-600 space-y-2 mb-6">
                            <li>Keep your information confidential unless required by law</li>
                            <li>Use your information only for the purpose of providing our services</li>
                            <li>Implement appropriate security measures to protect your data</li>
                            <li>Return or destroy confidential information upon request</li>
                        </ul>
                    </section>

                    {{-- Termination --}}
                    <section>
                        <h2 class="text-2xl font-display font-semibold text-glacier-900 mb-4">Termination</h2>
                        <p class="text-glacier-600 leading-relaxed mb-4">
                            Either party may terminate a service agreement with written notice:
                        </p>
                        <ul class="list-disc list-inside text-glacier-600 space-y-2 mb-6">
                            <li>For ongoing projects, termination will be effective at the next milestone</li>
                            <li>Payment is due for work completed up to the termination date</li>
                            <li>We will deliver any completed work upon final payment</li>
                            <li>Confidentiality obligations survive termination</li>
                        </ul>
                    </section>

                    {{-- Governing Law --}}
                    <section>
                        <h2 class="text-2xl font-display font-semibold text-glacier-900 mb-4">Governing Law</h2>
                        <p class="text-glacier-600 leading-relaxed">
                            These Terms are governed by and construed in accordance with the laws of England and Wales.
                            Any disputes will be subject to the exclusive jurisdiction of the courts of England and
                            Wales.
                        </p>
                    </section>

                    {{-- Changes to Terms --}}
                    <section>
                        <h2 class="text-2xl font-display font-semibold text-glacier-900 mb-4">Changes to Terms</h2>
                        <p class="text-glacier-600 leading-relaxed">
                            We may update these Terms from time to time. We will notify you of any material changes by
                            posting the new Terms on our website and updating the "Last updated" date. Your continued
                            use of our services constitutes acceptance of the updated Terms.
                        </p>
                    </section>

                    {{-- Contact Information --}}
                    <section>
                        <h2 class="text-2xl font-display font-semibold text-glacier-900 mb-4">Contact Us</h2>
                        <p class="text-glacier-600 leading-relaxed mb-4">
                            If you have any questions about these Terms of Service, please contact us:
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

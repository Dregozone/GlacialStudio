<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Terms of Service - Glacial Studio')] class extends Component {};

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
                            <i class="fa-solid fa-file-contract text-[10px]" aria-hidden="true"></i>
                            Legal
                        </span>
                    </div>
                    <h1
                        class="text-4xl md:text-5xl font-display font-bold text-white mb-4"
                        :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                        style="transition: all 0.7s ease; transition-delay: 100ms;"
                    >
                        Terms of <span class="gradient-text">Service</span>
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
                            These Terms of Service ("Terms") govern your use of Glacial Studio's website and services.
                            By accessing or using our services, you agree to be bound by these Terms.
                        </p>
                        <p class="text-glacier-400 leading-relaxed">
                            Glacial Studio ("we", "our", or "us") provides web development and digital services. These
                            Terms apply to all users of our website and services.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-display font-semibold text-white mb-4">Services</h2>
                        <p class="text-glacier-400 leading-relaxed mb-4">
                            We provide the following services:
                        </p>
                        <ul class="list-disc list-inside text-glacier-400 space-y-2 mb-6 marker:text-primary-500/50">
                            <li>Web application development</li>
                            <li>Website design and development</li>
                            <li>Digital solutions and consulting</li>
                            <li>Maintenance and support services</li>
                            <li>Custom software development</li>
                        </ul>
                        <p class="text-glacier-400 leading-relaxed">
                            We reserve the right to modify, suspend, or discontinue any part of our services at any
                            time.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-display font-semibold text-white mb-4">User Responsibilities</h2>
                        <p class="text-glacier-400 leading-relaxed mb-4">
                            When using our services, you agree to:
                        </p>
                        <ul class="list-disc list-inside text-glacier-400 space-y-2 mb-6 marker:text-primary-500/50">
                            <li>Provide accurate and complete information</li>
                            <li>Maintain the security of your account and information</li>
                            <li>Not use our services for any illegal or unauthorized purpose</li>
                            <li>Not interfere with or disrupt our services</li>
                            <li>Comply with all applicable laws and regulations</li>
                            <li>Respect intellectual property rights</li>
                        </ul>
                    </section>

                    <section>
                        <h2 class="text-2xl font-display font-semibold text-white mb-4">Payment Terms</h2>
                        <p class="text-glacier-400 leading-relaxed mb-4">
                            For paid services:
                        </p>
                        <ul class="list-disc list-inside text-glacier-400 space-y-2 mb-6 marker:text-primary-500/50">
                            <li>Payment terms will be specified in individual project agreements</li>
                            <li>All prices are quoted in British Pounds (GBP) unless otherwise stated</li>
                            <li>Payment is due according to the agreed schedule</li>
                            <li>Late payments may result in service suspension</li>
                            <li>Refunds are handled on a case-by-case basis</li>
                        </ul>
                    </section>

                    <section>
                        <h2 class="text-2xl font-display font-semibold text-white mb-4">Intellectual Property</h2>
                        <p class="text-glacier-400 leading-relaxed mb-4">
                            <strong class="text-glacier-200">Our Rights:</strong> We retain ownership of our proprietary technology, designs, and
                            methodologies.
                        </p>
                        <p class="text-glacier-400 leading-relaxed mb-4">
                            <strong class="text-glacier-200">Client Rights:</strong> Upon full payment, clients own the custom deliverables
                            created for their project, subject to any third-party licensing restrictions.
                        </p>
                        <p class="text-glacier-400 leading-relaxed">
                            <strong class="text-glacier-200">Portfolio Rights:</strong> We may include completed projects in our portfolio and
                            marketing materials unless otherwise agreed in writing.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-display font-semibold text-white mb-4">Project Terms</h2>
                        <p class="text-glacier-400 leading-relaxed mb-4">
                            For custom development projects:
                        </p>
                        <ul class="list-disc list-inside text-glacier-400 space-y-2 mb-6 marker:text-primary-500/50">
                            <li>Project scope and deliverables will be defined in a separate agreement</li>
                            <li>Timelines are estimates and may be subject to change</li>
                            <li>Client feedback and approval are required at designated milestones</li>
                            <li>Changes to project scope may affect timeline and pricing</li>
                            <li>Final deliverables will be provided upon project completion and payment</li>
                        </ul>
                    </section>

                    <section>
                        <h2 class="text-2xl font-display font-semibold text-white mb-4">Limitation of Liability</h2>
                        <p class="text-glacier-400 leading-relaxed mb-4">
                            To the maximum extent permitted by law:
                        </p>
                        <ul class="list-disc list-inside text-glacier-400 space-y-2 mb-6 marker:text-primary-500/50">
                            <li>We are not liable for any indirect, incidental, or consequential damages</li>
                            <li>Our total liability is limited to the amount paid for the specific service</li>
                            <li>We are not responsible for third-party services or integrations</li>
                            <li>We do not guarantee uninterrupted or error-free service</li>
                        </ul>
                    </section>

                    <section>
                        <h2 class="text-2xl font-display font-semibold text-white mb-4">Warranty and Support</h2>
                        <p class="text-glacier-400 leading-relaxed mb-4">
                            <strong class="text-glacier-200">Warranty:</strong> We provide a 30-day warranty period for custom development work,
                            during which we will fix any bugs or issues that prevent the agreed functionality from
                            working as specified.
                        </p>
                        <p class="text-glacier-400 leading-relaxed mb-4">
                            <strong class="text-glacier-200">Support:</strong> Ongoing support and maintenance services are available under
                            separate agreements.
                        </p>
                        <p class="text-glacier-400 leading-relaxed">
                            <strong class="text-glacier-200">Exclusions:</strong> Warranty does not cover issues caused by third-party services,
                            client modifications, or changes in requirements after project completion.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-display font-semibold text-white mb-4">Confidentiality</h2>
                        <p class="text-glacier-400 leading-relaxed mb-4">
                            We respect the confidentiality of your business information and will:
                        </p>
                        <ul class="list-disc list-inside text-glacier-400 space-y-2 mb-6 marker:text-primary-500/50">
                            <li>Keep your information confidential unless required by law</li>
                            <li>Use your information only for the purpose of providing our services</li>
                            <li>Implement appropriate security measures to protect your data</li>
                            <li>Return or destroy confidential information upon request</li>
                        </ul>
                    </section>

                    <section>
                        <h2 class="text-2xl font-display font-semibold text-white mb-4">Termination</h2>
                        <p class="text-glacier-400 leading-relaxed mb-4">
                            Either party may terminate a service agreement with written notice:
                        </p>
                        <ul class="list-disc list-inside text-glacier-400 space-y-2 mb-6 marker:text-primary-500/50">
                            <li>For ongoing projects, termination will be effective at the next milestone</li>
                            <li>Payment is due for work completed up to the termination date</li>
                            <li>We will deliver any completed work upon final payment</li>
                            <li>Confidentiality obligations survive termination</li>
                        </ul>
                    </section>

                    <section>
                        <h2 class="text-2xl font-display font-semibold text-white mb-4">Governing Law</h2>
                        <p class="text-glacier-400 leading-relaxed">
                            These Terms are governed by and construed in accordance with the laws of England and Wales.
                            Any disputes will be subject to the exclusive jurisdiction of the courts of England and
                            Wales.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-display font-semibold text-white mb-4">Changes to Terms</h2>
                        <p class="text-glacier-400 leading-relaxed">
                            We may update these Terms from time to time. We will notify you of any material changes by
                            posting the new Terms on our website and updating the "Last updated" date. Your continued
                            use of our services constitutes acceptance of the updated Terms.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-display font-semibold text-white mb-4">Contact Us</h2>
                        <p class="text-glacier-400 leading-relaxed mb-4">
                            If you have any questions about these Terms of Service, please contact us:
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

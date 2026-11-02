@extends('layouts.app')

@section('title', 'Community-Built Digital Village Hub | Zee Tech Foundation')
@section('meta_description', 'Connecting People. Building Skills. Creating Opportunities. A proposed initiative under Zee Tech Foundation’s “No One Left Offline” vision.')

@section('content')
    <!-- Top Header Navigation -->
    @include('components.navbar')

    <main>
        <!-- 1. Homepage Hero Slider -->
        @include('components.hero-slider')

        <!-- 2. Section A (The Challenge) & Section B (Introducing the Hub) -->
        @include('sections.challenge')

        <!-- 3. Section C: What the Hub Aims to Offer -->
        @include('sections.offerings')

        <!-- 4. Section D: Proposed Hub Architectural Design -->
        @include('sections.design')

        <!-- 5. Section E: Our Approach (6 Steps) -->
        @include('sections.approach')

        <!-- 6. Section F: Expected Impact -->
        @include('sections.impact')

        <!-- 7. Section G: Our Hubs Across Nigeria -->
        @include('sections.hubs')

        <!-- 8. Section H (Partners & Donors) & Section I (Final Call to Action) -->
        @include('sections.partners')

        <!-- 9. Interactive Forms Section (Partner Inquiries & Contact Zee Tech Foundation) -->
        @include('sections.forms')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-950 text-slate-400 py-16 border-t border-slate-800 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 pb-12 border-b border-white/10">
                <div class="md:col-span-2 space-y-4">
                    <div class="inline-flex items-center gap-3 bg-white/5 p-2 rounded-xl border border-white/10">
                        <img src="{{ asset('images/logo.jpeg') }}" alt="Zee Tech Foundation" class="h-10 w-auto rounded object-contain">
                        <div class="text-left">
                            <span class="block text-xs uppercase font-bold text-emerald-400">Zee Tech Foundation</span>
                            <span class="text-sm font-semibold text-white">Community-Built Digital Village Hub</span>
                        </div>
                    </div>
                    <p class="text-slate-400 text-xs sm:text-sm leading-relaxed max-w-md">
                        Connecting People. Building Skills. Creating Opportunities. A proposed initiative under Zee Tech Foundation’s “No One Left Offline” vision.
                    </p>
                </div>

                <div>
                    <h4 class="text-xs uppercase font-bold tracking-wider text-white mb-4">Quick Navigation</h4>
                    <ul class="space-y-2 text-xs">
                        <li><a href="#vision" class="hover:text-emerald-400 transition-colors">Our Vision</a></li>
                        <li><a href="#about" class="hover:text-emerald-400 transition-colors">The Hub Concept</a></li>
                        <li><a href="#offerings" class="hover:text-emerald-400 transition-colors">What We Offer</a></li>
                        <li><a href="#design" class="hover:text-emerald-400 transition-colors">Facility Architecture</a></li>
                        <li><a href="#approach" class="hover:text-emerald-400 transition-colors">Our 6-Step Approach</a></li>
                        <li><a href="#locations" class="hover:text-emerald-400 transition-colors">Nigeria Hub Locations</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-xs uppercase font-bold tracking-wider text-white mb-4">Get Involved</h4>
                    <ul class="space-y-2 text-xs">
                        <li><a href="#partner-form" class="hover:text-emerald-400 transition-colors">Partner With Us</a></li>
                        <li><a href="#contact" class="hover:text-emerald-400 transition-colors">Contact Zee Tech Foundation</a></li>
                        <li><a href="#design" class="hover:text-emerald-400 transition-colors">Site Design Note</a></li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
                <p>
                    &copy; {{ date('Y') }} Zee Tech Foundation. All rights reserved.
                </p>
                <p class="text-[11px] max-w-lg text-center sm:text-right text-slate-500">
                    The Community-Built Digital Village Hub is a proposed initiative. Final construction specifications, costs, accessibility requirements, and hub locations will be validated before implementation.
                </p>
            </div>
        </div>
    </footer>
@endsection

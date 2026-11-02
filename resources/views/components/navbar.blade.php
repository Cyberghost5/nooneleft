<header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-200/80 transition-all duration-300 shadow-xs" id="site-header">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20 gap-4">
            
            <!-- Brand Logo & Clean Lockup -->
            <a href="{{ url('/') }}" class="shrink-0 flex items-center gap-3 group focus:outline-none focus:ring-2 focus:ring-emerald-500 rounded-xl p-1 -ml-1 transition-all">
                <img src="{{ asset('images/logo.jpeg') }}" 
                     alt="Zee Tech Foundation - Community-Built Digital Village Hub" 
                     class="h-11 sm:h-12 w-auto object-contain transition-transform duration-300 group-hover:scale-105 rounded-lg shadow-xs">
                <div class="flex flex-col justify-center">
                    <span class="text-[11px] sm:text-xs font-bold uppercase tracking-wider text-emerald-700 leading-none font-heading">
                        Zee Tech Foundation
                    </span>
                    <span class="text-sm sm:text-base font-extrabold text-slate-900 tracking-tight leading-tight mt-1 group-hover:text-emerald-700 transition-colors">
                        Digital Village Hub
                    </span>
                </div>
            </a>

            <!-- Desktop Navigation Links (with whitespace-nowrap preventing awkward line breaks) -->
            <nav class="hidden lg:flex items-center space-x-0.5 xl:space-x-1 font-medium text-xs xl:text-sm text-slate-600 shrink min-w-0" aria-label="Main Navigation">
                <a href="#vision" class="whitespace-nowrap px-2.5 xl:px-3.5 py-2 rounded-lg hover:text-emerald-700 hover:bg-emerald-50/70 transition-all">Our Vision</a>
                <a href="#about" class="whitespace-nowrap px-2.5 xl:px-3.5 py-2 rounded-lg hover:text-emerald-700 hover:bg-emerald-50/70 transition-all">The Hub</a>
                <a href="#offerings" class="whitespace-nowrap px-2.5 xl:px-3.5 py-2 rounded-lg hover:text-emerald-700 hover:bg-emerald-50/70 transition-all">What We Offer</a>
                <a href="#design" class="whitespace-nowrap px-2.5 xl:px-3.5 py-2 rounded-lg hover:text-emerald-700 hover:bg-emerald-50/70 transition-all">Facility Design</a>
                <a href="#approach" class="whitespace-nowrap px-2.5 xl:px-3.5 py-2 rounded-lg hover:text-emerald-700 hover:bg-emerald-50/70 transition-all">Our Approach</a>
                <a href="#locations" class="whitespace-nowrap px-2.5 xl:px-3.5 py-2 rounded-lg hover:text-emerald-700 hover:bg-emerald-50/70 transition-all">Hubs</a>
            </nav>

            <!-- Desktop Action Buttons -->
            <div class="hidden lg:flex items-center gap-2 xl:gap-3 shrink-0">
                <a href="#contact" class="whitespace-nowrap px-3 py-2 text-xs xl:text-sm font-semibold text-slate-700 hover:text-emerald-700 transition-colors rounded-lg hover:bg-slate-50">
                    Contact Us
                </a>
                <a href="#partner-form" class="whitespace-nowrap inline-flex items-center justify-center px-4 xl:px-5 py-2.5 text-xs xl:text-sm font-semibold text-white bg-emerald-700 hover:bg-emerald-800 active:bg-emerald-900 rounded-xl shadow-xs hover:shadow transition-all group">
                    <span>Partner With Us</span>
                    <svg class="w-3.5 h-3.5 ml-1.5 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <div class="flex items-center lg:hidden">
                <button type="button" 
                        id="mobile-menu-btn" 
                        class="p-2.5 rounded-xl text-slate-700 hover:text-emerald-700 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-emerald-500 transition-colors"
                        aria-expanded="false" 
                        aria-controls="mobile-menu"
                        aria-label="Toggle navigation menu">
                    <svg class="h-6 w-6 menu-open-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="h-6 w-6 menu-close-icon hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer Menu -->
    <div id="mobile-menu" class="hidden lg:hidden border-t border-slate-200/80 bg-white/95 backdrop-blur-md px-4 pt-3 pb-6 space-y-1.5 shadow-lg">
        <a href="#vision" class="mobile-nav-link block px-3.5 py-2.5 rounded-xl text-sm font-semibold text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">Our Vision</a>
        <a href="#about" class="mobile-nav-link block px-3.5 py-2.5 rounded-xl text-sm font-semibold text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">The Hub Concept</a>
        <a href="#offerings" class="mobile-nav-link block px-3.5 py-2.5 rounded-xl text-sm font-semibold text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">What We Offer</a>
        <a href="#design" class="mobile-nav-link block px-3.5 py-2.5 rounded-xl text-sm font-semibold text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">Facility Design</a>
        <a href="#approach" class="mobile-nav-link block px-3.5 py-2.5 rounded-xl text-sm font-semibold text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">Our Approach</a>
        <a href="#locations" class="mobile-nav-link block px-3.5 py-2.5 rounded-xl text-sm font-semibold text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">Hubs Across Nigeria</a>
        <a href="#partners" class="mobile-nav-link block px-3.5 py-2.5 rounded-xl text-sm font-semibold text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">Partners &amp; Donors</a>
        
        <div class="pt-4 border-t border-slate-200/80 grid grid-cols-2 gap-3">
            <a href="#contact" class="mobile-nav-link flex items-center justify-center px-4 py-2.5 rounded-xl text-xs font-bold text-slate-800 bg-slate-100 hover:bg-slate-200 transition-colors">
                Contact Us
            </a>
            <a href="#partner-form" class="mobile-nav-link flex items-center justify-center px-4 py-2.5 rounded-xl text-xs font-bold text-white bg-emerald-700 hover:bg-emerald-800 transition-colors shadow-xs">
                Partner With Us
            </a>
        </div>
    </div>
</header>

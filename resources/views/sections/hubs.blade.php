<!-- Section G: Our Hubs Across Nigeria -->
<section id="locations" class="py-20 lg:py-28 bg-slate-900 text-white relative overflow-hidden border-b border-slate-800">
    <!-- Ambient glow -->
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-emerald-500/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-sky-500/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold tracking-wider uppercase bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 mb-4">
                Our Hubs Across Nigeria
            </div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-tight mb-4 font-heading">
                A Growing Vision for Digital Inclusion
            </h2>
            <p class="text-slate-300 text-base sm:text-lg leading-relaxed">
                We aim to develop a model that can be adapted to communities across Nigeria. Our interactive hub map will display verified locations and distinguish operational hubs from proposed sites. Hub locations will be published as they are confirmed.
            </p>
        </div>

        <!-- Filter Controls -->
        <div class="flex items-center justify-center gap-2 sm:gap-4 mb-10 flex-wrap" role="tablist" aria-label="Filter hubs by status">
            <button type="button" 
                    class="hub-filter-btn px-5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all border bg-emerald-600 text-white border-emerald-500 shadow-lg shadow-emerald-600/30"
                    data-filter="all"
                    role="tab"
                    aria-selected="true">
                All Hubs (6)
            </button>
            <button type="button" 
                    class="hub-filter-btn px-5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all border bg-white/5 text-slate-300 border-white/10 hover:bg-white/10"
                    data-filter="proposed"
                    role="tab"
                    aria-selected="false">
                <span class="inline-block w-2 h-2 rounded-full bg-amber-400 mr-2"></span>
                Proposed Sites (5)
            </button>
            <button type="button" 
                    class="hub-filter-btn px-5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all border bg-white/5 text-slate-300 border-white/10 hover:bg-white/10"
                    data-filter="operational"
                    role="tab"
                    aria-selected="false">
                <span class="inline-block w-2 h-2 rounded-full bg-emerald-400 mr-2 animate-pulse"></span>
                Pilot Hub (1)
            </button>
        </div>

        <!-- Interactive Map & Cards Grid Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- Nigeria Vector Visual Map Container -->
            <div class="lg:col-span-7 bg-slate-950/80 rounded-3xl p-6 sm:p-8 border border-white/10 shadow-2xl relative">
                <div class="flex items-center justify-between pb-4 mb-6 border-b border-white/10">
                    <div>
                        <h3 class="text-lg font-bold text-white font-heading">Interactive Nigeria Map</h3>
                        <p class="text-xs text-slate-400">Click a hub marker to inspect facility plans &amp; zone details</p>
                    </div>
                    <span class="text-xs px-2.5 py-1 rounded bg-white/5 text-slate-300 border border-white/10">
                        6 Geopolitical Zones
                    </span>
                </div>

                <!-- Stylized SVG Map of Nigeria with Pin Coordinates -->
                <div class="relative w-full aspect-[4/3] bg-slate-900/60 rounded-2xl border border-white/5 overflow-hidden flex items-center justify-center p-4">
                    
                    <svg viewBox="0 0 800 600" class="w-full h-full text-slate-800" fill="currentColor">
                        <!-- Stylized Nigeria Boundary Path -->
                        <path d="M 170 120 
                                 C 260 70, 380 80, 480 60 
                                 C 550 50, 640 100, 720 180 
                                 C 750 220, 740 310, 700 370 
                                 C 660 430, 600 450, 560 510 
                                 C 520 540, 450 550, 400 520 
                                 C 340 500, 270 540, 200 510 
                                 C 160 490, 110 440, 100 370 
                                 C 90 300, 120 220, 130 170 Z" 
                              fill="#0f172a" 
                              stroke="#334155" 
                              stroke-width="3"
                              stroke-dasharray="2 2"
                              class="transition-colors" />

                        <!-- Zone Regions (Subtle background paths) -->
                        <!-- North West -->
                        <path d="M 180 130 C 270 85, 360 90, 390 190 C 340 230, 270 230, 180 210 Z" fill="#1e293b" opacity="0.6" />
                        <!-- North East -->
                        <path d="M 400 120 C 510 80, 650 120, 690 200 C 620 280, 520 270, 420 220 Z" fill="#1e293b" opacity="0.7" />
                        <!-- North Central -->
                        <path d="M 280 240 C 440 230, 520 260, 510 350 C 370 380, 270 340, 280 240 Z" fill="#0f2b2b" opacity="0.5" />
                        <!-- South West -->
                        <path d="M 130 350 C 240 340, 280 390, 270 480 C 180 480, 140 430, 130 350 Z" fill="#1e293b" opacity="0.6" />
                        <!-- South East -->
                        <path d="M 390 380 C 460 370, 490 420, 470 490 C 390 490, 370 430, 390 380 Z" fill="#0f3b2f" opacity="0.7" />
                        <!-- South South -->
                        <path d="M 290 480 C 420 480, 520 490, 490 530 C 380 540, 280 520, 290 480 Z" fill="#1e293b" opacity="0.6" />

                        <!-- Geographic river lines (Niger & Benue confluence) -->
                        <path d="M 180 260 Q 320 320 370 380 T 560 330" fill="none" stroke="#0ea5e9" stroke-width="2" opacity="0.4" />
                        <path d="M 370 380 Q 380 460 390 530" fill="none" stroke="#0ea5e9" stroke-width="2.5" opacity="0.5" />
                    </svg>

                    <!-- Interactive Pin Markers -->
                    
                    <!-- 1. Enugu (Pilot Operational / Model Site) -->
                    <button type="button" 
                            class="map-pin absolute group cursor-pointer focus:outline-none"
                            style="left: 54%; top: 68%;"
                            data-hub-id="enugu"
                            aria-label="Enugu Pilot Hub">
                        <span class="relative flex h-7 w-7">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-7 w-7 bg-emerald-600 border-2 border-white text-[10px] font-bold text-white items-center justify-center shadow-lg">
                                01
                            </span>
                        </span>
                        <span class="absolute -bottom-7 left-1/2 -translate-x-1/2 whitespace-nowrap bg-slate-950/90 text-[11px] font-semibold text-emerald-300 px-2 py-0.5 rounded shadow pointer-events-none">
                            Ekwesi (Enugu)
                        </span>
                    </button>

                    <!-- 2. Niger State (Proposed) -->
                    <button type="button" 
                            class="map-pin absolute group cursor-pointer focus:outline-none"
                            style="left: 42%; top: 52%;"
                            data-hub-id="niger"
                            aria-label="Bida Rural Hub">
                        <span class="relative flex h-6 w-6">
                            <span class="relative inline-flex rounded-full h-6 w-6 bg-amber-500 border-2 border-white text-[10px] font-bold text-slate-950 items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                02
                            </span>
                        </span>
                        <span class="absolute -bottom-6 left-1/2 -translate-x-1/2 whitespace-nowrap bg-slate-950/90 text-[10px] font-medium text-amber-300 px-2 py-0.5 rounded shadow pointer-events-none">
                            Bida (Niger)
                        </span>
                    </button>

                    <!-- 3. Ogun State (Proposed) -->
                    <button type="button" 
                            class="map-pin absolute group cursor-pointer focus:outline-none"
                            style="left: 24%; top: 68%;"
                            data-hub-id="ogun"
                            aria-label="Ilaro Hub">
                        <span class="relative flex h-6 w-6">
                            <span class="relative inline-flex rounded-full h-6 w-6 bg-amber-500 border-2 border-white text-[10px] font-bold text-slate-950 items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                03
                            </span>
                        </span>
                        <span class="absolute -bottom-6 left-1/2 -translate-x-1/2 whitespace-nowrap bg-slate-950/90 text-[10px] font-medium text-amber-300 px-2 py-0.5 rounded shadow pointer-events-none">
                            Ilaro (Ogun)
                        </span>
                    </button>

                    <!-- 4. Kano State (Proposed) -->
                    <button type="button" 
                            class="map-pin absolute group cursor-pointer focus:outline-none"
                            style="left: 48%; top: 22%;"
                            data-hub-id="kano"
                            aria-label="Kura Hub">
                        <span class="relative flex h-6 w-6">
                            <span class="relative inline-flex rounded-full h-6 w-6 bg-amber-500 border-2 border-white text-[10px] font-bold text-slate-950 items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                04
                            </span>
                        </span>
                        <span class="absolute -bottom-6 left-1/2 -translate-x-1/2 whitespace-nowrap bg-slate-950/90 text-[10px] font-medium text-amber-300 px-2 py-0.5 rounded shadow pointer-events-none">
                            Kura (Kano)
                        </span>
                    </button>

                    <!-- 5. Gombe State (Proposed) -->
                    <button type="button" 
                            class="map-pin absolute group cursor-pointer focus:outline-none"
                            style="left: 72%; top: 34%;"
                            data-hub-id="gombe"
                            aria-label="Billiri Hub">
                        <span class="relative flex h-6 w-6">
                            <span class="relative inline-flex rounded-full h-6 w-6 bg-amber-500 border-2 border-white text-[10px] font-bold text-slate-950 items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                05
                            </span>
                        </span>
                        <span class="absolute -bottom-6 left-1/2 -translate-x-1/2 whitespace-nowrap bg-slate-950/90 text-[10px] font-medium text-amber-300 px-2 py-0.5 rounded shadow pointer-events-none">
                            Billiri (Gombe)
                        </span>
                    </button>

                    <!-- 6. Bayelsa State (Proposed) -->
                    <button type="button" 
                            class="map-pin absolute group cursor-pointer focus:outline-none"
                            style="left: 43%; top: 82%;"
                            data-hub-id="bayelsa"
                            aria-label="Otuasega Hub">
                        <span class="relative flex h-6 w-6">
                            <span class="relative inline-flex rounded-full h-6 w-6 bg-amber-500 border-2 border-white text-[10px] font-bold text-slate-950 items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                06
                            </span>
                        </span>
                        <span class="absolute -bottom-6 left-1/2 -translate-x-1/2 whitespace-nowrap bg-slate-950/90 text-[10px] font-medium text-amber-300 px-2 py-0.5 rounded shadow pointer-events-none">
                            Otuasega (Bayelsa)
                        </span>
                    </button>

                </div>

                <!-- Legend -->
                <div class="mt-4 pt-4 border-t border-white/10 flex items-center justify-between text-xs text-slate-400 flex-wrap gap-2">
                    <div class="flex items-center gap-4">
                        <span class="flex items-center gap-1.5">
                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-400"></span> Pilot Model Hub
                        </span>
                        <span class="flex items-center gap-1.5">
                            <span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span> Proposed Site
                        </span>
                    </div>
                    <span class="italic text-[11px] text-slate-500">
                        Locations published as confirmed
                    </span>
                </div>
            </div>

            <!-- Hub Detail / Cards Column -->
            <div class="lg:col-span-5 space-y-4" id="hubs-card-list">
                
                <!-- Hub 1: Ekwesi (Pilot) -->
                <div class="hub-card p-6 rounded-2xl bg-white/5 border border-emerald-500/40 hover:bg-white/[0.08] transition-all cursor-pointer relative"
                     data-hub-id="enugu"
                     data-status="operational">
                    <div class="flex items-start justify-between gap-4 mb-2">
                        <div>
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-ping"></span>
                                Pilot Blueprint Hub
                            </span>
                            <h4 class="text-xl font-bold text-white mt-1.5 font-heading">Ekwesi Digital Village Hub</h4>
                            <p class="text-xs text-slate-400">Enugu State &middot; South East Zone</p>
                        </div>
                        <span class="text-lg font-bold text-emerald-400 font-heading">#01</span>
                    </div>
                    <p class="text-xs text-slate-300 leading-relaxed mb-4">
                        Primary architectural model site with planned 20-seat computer laboratory, 3 thatched study huts, and rooftop solar power.
                    </p>
                    <div class="grid grid-cols-3 gap-2 text-center text-[11px] pt-3 border-t border-white/10 text-slate-400">
                        <div><strong class="text-white block">20 Seats</strong> Lab Capacity</div>
                        <div><strong class="text-white block">5kW Solar</strong> Off-Grid Array</div>
                        <div><strong class="text-white block">Verified</strong> Community Co-op</div>
                    </div>
                </div>

                <!-- Hub 2: Bida (Proposed) -->
                <div class="hub-card p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-amber-400/40 hover:bg-white/[0.08] transition-all cursor-pointer relative"
                     data-hub-id="niger"
                     data-status="proposed">
                    <div class="flex items-start justify-between gap-4 mb-2">
                        <div>
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-amber-500/20 text-amber-300 border border-amber-500/30">
                                Proposed Initiative Site
                            </span>
                            <h4 class="text-xl font-bold text-white mt-1.5 font-heading">Bida Rural Digital Hub</h4>
                            <p class="text-xs text-slate-400">Niger State &middot; North Central Zone</p>
                        </div>
                        <span class="text-lg font-bold text-slate-500 font-heading">#02</span>
                    </div>
                    <p class="text-xs text-slate-300 leading-relaxed mb-4">
                        Proposed agrarian community hub focused on digital literacy for youth, agricultural market linkages, and artisan skills.
                    </p>
                    <div class="grid grid-cols-3 gap-2 text-center text-[11px] pt-3 border-t border-white/10 text-slate-400">
                        <div><strong class="text-white block">20 Seats</strong> Lab Capacity</div>
                        <div><strong class="text-white block">Solar Hybrid</strong> Target Power</div>
                        <div><strong class="text-white block">In Planning</strong> Community Site</div>
                    </div>
                </div>

                <!-- Hub 3: Ilaro (Proposed) -->
                <div class="hub-card p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-amber-400/40 hover:bg-white/[0.08] transition-all cursor-pointer relative"
                     data-hub-id="ogun"
                     data-status="proposed">
                    <div class="flex items-start justify-between gap-4 mb-2">
                        <div>
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-amber-500/20 text-amber-300 border border-amber-500/30">
                                Proposed Initiative Site
                            </span>
                            <h4 class="text-xl font-bold text-white mt-1.5 font-heading">Ilaro Community Hub</h4>
                            <p class="text-xs text-slate-400">Ogun State &middot; South West Zone</p>
                        </div>
                        <span class="text-lg font-bold text-slate-500 font-heading">#03</span>
                    </div>
                    <p class="text-xs text-slate-300 leading-relaxed mb-4">
                        Proposed community innovation space targeted at secondary school STEM support, teacher digital retraining, and coding clubs.
                    </p>
                    <div class="grid grid-cols-3 gap-2 text-center text-[11px] pt-3 border-t border-white/10 text-slate-400">
                        <div><strong class="text-white block">20 Seats</strong> Lab Capacity</div>
                        <div><strong class="text-white block">Solar Power</strong> Target Power</div>
                        <div><strong class="text-white block">In Planning</strong> Community Site</div>
                    </div>
                </div>

                <!-- Hub 4: Kura (Proposed) -->
                <div class="hub-card p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-amber-400/40 hover:bg-white/[0.08] transition-all cursor-pointer relative"
                     data-hub-id="kano"
                     data-status="proposed">
                    <div class="flex items-start justify-between gap-4 mb-2">
                        <div>
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-amber-500/20 text-amber-300 border border-amber-500/30">
                                Proposed Initiative Site
                            </span>
                            <h4 class="text-xl font-bold text-white mt-1.5 font-heading">Kura Innovation Hub</h4>
                            <p class="text-xs text-slate-400">Kano State &middot; North West Zone</p>
                        </div>
                        <span class="text-lg font-bold text-slate-500 font-heading">#04</span>
                    </div>
                    <p class="text-xs text-slate-300 leading-relaxed mb-4">
                        Proposed learning facility tailored for digital commerce skills, Hausa-inclusive curriculum, and young women's digital empowerment.
                    </p>
                    <div class="grid grid-cols-3 gap-2 text-center text-[11px] pt-3 border-t border-white/10 text-slate-400">
                        <div><strong class="text-white block">20 Seats</strong> Lab Capacity</div>
                        <div><strong class="text-white block">Solar Power</strong> Target Power</div>
                        <div><strong class="text-white block">In Planning</strong> Community Site</div>
                    </div>
                </div>

                <!-- Hub 5: Billiri (Proposed) -->
                <div class="hub-card p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-amber-400/40 hover:bg-white/[0.08] transition-all cursor-pointer relative"
                     data-hub-id="gombe"
                     data-status="proposed">
                    <div class="flex items-start justify-between gap-4 mb-2">
                        <div>
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-amber-500/20 text-amber-300 border border-amber-500/30">
                                Proposed Initiative Site
                            </span>
                            <h4 class="text-xl font-bold text-white mt-1.5 font-heading">Billiri Community Hub</h4>
                            <p class="text-xs text-slate-400">Gombe State &middot; North East Zone</p>
                        </div>
                        <span class="text-lg font-bold text-slate-500 font-heading">#05</span>
                    </div>
                    <p class="text-xs text-slate-300 leading-relaxed mb-4">
                        Proposed tech space supporting digital peacebuilding, vocational tele-work, and grassroots STEM opportunities.
                    </p>
                    <div class="grid grid-cols-3 gap-2 text-center text-[11px] pt-3 border-t border-white/10 text-slate-400">
                        <div><strong class="text-white block">20 Seats</strong> Lab Capacity</div>
                        <div><strong class="text-white block">Solar Power</strong> Target Power</div>
                        <div><strong class="text-white block">In Planning</strong> Community Site</div>
                    </div>
                </div>

                <!-- Hub 6: Otuasega (Proposed) -->
                <div class="hub-card p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-amber-400/40 hover:bg-white/[0.08] transition-all cursor-pointer relative"
                     data-hub-id="bayelsa"
                     data-status="proposed">
                    <div class="flex items-start justify-between gap-4 mb-2">
                        <div>
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-amber-500/20 text-amber-300 border border-amber-500/30">
                                Proposed Initiative Site
                            </span>
                            <h4 class="text-xl font-bold text-white mt-1.5 font-heading">Otuasega Learning Hub</h4>
                            <p class="text-xs text-slate-400">Bayelsa State &middot; South South Zone</p>
                        </div>
                        <span class="text-lg font-bold text-slate-500 font-heading">#06</span>
                    </div>
                    <p class="text-xs text-slate-300 leading-relaxed mb-4">
                        Proposed riverine community hub equipped with satellite connectivity, solar backup, and environmental digital monitoring.
                    </p>
                    <div class="grid grid-cols-3 gap-2 text-center text-[11px] pt-3 border-t border-white/10 text-slate-400">
                        <div><strong class="text-white block">20 Seats</strong> Lab Capacity</div>
                        <div><strong class="text-white block">Satellite + Solar</strong> Target Power</div>
                        <div><strong class="text-white block">In Planning</strong> Community Site</div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Section G Disclaimer Note -->
        <div class="mt-12 text-center text-xs text-slate-400 max-w-2xl mx-auto">
            <span class="font-semibold text-slate-300">Hub Verification Note:</span> Our interactive hub map distinguishes operational hubs from proposed sites. Hub locations will be published as they are confirmed.
        </div>

    </div>
</section>

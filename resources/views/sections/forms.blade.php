<!-- Milestone 5: Interactive Forms Section (Partner With Us & Contact Us) -->
<section id="contact" class="py-20 lg:py-28 bg-slate-50 border-b border-slate-200/80 scroll-mt-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-14">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold tracking-wider uppercase bg-emerald-100 text-emerald-800 border border-emerald-300/60 mb-4">
                Connect With Us
            </div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight mb-4 font-heading">
                Take the Next Step Together
            </h2>
            <p class="text-slate-600 text-base sm:text-lg">
                Whether you represent an institution looking to co-fund or partner, a community seeking hub collaboration, or an advocate for digital inclusion, we’d love to hear from you.
            </p>
        </div>

        <!-- Global Flash Messages -->
        @if (session('partner_success'))
            <div id="partner-success-banner" class="max-w-4xl mx-auto mb-8 p-5 rounded-2xl bg-emerald-50 border border-emerald-300 text-emerald-900 flex items-start gap-4 shadow-sm animate-fade-in" role="alert">
                <div class="w-8 h-8 rounded-xl bg-emerald-600 text-white flex items-center justify-center flex-shrink-0 font-bold">
                    ✓
                </div>
                <div>
                    <h4 class="font-bold text-sm sm:text-base">Partnership Inquiry Received!</h4>
                    <p class="text-xs sm:text-sm text-emerald-800 mt-1">{{ session('partner_success') }}</p>
                </div>
            </div>
        @endif

        @if (session('contact_success'))
            <div id="contact-success-banner" class="max-w-4xl mx-auto mb-8 p-5 rounded-2xl bg-emerald-50 border border-emerald-300 text-emerald-900 flex items-start gap-4 shadow-sm animate-fade-in" role="alert">
                <div class="w-8 h-8 rounded-xl bg-emerald-600 text-white flex items-center justify-center flex-shrink-0 font-bold">
                    ✓
                </div>
                <div>
                    <h4 class="font-bold text-sm sm:text-base">Message Sent Successfully!</h4>
                    <p class="text-xs sm:text-sm text-emerald-800 mt-1">{{ session('contact_success') }}</p>
                </div>
            </div>
        @endif

        <!-- Form Tab Switcher -->
        <div class="max-w-4xl mx-auto bg-white rounded-3xl shadow-xl border border-slate-200/80 overflow-hidden">
            
            <div class="flex border-b border-slate-200 bg-slate-100/70 p-1.5 sm:p-2 rounded-t-3xl" role="tablist">
                <button type="button" 
                        id="tab-btn-partner"
                        class="flex-1 py-3 sm:py-4 px-4 text-center rounded-2xl font-bold text-xs sm:text-sm transition-all bg-white text-emerald-800 shadow-sm border border-slate-200/50 flex items-center justify-center gap-2"
                        role="tab"
                        aria-selected="true"
                        aria-controls="panel-partner">
                    <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    Partner With Us
                </button>

                <button type="button" 
                        id="tab-btn-contact"
                        class="flex-1 py-3 sm:py-4 px-4 text-center rounded-2xl font-medium text-xs sm:text-sm transition-all text-slate-600 hover:text-slate-900 flex items-center justify-center gap-2"
                        role="tab"
                        aria-selected="false"
                        aria-controls="panel-contact">
                    <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    Contact Zee Tech Foundation
                </button>
            </div>

            <!-- TAB PANEL 1: PARTNER WITH US FORM -->
            <div id="panel-partner" class="p-6 sm:p-10 lg:p-12 block" role="tabpanel" aria-labelledby="tab-btn-partner">
                <div class="mb-8">
                    <span class="text-xs uppercase font-bold tracking-wider text-emerald-700">Institutional &amp; Donor Engagement</span>
                    <h3 class="text-2xl font-bold text-slate-900 mt-1 font-heading">Partner With Zee Tech Foundation</h3>
                    <p class="text-slate-600 text-xs sm:text-sm mt-1">
                        Explore strategic collaboration in connectivity, solar equipment, computing labs, digital skills training, or long-term sustainability.
                    </p>
                </div>

                <form id="partner-form" action="{{ route('partner.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Organization Name -->
                        <div>
                            <label for="organization_name" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                                Organization Name <span class="text-rose-500">*</span>
                            </label>
                            <input type="text" 
                                   name="organization_name" 
                                   id="organization_name" 
                                   value="{{ old('organization_name') }}"
                                   placeholder="e.g. Acme Foundation / Global Telco Ltd."
                                   required
                                   class="w-full px-4 py-3 rounded-xl border @error('organization_name') border-rose-400 bg-rose-50/30 @else border-slate-300 @enderror focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all text-sm text-slate-800 placeholder-slate-400">
                            @error('organization_name')
                                <p class="text-xs text-rose-600 mt-1.5">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Contact Person -->
                        <div>
                            <label for="contact_person" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                                Contact Person Name <span class="text-rose-500">*</span>
                            </label>
                            <input type="text" 
                                   name="contact_person" 
                                   id="contact_person" 
                                   value="{{ old('contact_person') }}"
                                   placeholder="e.g. Dr. Amina Bello"
                                   required
                                   class="w-full px-4 py-3 rounded-xl border @error('contact_person') border-rose-400 bg-rose-50/30 @else border-slate-300 @enderror focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all text-sm text-slate-800 placeholder-slate-400">
                            @error('contact_person')
                                <p class="text-xs text-rose-600 mt-1.5">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Official Email -->
                        <div>
                            <label for="partner_email" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                                Official Email Address <span class="text-rose-500">*</span>
                            </label>
                            <input type="email" 
                                   name="email" 
                                   id="partner_email" 
                                   value="{{ old('email') }}"
                                   placeholder="amina@organization.org"
                                   required
                                   class="w-full px-4 py-3 rounded-xl border @error('email') border-rose-400 bg-rose-50/30 @else border-slate-300 @enderror focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all text-sm text-slate-800 placeholder-slate-400">
                            @error('email')
                                <p class="text-xs text-rose-600 mt-1.5">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Phone Number -->
                        <div>
                            <label for="partner_phone" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                                Phone Number
                            </label>
                            <input type="tel" 
                                   name="phone" 
                                   id="partner_phone" 
                                   value="{{ old('phone') }}"
                                   placeholder="+234 800 000 0000"
                                   class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all text-sm text-slate-800 placeholder-slate-400">
                        </div>
                    </div>

                    <!-- Organization Type -->
                    <div>
                        <label for="organization_type" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                            Organization Type <span class="text-rose-500">*</span>
                        </label>
                        <select name="organization_type" 
                                id="organization_type" 
                                required
                                class="w-full px-4 py-3 rounded-xl border @error('organization_type') border-rose-400 bg-rose-50/30 @else border-slate-300 @enderror focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all text-sm text-slate-800 bg-white">
                            <option value="">Select an organization category...</option>
                            <option value="Development Organisation" {{ old('organization_type') == 'Development Organisation' ? 'selected' : '' }}>Development Organisation</option>
                            <option value="Philanthropic Foundation" {{ old('organization_type') == 'Philanthropic Foundation' ? 'selected' : '' }}>Philanthropic Foundation</option>
                            <option value="Government Institution" {{ old('organization_type') == 'Government Institution' ? 'selected' : '' }}>Government Institution</option>
                            <option value="Technology Company" {{ old('organization_type') == 'Technology Company' ? 'selected' : '' }}>Technology Company</option>
                            <option value="Internet Service Provider" {{ old('organization_type') == 'Internet Service Provider' ? 'selected' : '' }}>Internet Service Provider (ISP)</option>
                            <option value="Individual Donor" {{ old('organization_type') == 'Individual Donor' ? 'selected' : '' }}>Individual Donor / Philanthropist</option>
                        </select>
                        @error('organization_type')
                            <p class="text-xs text-rose-600 mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Partnership Areas of Interest -->
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-3">
                            Partnership Focus Areas (Select all that apply)
                        </label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3">
                            @php
                                $areas = [
                                    'Construction & Infrastructure',
                                    'Solar Power & Clean Energy',
                                    'Internet Connectivity & ISP',
                                    'Computers & Lab Hardware',
                                    'STEM & Digital Literacy Training',
                                    'Inclusion & Disability Access',
                                    'Maintenance & Sustainability Endowment',
                                ];
                                $selectedAreas = old('partnership_areas', []);
                            @endphp
                            @foreach ($areas as $area)
                                <label class="flex items-center gap-3 p-3 rounded-xl border border-slate-200 hover:border-emerald-300 hover:bg-emerald-50/30 transition-all cursor-pointer">
                                    <input type="checkbox" 
                                           name="partnership_areas[]" 
                                           value="{{ $area }}"
                                           {{ in_array($area, $selectedAreas) ? 'checked' : '' }}
                                           class="w-4 h-4 text-emerald-600 rounded border-slate-300 focus:ring-emerald-500">
                                    <span class="text-xs text-slate-700 font-medium">{{ $area }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- Message / Proposal Notes -->
                    <div>
                        <label for="partner_message" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                            Proposal Overview or Message
                        </label>
                        <textarea name="message" 
                                  id="partner_message" 
                                  rows="4" 
                                  placeholder="Share how you would like to collaborate or support the Community-Built Digital Village Hub initiative..."
                                  class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all text-sm text-slate-800 placeholder-slate-400">{{ old('message') }}</textarea>
                    </div>

                    <div class="pt-2 flex items-center justify-between flex-wrap gap-4">
                        <span class="text-xs text-slate-500">
                            All proposals are treated with strict confidentiality.
                        </span>
                        <button type="submit" 
                                class="inline-flex items-center justify-center px-8 py-3.5 rounded-xl font-bold text-white bg-emerald-700 hover:bg-emerald-800 active:bg-emerald-900 shadow-md transition-all">
                            Submit Partnership Inquiry
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </button>
                    </div>
                </form>
            </div>

            <!-- TAB PANEL 2: GENERAL CONTACT FORM -->
            <div id="panel-contact" class="p-6 sm:p-10 lg:p-12 hidden" role="tabpanel" aria-labelledby="tab-btn-contact">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                    
                    <!-- Left: Contact Details Column -->
                    <div class="lg:col-span-5 space-y-6">
                        <div>
                            <span class="text-xs uppercase font-bold tracking-wider text-emerald-700">Official Channels</span>
                            <h3 class="text-2xl font-bold text-slate-900 mt-1 font-heading">Zee Tech Foundation</h3>
                            <p class="text-slate-600 text-xs sm:text-sm mt-1 leading-relaxed">
                                Under the "No One Left Offline" vision, we welcome community questions, volunteering inquiries, and media discussions.
                            </p>
                        </div>

                        <div class="space-y-4 text-xs sm:text-sm text-slate-600">
                            <div class="flex items-start gap-3.5 p-3 rounded-xl bg-slate-50 border border-slate-200/80">
                                <div class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                </div>
                                <div>
                                    <span class="font-bold text-slate-800 block">General Inquiries</span>
                                    <span>contact@zeetechfoundation.org</span>
                                </div>
                            </div>

                            <div class="flex items-start gap-3.5 p-3 rounded-xl bg-slate-50 border border-slate-200/80">
                                <div class="w-8 h-8 rounded-lg bg-sky-100 text-sky-700 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                                </div>
                                <div>
                                    <span class="font-bold text-slate-800 block">Geographic Reach</span>
                                    <span>Nigeria National Digital Inclusion Initiative</span>
                                </div>
                            </div>

                            <div class="flex items-start gap-3.5 p-3 rounded-xl bg-slate-50 border border-slate-200/80">
                                <div class="w-8 h-8 rounded-lg bg-amber-100 text-amber-700 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                </div>
                                <div>
                                    <span class="font-bold text-slate-800 block">Response Expectation</span>
                                    <span>We review community notes within 2 business days</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Contact Message Form -->
                    <div class="lg:col-span-7">
                        <form id="contact-form" action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                            @csrf

                            <div>
                                <label for="contact_name" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                                    Your Full Name <span class="text-rose-500">*</span>
                                </label>
                                <input type="text" 
                                       name="name" 
                                       id="contact_name" 
                                       value="{{ old('name') }}"
                                       placeholder="e.g. Chukwudi Okafor"
                                       required
                                       class="w-full px-4 py-3 rounded-xl border @error('name') border-rose-400 bg-rose-50/30 @else border-slate-300 @enderror focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all text-sm text-slate-800 placeholder-slate-400">
                                @error('name')
                                    <p class="text-xs text-rose-600 mt-1.5">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="contact_msg_email" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                                        Email Address <span class="text-rose-500">*</span>
                                    </label>
                                    <input type="email" 
                                           name="email" 
                                           id="contact_msg_email" 
                                           value="{{ old('email') }}"
                                           placeholder="chukwudi@domain.com"
                                           required
                                           class="w-full px-4 py-3 rounded-xl border @error('email') border-rose-400 bg-rose-50/30 @else border-slate-300 @enderror focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all text-sm text-slate-800 placeholder-slate-400">
                                    @error('email')
                                        <p class="text-xs text-rose-600 mt-1.5">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="contact_org" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                                        Community / Org (Optional)
                                    </label>
                                    <input type="text" 
                                           name="organization" 
                                           id="contact_org" 
                                           value="{{ old('organization') }}"
                                           placeholder="e.g. Village Youth Association"
                                           class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all text-sm text-slate-800 placeholder-slate-400">
                                </div>
                            </div>

                            <div>
                                <label for="contact_subject" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                                    Subject <span class="text-rose-500">*</span>
                                </label>
                                <input type="text" 
                                       name="subject" 
                                       id="contact_subject" 
                                       value="{{ old('subject') }}"
                                       placeholder="e.g. Inquiry regarding community hub site selection"
                                       required
                                       class="w-full px-4 py-3 rounded-xl border @error('subject') border-rose-400 bg-rose-50/30 @else border-slate-300 @enderror focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all text-sm text-slate-800 placeholder-slate-400">
                                @error('subject')
                                    <p class="text-xs text-rose-600 mt-1.5">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="contact_message" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                                    Your Message <span class="text-rose-500">*</span>
                                </label>
                                <textarea name="message" 
                                          id="contact_message" 
                                          rows="4" 
                                          placeholder="Type your message, query, or feedback here..."
                                          required
                                          class="w-full px-4 py-3 rounded-xl border @error('message') border-rose-400 bg-rose-50/30 @else border-slate-300 @enderror focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all text-sm text-slate-800 placeholder-slate-400">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="text-xs text-rose-600 mt-1.5">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" 
                                    class="w-full inline-flex items-center justify-center px-8 py-3.5 rounded-xl font-bold text-white bg-slate-900 hover:bg-slate-800 active:bg-slate-950 shadow-md transition-all">
                                Send Message to Zee Tech Foundation
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                            </button>
                        </form>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

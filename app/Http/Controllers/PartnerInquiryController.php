<?php

namespace App\Http\Controllers;

use App\Models\PartnerInquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PartnerInquiryController extends Controller
{
    /**
     * Store a newly created partnership inquiry.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'organization_name' => ['required', 'string', 'max:255'],
            'contact_person' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'organization_type' => ['required', 'string', 'max:255'],
            'partnership_areas' => ['nullable', 'array'],
            'partnership_areas.*' => ['string', 'max:255'],
            'message' => ['nullable', 'string', 'max:3000'],
        ]);

        PartnerInquiry::create($validated);

        return redirect()
            ->to(url()->previous().'#partner-form')
            ->with('partner_success', 'Thank you for your interest! The Zee Tech Foundation team has received your partnership inquiry and will be in touch shortly.');
    }
}

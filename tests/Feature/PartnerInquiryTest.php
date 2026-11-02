<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PartnerInquiryTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_submit_partner_inquiry(): void
    {
        $payload = [
            'organization_name' => 'African STEM Alliance',
            'contact_person' => 'Ngozi Adeyemi',
            'email' => 'ngozi@stemalliance.org',
            'phone' => '+234 801 234 5678',
            'organization_type' => 'Development Organisation',
            'partnership_areas' => ['Solar Power & Clean Energy', 'Internet Connectivity & ISP'],
            'message' => 'We would love to co-fund 5 village hubs across rural communities.',
        ];

        $response = $this->post(route('partner.store'), $payload);

        $response->assertSessionHas('partner_success');
        $this->assertDatabaseHas('partner_inquiries', [
            'organization_name' => 'African STEM Alliance',
            'email' => 'ngozi@stemalliance.org',
            'organization_type' => 'Development Organisation',
        ]);
    }

    public function test_partner_inquiry_validates_required_fields(): void
    {
        $response = $this->post(route('partner.store'), []);

        $response->assertSessionHasErrors([
            'organization_name',
            'contact_person',
            'email',
            'organization_type',
        ]);
    }
}

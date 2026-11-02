<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactMessageTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_submit_contact_message(): void
    {
        $payload = [
            'name' => 'Emeka Nwosu',
            'email' => 'emeka@example.com',
            'organization' => 'Enugu Youth Forum',
            'subject' => 'Volunteering with the Ekwesi Pilot Hub',
            'message' => 'Hello team, I am interested in volunteering as a digital tutor at the pilot hub.',
        ];

        $response = $this->post(route('contact.store'), $payload);

        $response->assertSessionHas('contact_success');
        $this->assertDatabaseHas('contact_messages', [
            'name' => 'Emeka Nwosu',
            'email' => 'emeka@example.com',
            'subject' => 'Volunteering with the Ekwesi Pilot Hub',
        ]);
    }

    public function test_contact_message_validates_required_fields(): void
    {
        $response = $this->post(route('contact.store'), []);

        $response->assertSessionHasErrors([
            'name',
            'email',
            'subject',
            'message',
        ]);
    }
}

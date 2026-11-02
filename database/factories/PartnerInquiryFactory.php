<?php

namespace Database\Factories;

use App\Models\PartnerInquiry;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PartnerInquiry>
 */
class PartnerInquiryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'organization_name' => fake()->company(),
            'contact_person' => fake()->name(),
            'email' => fake()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'organization_type' => fake()->randomElement([
                'Development Organisation',
                'Philanthropic Foundation',
                'Technology Company',
                'Internet Service Provider',
                'Government Institution',
                'Individual Donor',
            ]),
            'partnership_areas' => ['Solar Power', 'Internet Connectivity', 'STEM & Digital Skills'],
            'message' => fake()->paragraph(),
        ];
    }
}

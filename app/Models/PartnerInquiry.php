<?php

namespace App\Models;

use Database\Factories\PartnerInquiryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerInquiry extends Model
{
    /** @use HasFactory<PartnerInquiryFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'organization_name',
        'contact_person',
        'email',
        'phone',
        'organization_type',
        'partnership_areas',
        'message',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'partnership_areas' => 'array',
        ];
    }
}

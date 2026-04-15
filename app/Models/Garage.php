<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Garage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'owner_name',
        'phone',
        'whatsapp',
        'location',
        'emirate',
        'license_number',
        'logo_url',
        'verified',
    ];

    protected $casts = [
        'verified' => 'boolean',
    ];

    public function cars(): HasMany
    {
        return $this->hasMany(GarageCar::class);
    }

    public function activeCars(): HasMany
    {
        return $this->hasMany(GarageCar::class)->where('status', 'active');
    }
}

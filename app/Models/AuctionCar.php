<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionCar extends Model
{
    use HasFactory;

    protected $fillable = [
        'lot',
        'vin',
        'seller',
        'sale_document',
        'approved',
        'loss',
        'primary_damage',
        'secondary_damage',
        'odometer',
        'start_code',
        'key',
        'acv_erc',
        'body_style',
        'exterior_color',
        'engine',
        'transmission',
        'fuel_type',
        'drive_type',
        'model',
        'series',
        'cylinders',
        'restraint_system',
        'drive_line_type',
        'photos',
        'status',
        'history_clean',
        'featured_until',
    ];

    protected $casts = [
        'photos' => 'array',
        'history_clean' => 'boolean',
        'featured_until' => 'datetime',
    ];

    // Helper to display NA if value is null/empty
    public function getDisplayValue(?string $value): string
    {
        return empty($value) ? 'NA' : $value;
    }

    // Accessor methods for safe display
    public function getLotAttribute($value): string
    {
        return $this->getDisplayValue($value);
    }

    public function getVinAttribute($value): string
    {
        return $this->getDisplayValue($value);
    }

    public function getSellerAttribute($value): string
    {
        return $this->getDisplayValue($value);
    }

    public function getPrimaryDamageAttribute($value): string
    {
        return $this->getDisplayValue($value);
    }

    public function getSecondaryDamageAttribute($value): string
    {
        return $this->getDisplayValue($value);
    }

    public function getOdometerAttribute($value): string
    {
        return $this->getDisplayValue($value);
    }

    public function getModelAttribute($value): string
    {
        return $this->getDisplayValue($value);
    }
}

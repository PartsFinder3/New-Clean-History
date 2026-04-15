<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GarageCar extends Model
{
    use HasFactory;

    protected $fillable = [
        'garage_id',
        'slug',
        'make',
        'model',
        'year',
        'variant',
        'vin',
        'mileage_km',
        'price_aed',
        'price_negotiable',
        'condition',
        'color',
        'fuel_type',
        'transmission',
        'body_type',
        'description',
        'features',
        'photos',
        'emirate',
        'location_area',
        'history_clean',
        'history_report_url',
        'status',
        'views',
        'featured_until',
    ];

    protected $casts = [
        'features' => 'array',
        'photos' => 'array',
        'price_negotiable' => 'boolean',
        'history_clean' => 'boolean',
        'views' => 'integer',
        'featured_until' => 'datetime',
    ];

    public function garage(): BelongsTo
    {
        return $this->belongsTo(Garage::class);
    }

    public function getFullTitleAttribute(): string
    {
        return "{$this->year} {$this->make} {$this->model}" . ($this->variant ? " {$this->variant}" : '');
    }

    public function getFormattedPriceAttribute(): string
    {
        return 'AED ' . number_format($this->price_aed);
    }

    public function incrementViews(): void
    {
        $this->increment('views');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Space extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'image',
        'description',
        'benefit',
        'price_half_day',
        'price_daily',
        'price_weekly',
        'price_monthly',
        'price_annually',
        'min_no_of_days',
        'max_no_of_days',
        'isAvailable',
        'isActive',
        'no_of_persons',
    ];

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}

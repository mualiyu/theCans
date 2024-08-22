<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'space_id',
        'booking_type',
        'b_id',
        'start_date',
        'customer_first_name',
        'customer_last_name',
        'customer_email',
        'customer_phone',
        'start_time',
        'end_time',
        'total_price',
        'is_confirmed',
    ];

    protected $casts = [
        'start_date' => 'date',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'is_confirmed' => 'boolean',
    ];

    // Relationships
    public function space(): BelongsTo
    {
        return $this->belongsTo(Space::class);
    }

    // Define relationship with payments
    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    // Calculate total price based on the booking type
    public function calculateTotalPrice(Space $space, string $bookingType)
    {
        switch ($bookingType) {
            case 'half_day':
                return $space->price_half_day;
            case 'daily':
                return $space->price_daily;
            case 'weekly':
                return $space->price_weekly;
            case 'monthly':
                return $space->price_monthly;
            case 'annually':
                return $space->price_annually;
            default:
                throw new \Exception("Invalid booking type: {$bookingType}");
        }
    }
}

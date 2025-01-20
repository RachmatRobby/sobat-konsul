<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'konselor_id',
        'date_service_id',
        'time_service_id',
        'status',
    ];

    /**
     * Get the konselor that owns the service.
     */
    public function konselor()
    {
        return $this->belongsTo(Konselor::class);
    }

    /**
     * Get the date service associated with the service.
     */
    public function dateService()
    {
        return $this->belongsTo(DateService::class);
    }

    /**
     * Get the time service associated with the service.
     */
    public function timeService()
    {
        return $this->belongsTo(TimeService::class);
    }

    /**
     * Get the booking associated with the service.
     */
    public function booking()
    {
        return $this->hasOne(Booking::class);
    }

    public function isBooked()
    {
        return $this->status === 'booked';
    }

    /**
     * Scope a query to only include services that are ready.
     */
    public function scopeReady($query)
    {
        return $query->where('status', 'ready');
    }

    /**
     * Scope a query to only include services that are booked.
     */
    public function scopeBooked($query)
    {
        return $query->where('status', 'booked');
    }

    /**
     * Scope a query to only include services that are booked.
     */
    public function scopeByKonselor($query, $konselorId)
    {
        return $query->where('konselor_id', $konselorId);
    }

    /**
     * Scope a query to only include services that are booked.
     */
    public function scopeByDateService($query, $dateServiceId)
    {
        return $query->where('date_service_id', $dateServiceId);
    }

    /**
     * Scope a query to only include services that are booked.
     */
    public function scopeByTimeService($query, $timeServiceId)
    {
        return $query->where('time_service_id', $timeServiceId);
    }

    /**
     * Scope a query to only include services that are booked.
     */
    public function getPriceAttribute($value)
    {
        return 'Rp ' . number_format($value, 0, ',', '.');
    }

    public function getPriceRawAttribute()
    {
        return $this->attributes['price'];
    }

    public function markAsBooked()
    {
        $this->update(['status' => 'booked']);
    }
}

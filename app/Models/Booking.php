<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'service_id',
        'full_name',
        'email',
        'phone',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}

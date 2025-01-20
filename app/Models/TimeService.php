<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeService extends Model
{
    use HasFactory;

    protected $fillable = ['start_time', 'end_time'];

    /**
     * Get the services for the time.
     */
    public function services()
    {
        return $this->hasMany(Service::class);
    }
}

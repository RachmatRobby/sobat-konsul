<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DateService extends Model
{
    use HasFactory;

    protected $fillable = ['date_service'];

    /**
     * Get the services for the date.
     */
    public function services()
    {
        return $this->hasMany(Service::class);
    }
}

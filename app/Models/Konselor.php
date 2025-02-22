<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Konselor extends Model
{
    use HasFactory;

    // Nama tabel, jika tidak sesuai dengan konvensi Laravel
    protected $table = 'konselors';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'name',
        'profile_image',
        'specializations',
        'bio',
        'about_me',
        'handled_cases',
        'clinical_approaches'
    ];

    // Casts untuk kolom yang berisi JSON
    protected $casts = [
        'specializations' => 'array',
    ];

    // Relasi dengan model Service
    public function services()
    {
        return $this->hasMany(Service::class);
    }

    // Relasi dengan model DateService
    public function dateServices()
    {
        return $this->hasMany(DateService::class);
    }

    // Relasi dengan model TimeService
    public function timeServices()
    {
        return $this->hasMany(TimeService::class);
    }
}

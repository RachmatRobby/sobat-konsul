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
    ];

    // Casts untuk kolom yang berisi JSON
    protected $casts = [
        'specializations' => 'array',
    ];
}

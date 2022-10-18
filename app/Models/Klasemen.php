<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klasemen extends Model {
    protected $table = 'klasemens';
    protected $fillable = [
        'nama_univ', 'emas', 'perak', 'perunggu', 'ranking',
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'nama', 'nim', 'id_leader', 'fakultas', 'angkatan', 'link_gdrive', 'nickname', 'email', 'hp', 'id_game', 'gender'
    ];
}

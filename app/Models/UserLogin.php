<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    use HasFactory;

    protected $table = 'users_login';

    protected $fillable = [
        'nome',
        'email',
        'senha'
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class user extends Authenticatable
{
    protected $fillable = [
        'login', 'password', 'role_id'
    ];
    public $timestamps = FALSE;
    protected $hidden = [
        'password',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;
    protected $fillable = [
        'text', 'user_id', 'book_id', 'mark'
    ];
    public $timestamps = FALSE;
}

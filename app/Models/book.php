<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'cover', 'genre_id', 'author_id', 'file', 'description', 'cover'
    ];
    public $timestamps = FALSE;

    public function genre()
    {
        return $this->belongsTo(genre::class);
    }

    public function author()
    {
        return $this->belongsTo(author::class);
    }
}

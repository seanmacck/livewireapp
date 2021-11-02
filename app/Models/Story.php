<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'body', 'type', 'status'
    ];

    //protected $gaurded = [];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}

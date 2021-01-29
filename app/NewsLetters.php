<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsLetters extends Model
{
    protected $fillable = [
        'title', 'text', 'date', 'name'
    ];
}

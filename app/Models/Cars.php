<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cars
{
    protected $table = 'cars';

    protected $fillable = [
        'name',
        'description',
        'model',
        'date'
    ];

    protected $casts = [
        'date' => 'Timestamp'
    ];

    public $timestamps = false;

    //create-at
    //update_at
    //delete_at
}
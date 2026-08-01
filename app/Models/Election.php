<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
      protected $fillable = [
        'title',
        'start_time',
        'end_time',
        'status',
    ];
}

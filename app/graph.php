<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class graph extends Model
{
    protected $table = 'graphs';
    protected $fillable = [
    'pid','date','price',
    ];
      protected $hidden = [
        'remember_token'
    ];
}

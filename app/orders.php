<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
     protected $table = 'orders';
    protected $fillable = ['email','productid','productname','name','address','imageid','price','quantity'];
    protected $hidden=['remember_token',];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addtocart extends Model
{
    //
    protected $table = 'addtocarts';
    protected $fillable = ['email','productid','name','imageid','price','quantity','checkout'];
    protected $hidden=['remember_token',];
}

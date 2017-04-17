<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class uploaddata extends Model
{
    protected $table='uploaddatas';

    protected $fillable = ['name','category','description','price','quantity','image','imageid','subcategory','subdescription','feature',];
    protected $hidden=['remember_token',];
}

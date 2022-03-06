<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// custom customer model 
class Customer extends Model
{
    use HasFactory;
    use SoftDeletes; // custom added
    protected $table = "customers";
    protected $primaryKey = "customer_id";

    // custom mutator for changing the data before saving into database 
    public function setNameAttribute($value){
            $this->attributes['name'] = ucwords($value);
    }

    // custom accessor for changing the data after getting from database 
    public function getDobAttribute($value)
    {
        return date("d-M-Y",strtotime($value));
    }
}

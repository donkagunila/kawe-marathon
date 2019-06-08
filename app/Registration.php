<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
    	'fname', 'lname',  'email', 'phone', 'distance'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = [
        'name', 'age', 'type', 'dob', 'gender', 'blood_group',
    ];
}

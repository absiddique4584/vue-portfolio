<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable=[
        'image',
        'title',
        'birth',
        'age',
        'site',
        'email',
        'phone',
        'address',
        'degree',
        'country',
        'city',
        'h_desc',
        'm_desc',
        'l_desc',
    ];

}

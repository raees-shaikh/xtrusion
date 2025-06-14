<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    function offers()
    {
        return $this->hasMany('App\Models\Offer');
    }
}

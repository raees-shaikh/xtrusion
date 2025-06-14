<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model
{
    public function medias()
    {
        return $this->morphMany(Media::class, 'model');
    }
}

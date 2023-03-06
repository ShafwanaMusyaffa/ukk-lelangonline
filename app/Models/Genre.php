<?php

namespace App\Models;

use App\Models\Asset;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function assets()
    {
        return $this->belongsToMany(Asset::class);
    }
}

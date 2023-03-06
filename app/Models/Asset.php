<?php

namespace App\Models;

use App\Models\Genre;
use App\Models\Lelang;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lelang()
    {
        return $this->hasOne(Lelang::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}

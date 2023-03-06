<?php

namespace App\Models;

use App\Models\Asset;
use App\Models\Lelang_log;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Lelang extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lelang';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'waktu_berakhir',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }

    public function logs()
    {
        return $this->hasMany(Lelang_log::class);
    }
}

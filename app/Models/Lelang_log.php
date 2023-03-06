<?php

namespace App\Models;

use App\Models\Lelang;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Lelang_log extends Model
{
    protected $fillable = [
        'user_id',
        'harga',
    ];

    public $timestamps = false;

    protected $dates = ['created_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lelang()
    {
        return $this->belongsTo(Lelang::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_at = $model->freshTimestamp();
        });
    }
}

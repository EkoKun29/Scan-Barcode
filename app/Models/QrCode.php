<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class QrCode extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid'
    ];

    public static function boot() {
        parent::boot();
        static::creating(function (QrCode $item) {
            $item->uuid = Str::uuid()->toString();
        });
    }
}

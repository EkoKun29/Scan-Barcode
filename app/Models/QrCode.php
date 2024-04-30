<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

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

    public function getTanggalAttribute()
    {
        return Carbon::parse($this->created_at)->format('d-m-Y');
    }
}

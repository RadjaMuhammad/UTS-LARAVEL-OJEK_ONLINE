<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPerjalanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'penumpang_id',
        'driver_id',
        'lokasi_jemput',
        'tujuan',
        'harga',
        'status'
    ];

    public function penumpang()
    {
        return $this->belongsTo(Penumpang::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
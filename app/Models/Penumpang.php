<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penumpang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'telepon'
    ];

    public function riwayatPerjalanan()
    {
        return $this->hasMany(RiwayatPerjalanan::class);
    }
}
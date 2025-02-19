<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
      use HasFactory;
    protected $table = 'mobil';

    protected $fillable = [
        'merek',
        'model',
        'nomor_plat',
        'warna',
        'transmisi',
    ];
}

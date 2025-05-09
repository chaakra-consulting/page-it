<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'no_telepon',
        'perusahaan',
        'perusahaan_jumlah',
        'subjek',
        'pertanyaan',
    ];
}

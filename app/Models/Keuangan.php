<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    use HasFactory;
    protected $table = 'keuangan';
    protected $fillable = [
        'nama',
        'alamat',
        'kontak',
        'nilai_sudah_bayar',
        'nilai_belum_bayar',
        'tanggal_bayar',
        'status',
    ];

    protected $guarded = ['id'];
}

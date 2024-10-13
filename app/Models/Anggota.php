<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    // Nama tabel jika berbeda dari nama model (opsional, hanya jika Laravel tidak otomatis mengenali tabel)
    protected $table = 'anggota';

    // Kolom-kolom yang bisa diisi
    protected $fillable = [
        'nomor_anggota',
        'angkatan_tbm',
        'angkatan',
        'nama',
        'jabatan',
        'nomor_hp',
        'line',
        'instagram',
        'facebook',
        'alamat',
    ];

    // Kolom tanggal akan otomatis ditangani Laravel (created_at, updated_at)
    public $timestamps = true;
}

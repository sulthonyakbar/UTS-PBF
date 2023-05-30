<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_barang',
        'jenis_barang',
        'deskripsi_barang',
        'harga',
        'tgl_diperoleh',
        'sumber',
        'status',
        'jumlah'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $primarykey = 'transaksi_id';
    //protected $keytype = 'string';
    protected $fillable = [
        'id',
        'id_pelanggan',
        'id_barang'
    ];

    public function idbarang(){
        return $this->belongsTo(barang::class, 'id_barang', 'id');
    }
    public function idpelanggan(){
        return $this->belongsTo(pelanggan::class. 'id_pelanggan', 'id');
    }
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $table = 'pengeluarans';
    protected $fillable = ['tanggal','permintaan','jumlah','harga_satuan','total','status'];

    protected $primaryKey = 'id_pengeluaran';
}

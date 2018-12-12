<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $table = 'pengeluarans';
    protected $fillable = ['jenis_pengeluaran,biaya'];

    protected $primaryKey = 'id_pengeluaran';
}

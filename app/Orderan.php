<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderan extends Model
{
    protected $table = 'orderans';
    protected $fillable = [
        'harga', 'jumlah', 'total', 'nama'
      ];
  
      public function invoice()
      {
        return $this->hasMany(Invoice::class);
      }
}

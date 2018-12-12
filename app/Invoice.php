<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoices';
    protected $fillable = [
        'nama_customer', 'alamat_customer', 'judul', 'invoice_no', 'tanggal_masuk', 'tanggal_keluar', 'diskon','status', 'subtotal', 'total_biaya'
      ];
      public function orderans()
      {
        return $this->hasMany(Orderan::class);
      }// 
}

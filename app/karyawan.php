<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawans'; 
    protected $fillable=['username','password','nama','alamat','no_hp','gaji','issupervisor'];

    protected $primaryKey = 'id_karyawan';  //

}

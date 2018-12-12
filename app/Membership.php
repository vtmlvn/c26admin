<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $table = 'memberships'; 
    protected $fillable=['nama','alamat','no_hp','jumlah_deposit'];

    protected $primaryKey = 'id_membership';
}

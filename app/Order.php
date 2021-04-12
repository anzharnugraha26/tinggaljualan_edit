<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'nama_lengkap', 'email', 'no_telp','breafing','paket'
    ];
}

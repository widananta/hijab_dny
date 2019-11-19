<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    public function transaksi()
    {
        return $this->belongsTo('App\transaksi');
    }
    public function produk()
    {
        return $this->belongsTo('App\produk');
    }
}

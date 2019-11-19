<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    public function stok()
    {
        return $this->hasMany('App\stok');
    }
    public function pembelian()
    {
        return $this->hasMany('App\pembelian');
    }
}

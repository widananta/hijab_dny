<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stok extends Model
{
    public function distributor()
    {
        return $this->belongsTo('App\distributor');
    }
    public function produk()
    {
        return $this->belongsTo('App\produk');
    }
}

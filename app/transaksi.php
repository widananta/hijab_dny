<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function pembelian()
    {
        return $this->hasMany('App\pembelian');
    }
}

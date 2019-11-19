<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class distributor extends Model
{
    public function kota()
    {
        return $this->belongsTo('App\kota');
    }
    public function user()
    {
        return $this->hasMany('App\User');
    }
}

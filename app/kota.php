<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Phaza\LaravelPostgis\Eloquent\PostgisTrait;
use Phaza\LaravelPostgis\Geometries\Point;

class kota extends Model
{
    public $incrementing = false;

    protected $fillable = [
        'id','nama_kota','koordinat'
    ];
    public function distributor()
    {
        return $this->hasMany('App\distributor');
    }
}

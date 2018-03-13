<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    protected $fillable=['id_pelanggan','tanggal_beli'];
    protected $primarykey='id';

    public function pelanggan()
    {
     return $this->belongsTo('App\pelanggan','id_pelanggan');
    }

    public function detail()
    {
        return $this->hasMany('App\detail','id_penjualan');
    }
}

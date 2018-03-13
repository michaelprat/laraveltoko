<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    protected $fillable=['nama_pelanggan'];
    protected $primarykey='id';


    public function penjualan()
    {
     return $this->hasMany('App\penjualan','id_pelanggan');
    }
}

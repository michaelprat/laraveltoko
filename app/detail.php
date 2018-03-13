<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{

    protected $fillable=['id_penjualan','id_produk','jumlah','total'];
    protected $primarykey='id';

    public function penjualan()
    {
        return $this->belongsTo('App\penjualan','id_penjualan');
    }
    public function produk()
    {
        return $this->belongsTo('App\produk','id_produk');
    }
    


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    
    protected $fillable=['nama_produk','harga','id_katagori'];
    protected $primarykey='id';

    public function detail()
    {
        return $this->hasMany('App\detail','id_produk');
    }
    public function kategori()
    {
        return $this->belongsTo('App\kategori','id_katagori');
    }

}

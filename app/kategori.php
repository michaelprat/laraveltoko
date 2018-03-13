<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $fillable=['nama_kategori'];
    protected $primarykey='id';

    public function produk()
    {
        return $this->hasMany('App\produk','id_katagori');
    }
}

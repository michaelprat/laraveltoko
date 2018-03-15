<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\penjualan;
use App\pelanggan;
use App\detail;
use App\produk;
use App\kategori;
class datasemua extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $tampung4=detail::join('penjualans', 'details.id_penjualan', '=', 'penjualans.id')
        ->join('pelanggans', 'penjualans.id', '=', 'pelanggans.id')
        ->join('produks', 'details.id_produk', '=', 'produks.id')
        ->join('kategoris', 'produks.id_katagori', '=', 'kategoris.id')
        ->get();
        return view('halamantampilsemua')->with('detail',$tampung4);
        //with('pelanggan',$tampung)->with('kategori',$tampung1)->with('produk',$tampung2)->with('penjualan',$tampung3)->with('detail',$tampung4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

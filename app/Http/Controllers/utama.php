<?php

namespace App\Http\Controllers;
use App\detail;
use App\penjualan;
use App\kategori;
use App\pelanggan;
use App\produk;

use Illuminate\Http\Request;

class utama extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
      $tampung=pelanggan::paginate(1,['*'],'pelanggan');
      $tampung1=kategori::paginate(1,['*'],'kategori');
      $tampung2=produk::with('kategori')->paginate(3,['*'],'produk');

      $tampung3=penjualan::with('pelanggan')->paginate(3,['*'],'penjualan');
     $tampung4=detail::all();
       return view('halamanutamatoko')->with('pelanggan',$tampung)->with('kategori',$tampung1)->with('produk',$tampung2)->with('penjualan',$tampung3)->with('detail',$tampung4);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detail;
use App\produk;
use App\penjualan;
class datadetail extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penjualan =penjualan::pluck('tanggal_beli', 'id');
        $produk = produk::pluck('nama_produk', 'id');
        return view('tambahdatadetail')->with('penjualan',$penjualan)->with('produk',$produk);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
                  'id_penjualan'=>'required|max:255|min:1',
                  'jumlah'=>'required|numeric',
                  'id_produk'=>'required',
                   

        ]);
 
        $id_produk=$request->id_produk;
        $hargabarang=produk::find($id_produk)->harga;
       $jumlah= $request->jumlah;
       $hasil=$jumlah*$hargabarang;
      $detail=new detail;
      $detail->id_penjualan=$request->id_penjualan;
       $detail->id_produk=$request->id_produk;
       $detail->jumlah=$request->jumlah;
       $detail->total=$hasil;
      $detail->save();
      
    return redirect()->route("home.index");
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
        $find=detail::find($id);
        $penjualan =penjualan::pluck('tanggal_beli', 'id');
        $produk = produk::pluck('nama_produk', 'id');
        return view('halamaneditdetail')->with('penjualan',$penjualan)->with('produk',$produk)->with('data',$find);
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
        $this->validate($request,
        [
                  'id_penjualan'=>'required|max:255|min:1',
                  'jumlah'=>'required|numeric',
                  'id_produk'=>'required',
                   

        ]);
 
        $id_produk=$request->id_produk;
        $hargabarang=produk::find($id_produk)->harga;
       $jumlah= $request->jumlah;
       $hasil=$jumlah*$hargabarang;
      $detail=detail::find($id);
      $detail->id_penjualan=$request->id_penjualan;
       $detail->id_produk=$request->id_produk;
       $detail->jumlah=$request->jumlah;
       $detail->total=$hasil;
      $detail->save();
      
    return redirect()->route("home.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        detail::destroy($id);
        return redirect()->route("home.index");
    }
}

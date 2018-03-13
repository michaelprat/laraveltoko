<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\penjualan;
use App\pelanggan;
use App\detail;
use App\produk;

class datapenjualan extends Controller
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
        $pelanggan=pelanggan::pluck('nama_pelanggan','id');
        $produk=produk::pluck('nama_produk','id');
        return view('tambahdatapenjualan')->with('pelanggan',$pelanggan)->with('produk',$produk);
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
                  'id_pelanggan'=>'required|max:255|min:1',
                  'tanggal_beli'=>'required|date',
                  'jumlah'=>'required|numeric',
                  'id_produk'=>'required',
                   
                
        ]);
      
             $penjualan=new penjualan;
             $penjualan->id_pelanggan=$request->id_pelanggan;
             $penjualan->tanggal_beli=$request->tanggal_beli;
             $penjualan->save();
             $detail=new detail;
             $id_produk=$request->id_produk;
            $detail->id_penjualan=$penjualan->id; 
            $hargabarang=produk::find($id_produk)->harga;
            $jumlah= $request->jumlah;
            $hasil=$jumlah*$hargabarang;
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
        $find=penjualan::find($id);
       $datadetail=detail::select('id')->where('id_penjualan', $id)->value('id');
       $detail=detail::find($datadetail);
        $pelanggan = pelanggan::pluck('nama_pelanggan', 'id');
         
        $produk=produk::pluck('nama_produk','id');
        return view('halamaneditpenjualan')->with('data',$find)->with('pelanggan',$pelanggan)->with('produk',$produk)->with('detail',$detail);
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
                   
                  'id_pelanggan'=>'required|max:255|min:1',
                  'tanggal_beli'=>'required|date',
                 
    
            ]);
           

            $penjualan=penjualan::find($id);
            $penjualan->id_pelanggan=$request->id_pelanggan;
            $penjualan->tanggal_beli=$request->tanggal_beli;
            $penjualan->save();
            $datadetail=detail::select('id')->where('id_penjualan', $penjualan->id)->value('id');
            $detail=detail::find($datadetail);
            $id_produk=$request->id_produk;
           $hargabarang=produk::find($id_produk)->harga;
           $jumlah= $request->jumlah;
           $hasil=$jumlah*$hargabarang;
         
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
        penjualan::destroy($id);
        $datadetail=detail::select('id')->where('id_penjualan', $id)->value('id');
        detail::destroy($datadetail);
        return redirect()->route("home.index");
    }
}

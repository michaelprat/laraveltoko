<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produk;
use App\kategori;
class dataproduk extends Controller
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
        $kategori = kategori::pluck('nama_kategori', 'id');
        return view('tambahdataproduk')->with('kategori',$kategori);

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
                  'nama_produk'=>'required|max:255|min:1',
                  'harga'=>'required|numeric',
                  'id_katagori'=>'required',

        ]);
   produk::create($request->all());
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
       $find=produk::find($id);
       $kategori = kategori::pluck('nama_kategori', 'id');
       return view('halamaneditproduk')->with('data',$find)->with('kategori',$kategori);
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
                      'nama_produk'=>'required|max:255|min:1',
                      'harga'=>'required|numeric',
                      'id_katagori'=>'required',
    
            ]);
            produk::find($id)->update($request->all());  //find=where data $id hasil lemparan dari halaman lain
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
        produk::destroy($id);
        return redirect()->route("home.index");
    }
}

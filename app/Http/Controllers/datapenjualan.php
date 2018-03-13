<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\penjualan;
use App\pelanggan;

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
        return view('tambahdatapenjualan')->with('pelanggan',$pelanggan);
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
                
        ]);
   penjualan::create($request->all());
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
        $pelanggan = pelanggan::pluck('nama_pelanggan', 'id');
        return view('halamaneditpenjualan')->with('data',$find)->with('pelanggan',$pelanggan);
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
            penjualan::find($id)->update($request->all());  //find=where data $id hasil lemparan dari halaman lain
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
        return redirect()->route("home.index");
    }
}

<?php

namespace App\Http\Controllers;
use App\pelanggan;
use Illuminate\Http\Request;

class datapelanggan extends Controller
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
        return view('tambahdatapelanggan');
    
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
             'nama_pelanggan'=>'required|min:1',
             
             ]);
          

         
        pelanggan::create($request->all());
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
      $find=pelanggan::find($id);
      return view('halamaneditpelanggan')->with('data',$find);
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
             'nama_pelanggan'=>'required|min:1',
             
             ]);


        pelanggan::find($id)->update($request->all());  //find=where data $id hasil lemparan dari halaman lain
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
        pelanggan::destroy($id);  
        return redirect()->route("home.index");
    }
}

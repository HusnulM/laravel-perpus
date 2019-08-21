<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Buku;
use App\Kategori;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = DB::table('table_buku')
        ->join('table_kategori', 'table_buku.kategori', '=', 'table_kategori.kategori')
        ->select('table_buku.id_buku','table_buku.judul_buku', 'table_buku.deskripsi', 
                 'table_kategori.deskripsi as kategori', 'table_buku.cover_img')
        ->get();

        // return $buku;
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('buku.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_buku' => 'required',
            'deskripsi'  => 'required',
        ]);
        
        $file = $request->file('cover_img');

        $buku = new Buku;
        $buku->judul_buku = $request->judul_buku;
        $buku->deskripsi  = $request->deskripsi;
        $buku->kategori   = $request->kategori;
        $buku->cover_img  = $file->getClientOriginalName();
        
        $tujuan_upload = 'image';
	    $file->move($tujuan_upload,$file->getClientOriginalName());

        $buku->save();
        return redirect('buku')->with('msg','Data Berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::where('id_buku', $id)->first();
        return $buku;
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

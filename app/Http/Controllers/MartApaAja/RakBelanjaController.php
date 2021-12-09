<?php

namespace App\Http\Controllers\MartApaAja;

use App\Http\Controllers\Controller;
use App\Models\RakBelanja;
use App\Models\JenisProduk;
use Illuminate\Http\Request;

class RakBelanjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Rakbelanja = RakBelanja::paginate(10);
        return view('Content.RakBelanja.Index', ['Rakbelanja' => $Rakbelanja]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $JenisProduks = JenisProduk::all();
        return view('Content.RakBelanja.Create', ['JenisProduks' => $JenisProduks]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        RakBelanja::create([
            'NamaProduk' => $request->NamaProduk,
            'MerkProduk' => $request->MerkProduk,
            'JenisProduk' => $request->JenisProduk,
            'PersediaanProduk' => $request->PersediaanProduk,
            'HargaProduk' => $request->HargaProduk,
            'DeskripsiProduk' => $request->DeskripsiProduk
        ]);

        return redirect()->route('rak-belanja.index')->with('Success', 'Rak Belanja berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RakBelanja  $rakBelanja
     * @return \Illuminate\Http\Response
     */
    public function show(RakBelanja $rakBelanja)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RakBelanja  $rakBelanja
     * @return \Illuminate\Http\Response
     */
    public function edit(RakBelanja $rakBelanja)
    {
        $RakBelanja = RakBelanja::find($rakBelanja->id);
        $JenisProduks = JenisProduk::all();

        return view('Content.RakBelanja.Update', ['RakBelanja' => $RakBelanja, 'JenisProduks' => $JenisProduks]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RakBelanja  $rakBelanja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RakBelanja $rakBelanja)
    {
        RakBelanja::find($rakBelanja->id)->update([
            'NamaProduk' => $request->NamaProduk,
            'MerkProduk' => $request->MerkProduk,
            'JenisProduk' => $request->JenisProduk,
            'PersediaanProduk' => $request->PersediaanProduk,
            'HargaProduk' => $request->HargaProduk,
            'DeskripsiProduk' => $request->DeskripsiProduk
        ]);

        return redirect()->route('rak-belanja.index')->with('Success', 'Rak Belanja Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RakBelanja  $rakBelanja
     * @return \Illuminate\Http\Response
     */
    public function destroy(RakBelanja $rakBelanja)
    {
        $RakBelanja = RakBelanja::find($rakBelanja->id);
        $RakBelanja->delete();

        return redirect()->route('rak-belanja.index')->with('Success', 'Rak Belanja berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers\MartApaAja;

use App\Http\Controllers\Controller;
use App\Models\RakBelanja;
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
        return view('Content.RakBelanja.Create');
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
     * @param  \App\Models\RakBelanja  $rakBelanja
     * @return \Illuminate\Http\Response
     */
    public function show(RakBelanja $rakBelanja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RakBelanja  $rakBelanja
     * @return \Illuminate\Http\Response
     */
    public function edit(RakBelanja $rakBelanja)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RakBelanja  $rakBelanja
     * @return \Illuminate\Http\Response
     */
    public function destroy(RakBelanja $rakBelanja)
    {
        //
    }
}

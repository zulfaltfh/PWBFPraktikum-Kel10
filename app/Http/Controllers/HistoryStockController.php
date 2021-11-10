<?php

namespace App\Http\Controllers;

use App\Models\historyStock;
use Illuminate\Http\Request;
use App\Models\session;

class HistoryStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth = session::all();
        $z = '[]';
        if($auth==$z){return redirect('/');}
        return view('pegawai.', ['data'=>$data]);
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
     * @param  \App\Models\historyStock  $historyStock
     * @return \Illuminate\Http\Response
     */
    public function show(historyStock $historyStock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\historyStock  $historyStock
     * @return \Illuminate\Http\Response
     */
    public function edit(historyStock $historyStock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\historyStock  $historyStock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, historyStock $historyStock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\historyStock  $historyStock
     * @return \Illuminate\Http\Response
     */
    public function destroy(historyStock $historyStock)
    {
        //
    }
}

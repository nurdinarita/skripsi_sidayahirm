<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NamaMataPelajaran;

class NamaMataPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $namamatapelajaran = NamaMataPelajaran::all();
        $jumlah_nama_mata_pelajaran = $namamatapelajaran->count();
        return view('namamatapelajaran.index', compact('namamatapelajaran', 'jumlah_nama_mata_pelajaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('namamatapelajaran.create');
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
            'nama_mata_pelajaran' => 'required'
        ]);
        $namamatapelajaran = NamaMataPelajaran::create($request->all());
        return redirect()->route('namamatapelajaran.index');
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
        $namamatapelajaran = NamaMataPelajaran::find($id);
        return view('namamatapelajaran.edit', ['namamatapelajaran' => $namamatapelajaran]);
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
        $namamatapelajaran = NamaMataPelajaran::find($id);
        $namamatapelajaran->update($request->all());
        return redirect()->route('namamatapelajaran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NamaMataPelajaran::destroy($id);
        return redirect()->route('namamatapelajaran.index');
    }
}

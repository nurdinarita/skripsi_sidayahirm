<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Pelajaran;
use App\Models\Kitab;
use App\Models\NamaMataPelajaran;
use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Pelajaran::find(5)->kelas->kelas;
        $pelajaran = Pelajaran::with(["kelas"])->get();
        $jumlah_pelajaran = $pelajaran->count();
        return view('pelajaran.index', compact('pelajaran', 'jumlah_pelajaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all(['kelas', 'id']);
        $kitab = Kitab::all(['judul_kitab', 'id']);
        $namamatapelajaran = NamaMataPelajaran::all();
        return view('pelajaran.create', compact('kelas'), compact('kitab', 'namamatapelajaran'));
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
            'id_kelas' => 'required',
            'hari' => 'required',
            'mapel' => 'required',
            'judul_kitab' => 'required',
        ]);
        $pelajaran = Pelajaran::create($request->all());
        return redirect()->route('pelajaran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pelajaran $pelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelajaran = Pelajaran::find($id);
        $kls = Pelajaran::find($id)->kelas;
        $namamatapelajaran = NamaMataPelajaran::all();
        $kitab = Kitab::all();
        $kelas = Kelas::all(['kelas', 'id']);
        return view('pelajaran.edit', compact('pelajaran', 'kls', 'namamatapelajaran', 'kitab', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pelajaran = Pelajaran::find($id);
        $pelajaran->update($request->all());
        return redirect()->route('pelajaran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pelajaran::destroy($id);
        return redirect()->route('pelajaran.index');
    }
}

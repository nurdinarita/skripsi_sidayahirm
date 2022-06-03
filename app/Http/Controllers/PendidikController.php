<?php

namespace App\Http\Controllers;

use App\Models\Kitab;
use App\Models\Pelajaran;
use App\Models\Pendidik;
use Illuminate\Http\Request;

class PendidikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pendidik = Pendidik::all();
        $pendidik = Pendidik::with(["mapel", "kitab"])->get();
        // dd($pendidik);
        $jumlah_pendidik = $pendidik->count(); //untuk jumlah pendidik
        return view('pendidik.index', compact('pendidik', 'jumlah_pendidik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelajaran = Pelajaran::all();
        $kitab = Kitab::all();
        return view('pendidik.create', compact('pelajaran', 'kitab'));
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
            'nik' => ['required', 'unique:pendidik'],
            'nama' => 'required',
            'gender' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'alamat' => 'required',
            'npwp' => 'required',
            'pendidikan_terakhir' => 'required',
            'riwayat_pendidikan_terakhir' => 'required',
            'id_mapel' => 'required',
            'id_judul_kitab' => 'required',
        ]);

        $pendidik = Pendidik::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'alamat' => $request->alamat,
            'npwp' => $request->npwp,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'riwayat_pendidikan_terakhir' => $request->riwayat_pendidikan_terakhir,
            'id_mapel' => $request->id_mapel,
            'id_judul_kitab' => $request->id_judul_kitab,
        ]);

        return redirect()->route('pendidik.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendidik  $pendidik
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pendidik = Pendidik::find($id);
        return view('pendidik.show', compact('pendidik'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendidik  $pendidik
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendidik = Pendidik::find($id);
        $plj = Pendidik::find($id)->mapel;
        return view('pendidik.edit', compact('pendidik', 'plj'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendidik  $pendidik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pendidik = Pendidik::find($id);
        $pendidik->update($request->all());
        return redirect()->route('pendidik.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendidik  $pendidik
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pendidik::destroy($id);
        return redirect()->route('pendidik.index');
    }
}

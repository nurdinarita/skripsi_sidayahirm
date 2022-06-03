<?php

namespace App\Http\Controllers;

use App\Models\FotoOrganisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FotoOrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('about.organisasi.index', ['photos' => FotoOrganisasi::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about.organisasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $validatedData = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required',
        ]);
        $validatedData['foto'] = $request->file('foto')->store('foto-organisasi');
        FotoOrganisasi::create($validatedData);
        return redirect('foto-organisasi');
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
        return view('about.organisasi.edit', ['photo' => FotoOrganisasi::find($id)]);
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
        $data = FotoOrganisasi::where('id', $id)->first();
        $validatedData = $validatedData = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);
        if ($request->file('foto')) {
            Storage::delete($data->foto);
            $validatedData['foto'] = $request->file('foto')->store('foto-organisasi');
        }

        $data->update($validatedData);
        return redirect('foto-organisasi');
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

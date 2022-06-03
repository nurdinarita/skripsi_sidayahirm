<?php

namespace App\Http\Controllers;

use App\Models\Kitab;
use Illuminate\Http\Request;

class KitabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kitab = Kitab::all();
        $jumlah_kitab = $kitab->count();
        return view('kitab.index', compact('kitab', 'jumlah_kitab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kitab.create');
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
            'judul_kitab' => 'required'
        ]);
        $kitab = Kitab::create($request->all());
        return redirect()->route('kitab.index');
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
        $kitab = Kitab::find($id);
        return view('kitab.edit', ['kitab' => $kitab]);
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
        $kitab = Kitab::find($id);
        $kitab->update($request->all());
        return redirect()->route('kitab.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kitab::destroy($id);
        return redirect()->route('kitab.index');
    }
}

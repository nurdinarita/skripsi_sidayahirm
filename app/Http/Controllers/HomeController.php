<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;
use App\Models\Pendidik;
use App\Models\Kelas;
use App\Models\Pelajaran;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jumlah_santri = Santri::all()->count();
        $jumlah_pendidik = Pendidik::all()->count();
        $jumlah_kelas = Kelas::all()->count();
        $jumlah_pelajaran = Pelajaran::all()->count();
        
        return view('index.index', compact('jumlah_santri', 'jumlah_pendidik', 'jumlah_kelas', 'jumlah_pelajaran'));
    }
}

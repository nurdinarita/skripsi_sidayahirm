<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\Pendidik;
use Illuminate\Http\Request;

use PDF;

class LaporanController extends Controller
{
    public function cetakSantri()
    {
        $santri = Santri::all();
        $jumlah_santri = $santri->count();
        return view('laporan.santri.index', compact('santri', 'jumlah_santri'));
    }

    public function cetakFormSantri()
    {
        return view('laporan.santri.cetakForm');
    }

    public function cetakDataSantri(Request $request)
    {
        $cetakPertanggal = Santri::all()->whereBetween('created_at', [$request->tglAwal, $request->tglAkhir]);

        $pdf = PDF::loadview('laporan.santri.cetakSantriPertanggal', ['santri'=>$cetakPertanggal])->setPaper('A4', 'landscape');
    	return $pdf->stream('data-santri');
    }

    public function cetakPendidik()
    {
        $pendidik = Pendidik::with(["mapel", "kitab"])->get();

        $jumlah_pendidik = $pendidik->count(); //untuk jumlah pendidik
        return view('laporan.pendidik.index', compact('pendidik', 'jumlah_pendidik'));
    }

    public function cetakFormPendidik()
    {
        return view('laporan.pendidik.cetakForm');
    }

    public function cetakDataPendidik(Request $request)
    {
        $cetakPertanggal = Pendidik::all()->whereBetween('created_at', [$request->tglAwal, $request->tglAkhir]);

        $pdf = PDF::loadview('laporan.pendidik.cetakpendidikPertanggal', ['pendidik'=>$cetakPertanggal])->setPaper('A4', 'landscape');
    	return $pdf->stream('data-pendidik');
    }
}

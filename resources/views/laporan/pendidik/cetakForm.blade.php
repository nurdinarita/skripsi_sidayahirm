@extends('layouts.master')
@section('content')
<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="icofont icofont-table bg-c-blue"></i>
                        <div class="d-inline">
                            <h4>Cetak Data Pendidik</h4>
                            <span>Cetak Data Pendidik Dayah Istiqamatuddin Raudhatul Mu'arrif</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">

                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ url('/laporan/pendidik') }}">Data Pendidik</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->

        <!-- Page-body start -->
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Zero config.table start -->
                    <div class="card">
                        <div class="card-header">
                            <h5>Pilih Tanggal</h5>

                            <form action="{{ url('/laporan/cetak-data-pendidik') }}" method="post">
                                @csrf
                                <div class="mt-2">
                                    <label for="tglAwal">Tanggal Awal</label>
                                    <input type="date" name="tglAwal" id="tglAwal" class="form-control" required>
                                </div>
                                <div class="mt-2">
                                    <label for="tglAkhir">Tanggal Akhir</label>
                                    <input type="date" name="tglAkhir" id="tglAkhir" class="form-control" required>
                                </div>

                                <button class="btn btn-primary mt-2" style="width: 100%;">Cetak Data <i class="icofont icofont-print"></i></button>
                            </form>
                            {{-- <div class="card-header-right">
                                <a href="{{ url('laporan/cetak-data-santri') }}" class="btn btn-primary">Cetak PDF</a>
                            </div> --}}
                        </div>

                    </div>
                    <!-- Zero config.table end -->
                </div>
            </div>
        </div>
        <!-- Page-body end -->
    </div>
</div>
@endsection
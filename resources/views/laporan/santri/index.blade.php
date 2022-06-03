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
                            <h4>Laporan Data Santri</h4>
                            <span>Data Santri Dayah Istiqamatuddin Raudhatul Mu'arrif</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">

                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ url('laporan/santri') }}">Data Santri</a>
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
                            <h5>Laporan Data Santri</h5>
                            <div class="card-header-right">
                                <a href="{{ url('laporan/cetak-data-santri') }}" class="btn btn-primary">Cetak PDF</a>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="dt-responsive table-responsive">
                                <table id="simpletable" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Gender</th>
                                            <th>tanggal_lahir</th>
                                            <th>Tempat Lahir</th>
                                            <th>Alamat</th>
                                            <th>Nama Ayah</th>
                                            <th>Nama Ibu</th>
                                            <th>Tahun Masuk</th>
                                            <th>Mukim/Tidak</th>
                                            <th>Provinsi</th>
                                            <th>Kabupaten</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($santri as $s)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$s->nik}}</td>
                                            <td>{{$s->nama}}</td>
                                            <td>{{$s->gender}}</td>
                                            <td>{{$s->tanggal_lahir}}</td>
                                            <td>{{$s->tempat_lahir}}</td>
                                            <td>{{$s->alamat}}</td>
                                            <td>{{$s->nama_ayah}}</td>
                                            <td>{{$s->nama_ibu}}</td>
                                            <td>{{$s->tahun_masuk}}</td>
                                            <td>{{$s->mukim_tidak}}</td>
                                            <td>{{$s->provinsi}}</td>
                                            <td>{{$s->kabupaten}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Gender</th>
                                            <th>tanggal_lahir</th>
                                            <th>Tempat Lahir</th>
                                            <th>Alamat</th>
                                            <th>Nama Ayah</th>
                                            <th>Nama Ibu</th>
                                            <th>Tahun Masuk</th>
                                            <th>Mukim/Tidak</th>
                                            <th>Provinsi</th>
                                            <th>Kabupaten</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="pull-left">
                                    <strong>Jumlah Kelas : {{ $jumlah_santri }}</strong>
                                </div>
                            </div>
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
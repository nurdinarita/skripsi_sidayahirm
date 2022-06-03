@extends('layouts.master')
@section('content')

<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header card">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="icofont icofont-table bg-c-blue"></i>
                            <div class="d-inline">
                                <h4>Detail Data Santri Dayah Istiqamatuddin Raudhatul Mu'arrif</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('pendidik.index')}}">Data Pendidik</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->

            <!-- Page-body start -->
            <div class="page-body">
                <!-- Basic table card start -->
                <div class="card">
                    <!-- <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="icofont icofont-table bg-c-blue"></i>
                            <div class="d-inline">
                                <h4>Detail Data Santri Dayah Istiqamatuddin Raudhatul Mu'arrif</h4>
                            </div>
                        </div>
                    </div> -->
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>Nik</th>
                                        <td> : {{$pendidik->nik}}</td>

                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td>: {{$pendidik->nama}}</td>

                                    </tr>
                                    <tr>
                                        <th>Gender </th>
                                        <td>: {{$pendidik->gender}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir </th>
                                        <td>: {{$pendidik->tanggal_lahir}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <td>{{$pendidik->tempat_lahir}}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>: {{$pendidik->alamat}}</td>
                                    </tr>

                                    <tr>
                                        <th>NPWP</th>
                                        <td> :{{$pendidik->npwp}}</td>
                                    </tr>
                                    <tr>
                                        <th>Pendidikan Terakhir</th>
                                        <td>: {{$pendidik->pendidikan_terakhir}}</td>
                                    </tr>
                                    <tr>
                                        <th>Riwayat Pendidikan Terakhir</th>
                                        <td>: {{$pendidik->riwayat_pendidikan_terakhir}}</td>
                                    </tr>
                                    <tr>
                                        <th>Mata Pelajarank</th>
                                        <td>: {{$pendidik->mapel->mapel}}</td>
                                    </tr>
                                    <!-- <tr>
                                        <th>
                                            Judul Kitab
                                        </th>
                                    </tr> -->
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Basic table card end -->

            </div>
            <!-- Page-body end -->
        </div>
    </div>
    <!-- Main-body end -->

</div>

@endsection
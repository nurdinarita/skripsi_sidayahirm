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
                                <li class="breadcrumb-item"><a href="{{ route('santri.index')}}">Data Santri</a>
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

                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>Nik </th>
                                                <td>: {{$santri->nik}}</td>
                                            </tr>
                                            <tr>
                                                <th>Nama</th>
                                                <td>: {{$santri->nama}}</td>
                                            </tr>
                                            <tr>
                                                <th>Gender </th>
                                                <td>: {{$santri->gender}}</td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Lahir </th>
                                                <td>: {{$santri->tanggal_lahir}}</td>
                                            </tr>
                                            <tr>
                                                <th>Tempat Lahir</th>
                                                <td>{{$santri->tempat_lahir}}</td>
                                            </tr>
                                            <tr>
                                                <th>Alamat</th>
                                                <td>: {{$santri->alamat}}</td>
                                            </tr>
                                            <tr>
                                                <th> Nama Orang Tua</th>
                                            </tr>
                                            <tr>
                                                <th>Ayah</th>
                                                <td> :{{$santri->nama_ayah}}</td>
                                            </tr>
                                            <tr>
                                                <th>Ibu</th>
                                                <td>: {{$santri->nama_ibu}}</td>
                                            </tr>
                                            <tr>
                                                <th>Tahun Masuk</th>
                                                <td>: {{$santri->tahun_masuk}}</td>
                                            </tr>
                                            <tr>
                                                <th>Mukim / Tidak</th>
                                                <td>: {{$santri->mukim_tidak}}</td>
                                            </tr>
                                            <tr>
                                                <th>Provinsi</th>
                                                <td>: {{$santri->provinsi}}</td>
                                            </tr>
                                            <tr>
                                                <th>Kabupaten</th>
                                                <td>: {{$santri->kabupaten}}</td>
                                            </tr>
                                        </thead>
                                    </table>
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
    <!-- Main-body end -->

</div>
@endsection
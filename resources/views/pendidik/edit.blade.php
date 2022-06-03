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
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('pendidik.index') }}">Data Pendidik</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->

            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Basic Inputs Validation start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Edit Data Pendidik</h5>
                                <div class="card-header-right"> <i class="icofont icofont-spinner-alt-5"></i> </div>
                            </div>
                            <div class="card-block">
                                <form id="main" method="post" action="{{ route('pendidik.update',$pendidik->id) }}" novalidate>
                                    @method('PATCH')
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nik</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nik" id="nik" value="{{$pendidik->nik}}"> 
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama" id="nama" value="{{$pendidik->nama}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-10">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input " type="radio" name="gender" id="gender-1" value="Laki-laki"> Laki-laki
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input " type="radio" name="gender" id="gender-2" value="Perempuan"> Perempuan
                                                </label>
                                            </div>

                                            <span class="invalid-feedback" role="alert">
                                                <strong>$message</strong>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{$santri->tanggal_lahir}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="{{$santri->tempat_lahir}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="alamat" id="alamat" value="{{$santri->alamat}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><b>Nama Orang Tua</b> </label>                                       
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama Ayah</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" value="{{$santri->nama_ayah}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama Ibu</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" value="{{$santri->nama_ibu}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tahun Masuk</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="tahun_masuk" id="tahun_masuk" value="{{$santri->tahun_masuk}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Mukim</label>
                                        <div class="col-sm-10">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input " type="radio" name="mukim_tidak" id="gender-1" value="Ya"> Ya
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input " type="radio" name="mukim_tidak" id="gender-2" value="Tidak"> Tidak
                                                </label>
                                            </div>

                                            <span class="invalid-feedback" role="alert">
                                                <strong>$message</strong>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Provinsi</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="provinsi" id="provinsi" value="{{$provinsi->provinsi}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Kabupaten</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="kabupaten" id="kabupaten" value="{{$kabupaten->kabupaten}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Mata Pelajaran</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="mapel" id="mapel" value="{{$pendidik->mapel}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Judul Kitab</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="judul_kitab" id="judul_kitab" value="{{$pendidik->judul_kitab}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary m-b-0">Update</button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!-- Basic Inputs Validation end -->
                    </div>
                </div>
            </div>
            <!-- Page body end -->
        </div>
    </div>
    <!-- Main-body end -->

</div>
@endsection
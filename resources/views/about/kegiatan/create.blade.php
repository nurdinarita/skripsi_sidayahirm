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
                                    <h4>Foto Kegiatan Dayah Istiqamatuddin Raudhatul Mu'arrif</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('foto-kegiatan.index') }}">Foto
                                            Kegiatan</a>
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
                                    <h5>Tambah Foto Kegiatan Dayah</h5>
                                    <div class="card-header-right"> <i class="icofont icofont-spinner-alt-5"></i> </div>
                                </div>
                                <div class="card-block">
                                    <form id="main" method="post" action="{{ route('foto-kegiatan.store') }}"
                                        enctype="multipart/form-data" novalidate>
                                        @csrf
                                        <div class="form-group row">
                                            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                                    name="judul" id="judul" autofocus>
                                                <span class="messages invalid-feedback">
                                                    @error('judul')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                            <div class="col-sm-10">
                                                <input type="text"
                                                    class="form-control @error('deskripsi') is-invalid @enderror"
                                                    name="deskripsi" id="deskripsi">
                                                <span class="messages invalid-feedback">
                                                    @error('deskripsi')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="foto" class="col-sm-2 col-form-label">Foto kegiatan</label>
                                            <div class="col-sm-10" style="margin-left: 12rem;">
                                                {{-- <img src="{{ asset('storage/' . $foto_kegiatan->foto) }}" alt=""
                                                    class="img-thumbnail" style="height: 150px; "> --}}
                                                <input class="form-control @error('foto') is-invalid @enderror" type="file"
                                                    id="foto" name="foto">
                                                <span class="messages invalid-feedback">
                                                    @error('foto')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                                            </div>
                                        </div>
                                    </form>
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

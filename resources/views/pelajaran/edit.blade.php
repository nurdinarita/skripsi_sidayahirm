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
                                <li class="breadcrumb-item"><a href="{{ route('pelajaran.index') }}">Data Pelajaran</a>
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
                                <h5>Edit Data Pelajaran</h5>
                                <div class="card-header-right"> <i class="icofont icofont-spinner-alt-5"></i> </div>
                            </div>
                            <div class="card-block">
                                <form id="main" method="post" action="{{ route('pelajaran.update',$pelajaran->id) }}" novalidate>
                                    @method('PATCH')
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Kelas</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="id_kelas" id="id_kelas" value="{{$pelajaran->id_kelas}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Hari</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="hari" id="hari" value="{{$pelajaran->hari}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div> -->
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Hari</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="hari" id="hari">
                                                <option value="">Pilih Hari</option>
                                                <option value="senin" @if($pelajaran->hari === 'Senin') selected @endif>Senin</option>
                                                <option value="selasa" @if($pelajaran->hari === 'Selasa') selected @endif>Selasa</option>
                                                <option value="rabu" @if($pelajaran->hari === 'Rabu') selected @endif>Rabu</option>
                                                <option value="kamis" @if($pelajaran->hari === 'Kamis') selected @endif>Kamis</option>
                                                <option value="jumat" @if($pelajaran->hari === 'Jumat') selected @endif>Jumat</option>
                                                <option value="sabtu" @if($pelajaran->hari === 'Sabtu') selected @endif>Sabtu</option>
                                                <option value="minggu" @if($pelajaran->hari === 'Minggu') selected @endif>Minggu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Mata Pelajaran</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="mapel" id="mapel" value="{{$pelajaran->mapel}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Judul Kitab</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="judul_kitab" id="judul_kitab" value="{{$pelajaran->judul_kitab}}">
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
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
                                    <h4>Foto Organisasi Dayah Istiqamatuddin Raudhatul Mu'arrif</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">

                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('foto-organisasi.index') }}">Foto
                                            Organisasi</a>
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
                                <div class="card-header mb-4">
                                    <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i>
                                        <a href="{{ route('foto-organisasi.create') }}" class="btn btn-primary">Tambah
                                            Judul
                                            Organisasi</a>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Foto</th>
                                                    <th>Judul</th>
                                                    <th>Deskripsi</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($photos as $photo)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td><img src="{{ asset('storage/' . $photo->foto) }}" alt=""
                                                                class="img-thumbnail rounded" style="width: 200px"></td>
                                                        <td>{{ $photo->judul }}</td>
                                                        <td>{{ $photo->deskripsi }}</td>
                                                        <td>
                                                            <a href="{{ route('foto-organisasi.edit', $photo->id) }}"
                                                                class="btn btn-warning icofont icofont-pencil-alt-5"
                                                                title="Edit"></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
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

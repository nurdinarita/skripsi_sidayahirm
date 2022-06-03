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
                            <h4>Data Pendidik</h4>
                            <span>Data Pendidik Dayah Istiqamatuddin Raudhatul Mu'arrif</span>
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
            <div class="row">
                <div class="col-sm-12">
                    <!-- Zero config.table start -->
                    <div class="card">
                        <div class="card-header">
                            <h5>Data Pendidik</h5>
                            <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i>
                                <a href="{{ route('pendidik.create')}}" class="btn btn-primary ">Tambah Data</a>
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
                                            <th>Tanggal Lahir</th>
                                            <th>Tempat Lahir</th>
                                            <th>Alamat</th>
                                            <th>NPWP</th>
                                            <th>Pendidikan Terakhir</th>
                                            <th>Riwayat Pendidikan Terakhir</th>
                                            <th>Mata Pelajaran</th>
                                            <!-- <th>Judul Kitab</th> -->
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pendidik as $p)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$p->nik}}</td>
                                            <td>{{$p->nama}}</td>
                                            <td>{{$p->gender}}</td>
                                            <td>{{$p->tanggal_lahir}}</td>
                                            <td>{{$p->tempat_lahir}}</td>
                                            <td>{{$p->alamat}}</td>
                                            <td>{{$p->npwp}}</td>
                                            <td>{{$p->pendidikan_terakhir}}</td>
                                            <td>{{$p->riwayat_pendidikan_terakhir}}</td>
                                            <td>{{$p->mapel->mapel}}</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-2">
                                                        <form action="{{ route('pendidik.destroy', $p->id)}}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <!-- <button type="submit" class="btn btn-danger icofont icofont-ui-delete" title="Hapus"></button> -->
                                                            <button type="button" class="btn btn-danger icofont icofont-ui-delete" data-toggle="modal" data-target="#default-Modal" title="hapus"></button>
                                                            <div class="modal fade" id="default-Modal" tabindex="-1" role="dialog">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <!-- <h4 class="modal-title">Modal title</h4> -->
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <!-- <h5>Static Modal</h5> -->
                                                                            <p>APAKAH ANDA YAKIN INGIN MENGHAPUS DATA INI?</p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">No</button>
                                                                            <button type="submit" class="btn btn-primary waves-effect waves-light ">Yes</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="{{ route('pendidik.edit', $p->id)}}" class="btn btn-warning icofont icofont-pencil-alt-5" title="Edit"></a>
                                                            <a href="{{ route('pendidik.show', $p->id)}}" class="btn btn-info icofont icofont icofont-ui-zoom-in" title="Detail"></a>
                                                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" class="btn btn-info icofont icofont icofont-ui-zoom-in" title="Detail"></button> -->

                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Gender</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Tempat Lahir</th>
                                            <th>Alamat</th>
                                            <th>NPWP</th>
                                            <th>Pendidikan Terakhir</th>
                                            <th>Riwayat Pendidikan Terakhir</th>
                                            <th>Mata Pelajaran</th>
                                            <!-- <th>Judul Kitab</th> -->
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="pull-left">
                                    <strong>Jumlah Pendidik : {{ $jumlah_pendidik }}</strong>
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
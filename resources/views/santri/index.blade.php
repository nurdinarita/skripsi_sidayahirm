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
                            <h4>Data Santri</h4>
                            <span>Data Santri Dayah Istiqamatuddin Raudhatul Mu'arrif</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">

                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('santri.index') }}">Data Kelas</a>
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
                            <h5>Data Santri</h5>
                            <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i>
                                <a href="{{ route('santri.create')}}" class="btn btn-primary">Tambah Data</a>
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
                                            <th>Aksi</th>

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

                                            <td>
                                                <div class="row">
                                                    <div class="col-2">
                                                        <button type="button" class="btn btn-danger icofont icofont-ui-delete" data-toggle="modal" data-target="#deleteModal" data-url="{{ url('santri/'.$s->id) }}" title="hapus"></button>
                                                        <a href="{{ route('santri.edit', $s->id)}}" class="btn btn-warning icofont icofont-pencil-alt-5" title="Edit"></a>
                                                        <a href="{{ route('santri.show', $s->id)}}" class="btn btn-info icofont icofont icofont-ui-zoom-in" title="Detail"></a>



                                                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <!-- <h4 class="modal-title">Modal title</h4> -->
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <!-- <h5>Static Modal</h5> -->
                                                                            <p>APAKAH ANDA YAKIN INGIN MENGHAPUS DATA INI?</p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <form method="post">
                                                                                @csrf
                                                                                @method('delete')
                                                                                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">No</button>
                                                                                <button type="submit" class="btn btn-primary waves-effect waves-light ">Yes</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        
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
                                            <th>tanggal_lahir</th>
                                            <th>Tempat Lahir</th>
                                            <th>Alamat</th>
                                            <th>Nama Ayah</th>
                                            <th>Nama Ibu</th>
                                            <th>Tahun Masuk</th>
                                            <th>Mukim/Tidak</th>
                                            <th>Provinsi</th>
                                            <th>Kabupaten</th>
                                            <th>Aksi</th>
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

@section('script-hapus')
<script>
    $('#deleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var url = button.data('url') // Extract info from data-* attributes
       
        var modal = $(this)

        modal.find('.modal-footer form').attr("action", url)
    })
</script>
@endsection
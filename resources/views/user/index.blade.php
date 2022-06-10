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
                            <h4>Data User</h4>
                            <span>Data User Dayah Istiqamatuddin Raudhatul Mu'arrif</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('user.index')}}">Data User</a>
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
                            <h5>Data User</h5>
                            <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i>
                                <!-- <a href="{{ route('user.create')}}" class="btn btn-primary ">Tambah Data</a> -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
                            </div>
                        </div>
                        @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            @php
                            Session::forget('success');
                            @endphp
                        </div>
                        @endif
                        @if (Session::has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ Session::get('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            @php
                            Session::forget('error');
                            @endphp
                        </div>
                        @endif
                        <div class="card-block">
                            <div class="dt-responsive table-responsive">
                                <table id="simpletable" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Status Akun</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user as $u)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$u->name}}</td>
                                            <td>{{$u->email}}</td>
                                            <td>{{$u->role}}</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-2">
                                                        
                                                            <button type="button" class="btn btn-danger icofont icofont-ui-delete" data-toggle="modal" data-target="#deleteModal" data-url="{{ route("user.destroy", $u->id) }}" title="hapus"></button>
                                                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
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
                                                                            <form method="post">
                                                                                @csrf
                                                                                @method('delete')
                                                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">No</button>
                                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Yes</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="btn btn-warning icofont icofont-pencil-alt-5" data-toggle="modal" data-target="#editModal" data-url="{{ route( 'user.update',$u->id) }}" data-name="{{ $u->name }}" data-email="{{ $u->email }}" data-role="{{ $u->role }}" title="Edit"></a>
                                                            {{-- <a href="" class="btn btn-info icofont icofont icofont-ui-zoom-in" title="Detail"></a> --}}
                                                        
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Status Akun</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="pull-left">
                                    <strong>Jumlah User : {{ $jumlah_user }}</strong>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Data User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('dashboard.add-user') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama">
                    </div>
                    <div class="form-group">
                        <label for="account_status">Status Akun</label>
                        <select class="form-control" name="account_status" required>
                            <option value="">-- Pilih Status Akun --</option>
                            <option value="Admin">Admin</option>
                            <option value="Pimpinan">Pimpinan</option>
                            <option value="Pengajar">Pengajar</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="account_status">Status Akun</label>
                        <select class="form-control" name="account_status" id="editRole" required>
                            <option value="">-- Pilih Status Akun --</option>
                            <option value="Admin">Admin</option>
                            <option value="Pimpinan">Pimpinan</option>
                            <option value="Pengajar">Pengajar</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
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

    $('#editModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var url = button.data('url') // Extract info from data-* attributes
        var email = button.data('email') // Extract info from data-* attributes
        var nama = button.data('name') // Extract info from data-* attributes
        var role = button.data('role') // Extract info from data-* attributes
       
        var modal = $(this)

        modal.find('.modal-body form').attr("action", url)
        modal.find('.modal-body #email').attr("value", email)
        modal.find('.modal-body #nama').attr("value", nama)
        modal.find('.modal-body #editRole').attr("value", role)
    })
</script>
@endsection
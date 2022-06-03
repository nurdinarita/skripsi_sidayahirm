@extends('layouts.master')
@section('content')

<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">

            <div class="page-body">
                <div class="row">
                    <!-- card1 start -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card widget-card-1">
                            <div class="card-block-small">
                                <i class="icofont icofont icofont-people bg-c-blue card1-icon"></i>
                                <span class="text-c-blue f-w-600"> Santri</span>
                                <h4>{{ $jumlah_santri}}</h4>
                                <div>
                                    <span class="f-left m-t-10 text-muted">
                                        <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>Total Santri
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card1 end -->
                    <!-- card1 start -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card widget-card-1">
                            <div class="card-block-small">
                                <i class="icofont icofont icofont-teacher bg-c-pink card1-icon"></i>
                                <span class="text-c-pink f-w-600">Pendidik</span>
                                <h4>{{ $jumlah_pendidik }}</h4>
                                <div>
                                    <span class="f-left m-t-10 text-muted">
                                        <i class="text-c-pink f-16 icofont icofont-calendar m-r-10"></i>Total Pendidik
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card1 end -->
                    <!-- card1 start -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card widget-card-1">
                            <div class="card-block-small">
                                <i class="icofont icofont-ui-home bg-c-green card1-icon"></i>
                                <span class="text-c-green f-w-600"> Kelas</span>
                                <h4>{{$jumlah_kelas}}</h4>
                                <div>
                                    <span class="f-left m-t-10 text-muted">
                                        <i class="text-c-green f-16 icofont icofont-tag m-r-10"></i>Total Kelas
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card1 end -->
                    <!-- card1 start -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card widget-card-1">
                            <div class="card-block-small">
                                <i class="icofont icofont icofont-book bg-c-yellow card1-icon"></i>
                                <span class="text-c-yellow f-w-600">Mata Pelajaran</span>
                                <h4>{{$jumlah_pelajaran}}</h4>
                                <div>
                                    <span class="f-left m-t-10 text-muted">
                                        <i class="text-c-yellow f-16 icofont icofont-refresh m-r-10"></i>Total Mata Pelajaran
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card1 end -->
                </div>
            </div>
        </div>

       
    </div>
</div>

@endsection
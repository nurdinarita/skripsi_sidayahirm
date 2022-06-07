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
                                    <li class="breadcrumb-item"><a href="{{ route('profile.index') }}">Profile Dayah</a>
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
                                    <h5>Edit Profile Dayah</h5>
                                    <div class="card-header-right"> <i class="icofont icofont-spinner-alt-5"></i> </div>
                                </div>
                                <div class="card-block">
                                    <form id="main" method="post" action="{{ route('profile.store') }}" novalidate>
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Profile</label>
                                            <div class="col-sm-10">
                                                <input type="hidden"
                                                    class="form-control @error('profile') is-invalid @enderror"
                                                    name="profile" id="profile">
                                                <trix-editor input="profile"></trix-editor>
                                                <span class="messages invalid-feedback">
                                                    @error('profile')
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

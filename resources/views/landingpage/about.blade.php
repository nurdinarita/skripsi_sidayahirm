<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dayah IRM</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ url('landingpage/assets/favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ url('landingpage/css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigabackground.jpegtion-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav"
        style="background-color: #212529; height:6rem;">
        <div class="container">
            <a class="" href="#page-top">
                <img src="{{ url('landingpage/assets/img/Logo Dayah IRM.png') }}" height="70px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item text-dark"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item text-dark"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('login') }}"> Login </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    {{-- <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">SELAMAT DATANG</div>
            <div class="masthead-heading text-uppercase">DAYAH ISTIQAMATUDDIN RAUDHATUL MU'ARRIF</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
        </div>
    </header> --}}

    <!-- About-->
    <section class="page-section " id="about" style="margin-top:20px;">
        <div class="container ">
            <div class="text-center ">
                <h2 class="section-heading text-uppercase">About</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <h2 class="text-center">Profil</h2>
            @if ($profile !== null)
                <p>{{ $profile->deskripsi }}</p>
            @endif



            <!-- visi&misi -->
            <h2 class="text-center mt-3">Visi dan Misi</h2>
            <h3>Visi</h3>
            @foreach ($visimisi as $vm)
                <p> {{ $loop->iteration . ' . ' . $vm->visi }}</p>
            @endforeach

            <h3>Misi</h3>
            @foreach ($visimisi as $vm)
                <p> {{ $loop->iteration . ' . ' . $vm->misi }}</p>
            @endforeach
        </div>
        <!-- foto Organisasi -->
        <h2 class="text-center mt-4 mb-3">Foto Organisasi</h2>

        <div id="carouselExampleCaptions" class="carousel slide ms-5 me-5" data-bs-ride="carousel">

            <div class="carousel-inner">
                @php
                    $max = 0;

                @endphp
                @foreach ($foto_organisasi as $fo)
                    <div class="carousel-item @if ($loop->iteration === 1) active @endif">
                        <img src="{{ asset('storage/' . $fo->foto) }}" class="d-block w-100" alt="..."
                            height="500px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $fo->judul }}</h5>
                            <p>{{ $fo->deskripsi }}</p>
                        </div>
                    </div>
                    @php
                        $max = $loop->iteration;
                    @endphp
                @endforeach
            </div>
            <div class="carousel-indicators">

                @for ($i = 1; $i <= $max; $i++)
                    <button type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="{{ $i - 1 }}"
                        @if ($i === 1) class=" active "  aria-current="true" @endif
                        aria-label="Slide {{ $i }}"></button>
                @endfor

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- foto Kegiatan -->
        <h2 class="text-center mt-4 mb-3">Foto Kegiatan</h2>

        <div id="carouselExampleCaptions1" class="carousel slide ms-5 me-5" data-bs-ride="carousel">

            <div class="carousel-inner">
                @php
                    $max = 0;
                @endphp
                @foreach ($foto_kegiatan as $fk)
                    <div class="carousel-item @if ($loop->iteration === 1) active @endif">
                        <img src="{{ asset('storage/' . $fk->foto) }}" class="d-block w-100" alt="..."
                            height="500px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $fk->judul }}</h5>
                            <p>{{ $fk->deskripsi }}</p>
                        </div>
                    </div>
                    @php
                        $max = $loop->iteration;
                    @endphp
                @endforeach
            </div>
            <div class="carousel-indicators">

                @for ($i = 1; $i <= $max; $i++)
                    <button type="button" data-bs-target="#carouselExampleCaptions1"
                        data-bs-slide-to="{{ $i - 1 }}"
                        @if ($i === 1) class=" active "  aria-current="true" @endif
                        aria-label="Slide {{ $i }}"></button>
                @endfor

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions1"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions1"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- Team-->


    <!-- Contact-->

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ url('landingpage/js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>

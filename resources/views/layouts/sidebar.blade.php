<div class="pcoded-inner-navbar main-menu">
    <div class="">
        <div class="main-menu-header">
            <img class="img-40 img-radius" src="{{ asset('assets/images/user1.png') }}" alt="User-Profile-Image">
            <div class="user-details">
                <span>{{ App\Models\User::where('id', auth()->user()->id)->first()->role }}</span>
                <span id="more-details">
                    {{ App\Models\User::where('id', auth()->user()->id)->first()->role }}
                    <i class="ti-angle-down"></i></span>
            </div>
        </div>

        <div class="main-menu-content">
            <ul>
                <li class="more-details">
                    <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                    <a href="#!"><i class="ti-settings"></i>Settings</a>
                    <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- <div class="pcoded-search">
        <span class="searchbar-toggle"> </span>
        <div class="pcoded-search-box ">
            <input type="text" placeholder="Search">
            <span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>
        </div>
    </div> -->
    <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Menu</div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="">
            <a href="{{ route('dashboard') }}">
                <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        @if (auth()->user()->role == 'Admin')
            <li class="">
                <a href=" {{ route('user.index') }}">
                    <span class="pcoded-micon"><i class="ti-user"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Data User</span>
                    <span class="pcoded-mcaret"></span>
                </a>

            </li>
            <li class=" ">
                <a href="{{ route('kelas.index') }}">
                    <span class="pcoded-micon"><i class="ti-pencil-alt"></i><b>N</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.navigate.main">Data Kelas</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-book"></i><b>DM</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.widget.main">Data Pelajaran</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{ route('kitab.index') }}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Judul Kitab</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{ route('pelajaran.index') }}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Mata Pelajaran</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="">
                <a href="{{ route('pendidik.index') }}">
                    <span class="pcoded-micon"><i class="ti-id-badge"></i><b>DP</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Data Pendidik</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('santri.index') }}">
                    <span class="pcoded-micon"><i class="ti-user"></i><b>AC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.advance-components.main">Data Santri</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-info"></i><b>DM</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.widget.main">About</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{ url('profile') }}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Profile</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{ url('visi-misi') }}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Visi&misi</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{ url('foto-organisasi') }}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Foto organisasi</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{ url('foto-kegiatan') }}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Foto kegiatan</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="">
                <a href="{{ route('contact.index') }}">
                    <span class="pcoded-micon"><i class="ti-headphone-alt"></i><b>AC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.advance-components.main">Contact Us</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        @endif

        @if (auth()->user()->role == 'Admin' || auth()->user()->role == 'Pimpinan')
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-file"></i><b>I</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.icons.main">Laporan</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{ url('laporan/santri') }}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Data Santri</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{ url('laporan/pendidik') }}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Data
                                Pendidik</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
        @endif

        @if (auth()->user()->role == 'Pengajar')
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-book"></i><b>DM</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.widget.main">Data Pelajaran</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{ route('pelajaran.index') }}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Mata Pelajaran</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
        @endif
    </ul>



</div>

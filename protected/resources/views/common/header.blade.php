<!-- Start  Logo & Naviagtion  -->
<div class="navbar navbar-default navbar-top">
    <div class="container">
        <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img alt="" src="{{ asset('assets/images/logo-dki.png') }}" width="50" style="margin-top:-15px" class="img-responsive">
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <!-- Stat Search -->
            <div class="search-side">
                <a class="show-search"><i class="fa fa-search"></i></a>
                <div class="search-form">
                    <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                        <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                    </form>
                </div>
            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a>
                </li>
                <li>
                    <a class="{{ Request::is('news') ? 'active' : '' }}" href="{{ url('/news') }}">Berita</a>
                </li>
                <li>
                    <a class="{{ Request::is('about') || Request::is('visi-misi') || Request::is('tugas-fungsi') ? 'active' : '' }}" href="#">Organisasi</a>
                    <ul class="dropdown">
                        <li><a class="{{ Request::is('about') ? 'active' : '' }}" href="{{ url('about') }}">Tentang Kami</a></li>
                        <li><a class="{{ Request::is('visi-misi') ? 'active' : '' }}" href="{{ url('visi-misi') }}">Visi dan Misi</a></li>
                        <li><a class="{{ Request::is('tugas-fungsi') ? 'active' : '' }}" href="{{ url('tugas-fungsi') }}">Tugas dan Fungsi</a></li>
                        <li><a href="{{ url('structure') }}">Struktur Organisasi</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('/program') }}">Kegiatan</a>
                </li>
                <li>
                    <a class="{{ Request::is('registration') ? 'active' : '' }}" href="{{ url('/registration') }}">Pelatihan</a>
                </li>
                <li>
                    <a class="{{ Request::is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Kontak</a>
                </li>
            </ul>
            <!-- End Navigation List -->
        </div>
    </div>

    <!-- Mobile Menu Start -->
    <ul class="wpb-mobile-menu">
        <li>
            <a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a>
        </li>
        <li>
            <a class="{{ Request::is('news') ? 'active' : '' }}" href="{{ url('/news') }}">Berita</a>
        </li>
        <li>
            <a class="{{ Request::is('about') || Request::is('visi-misi') || Request::is('tugas-fungsi') ? 'active' : '' }}" href="#">Organisasi</a>
            <ul class="dropdown">
                <li><a class="{{ Request::is('about') ? 'active' : '' }}" href="{{ url('about') }}">Tentang Kami</a></li>
                <li><a class="{{ Request::is('visi-misi') ? 'active' : '' }}" href="{{ url('/visi-misi') }}">Visi dan Misi</a></li>
                <li><a class="{{ Request::is('tugas-fungsi') ? 'active' : '' }}" href="{{ url('/tugas-fungsi') }}">Tugas dan Fungsi</a></li>
                <li><a href="{{ url('/structure') }}">Struktur Organisasi</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ url('program') }}">Kegiatan</a>
        </li>
        <li>
            <a class="{{ Request::is('registration') ? 'active' : '' }}" href="{{ url('registration') }}">Pelatihan</a>
        </li>
        <li>
            <a class="{{ Request::is('contact') ? 'active' : '' }}" href="{{ url('contact') }}">Kontak</a>
        </li>
    </ul>
    <!-- Mobile Menu End -->
</div>
<!-- End Header Logo & Naviagtion -->

@extends('index')

@section('content')
<!-- Start Page Banner -->
<div class="page-banner" style="padding:40px 0; background: url(assets/images/slide-02-bg.jpg) center #f9f9f9;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Struktur Organisasi</h2>
                <p>Hirarki Hiperkes</p>
            </div>
            <div class="col-md-6">
                <ul class="breadcrumbs">
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li><a href="#">Organisasi</a></li>
                    <li>Struktur Organisasi</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="classic-title"><span>Struktur Organisasi</span></h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p><br /><br />
            </div>
        </div>
    </div>
</div>

@endsection

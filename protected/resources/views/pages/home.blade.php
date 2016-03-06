@extends('index')

@section('content')
<!-- Start Home Page Slider -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Carousel -->
                <div id="main-slide" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                        <li data-target="#main-slide" data-slide-to="1"></li>
                        <li data-target="#main-slide" data-slide-to="2"></li>
                        <li data-target="#main-slide" data-slide-to="3"></li>
                    </ol>
                    <!--/ Indicators end-->

                    <!-- Carousel inner -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="{{ asset('assets/images/hiperkes/IMG_8807.JPG') }}" alt="slider">
                        </div>
                        <!--/ Carousel item end -->
                        <div class="item">
                            <img class="img-responsive" src="{{ asset('assets/images/hiperkes/IMG_8639.JPG') }}" alt="slider">
                        </div>
                        <!--/ Carousel item end -->
                        <div class="item">
                            <img class="img-responsive" src="{{ asset('assets/images/hiperkes/IMG_7274.JPG') }}" alt="slider">
                        </div>
                        <!--/ Carousel item end -->
                        <!--/ Carousel item end -->
                        <div class="item">
                            <img class="img-responsive" src="{{ asset('assets/images/hiperkes/IMG_9195.JPG') }}" alt="slider">
                        </div>
                        <!--/ Carousel item end -->
                    </div>
                    <!-- Carousel inner end-->

                    <!-- Controls -->
                    <a class="left carousel-control" href="#main-slide" data-slide="prev">
                        <span><i class="fa fa-angle-left"></i></span>
                    </a>
                    <a class="right carousel-control" href="#main-slide" data-slide="next">
                        <span><i class="fa fa-angle-right"></i></span>
                    </a>
                </div>
                <!-- /carousel -->
            </div>
        </div>
    </div>
</div>
<!-- End Home Page Slider -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>
                    <strong>Balai Higiene Perusahaan, Kesehatan dan Keselamatan Kerja (Balai Hiperkes dan KK)</strong> merupakan suatu Unit Pelaksana Teknis Dinas Tenaga Kerja dan Transmigrasi Provinsi DKI Jakarta berdasarkan Keputusan Gubernur Propinsi DKI Jakarta No. 160 tahun 2002 pada tanggal 8 November 2002 tentang pembentukan Organisasi dan Tata Kerja Unit Pelaksana Teknis di Lingkungan Dinas Tenaga Kerja dan Transmigrasi Provinsi DKI Jakarta. Keberadaan Balai Hiperkes dan KK Disnakertrans Propivinsi DKI Jakarta sangat dibutuhkan sebagai unit yang menangani perlindungan tenaga kerja terhadap kecelakaan kerja, penyakit akibat kerja maupun lingkungan kerja.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

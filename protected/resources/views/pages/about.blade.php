@extends('index')

@section('content')
<!-- Start Page Banner -->
<div class="page-banner" style="padding:40px 0; background: url(assets/images/slide-02-bg.jpg) center #f9f9f9;">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Tentang Kami</h2>
        <p>Kami Profesional</p>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumbs">
          <li><a href="{{ url('/') }}">Beranda</a></li>
          <li><a href="#">Organisasi</a></li>
          <li>Tentang Kami</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- End Page Banner -->

<div id="content">
    <div class="container">
        <div class="page-content">
            <div class="row">
                <div class="col-md-7">
                    <h3 class="classic-title"><span>Tentang Kami</span></h3>
                    <p>
                        Balai Higiene Perusahaan, Kesehatan dan Keselamatan Kerja (Balai Hiperkes dan KK) merupakan suatu Unit Pelaksana Teknis Dinas Tenaga Kerja dan Transmigrasi Provinsi DKI Jakarta berdasarkan Keputusan Gubernur Propinsi DKI Jakarta No. 160 tahun 2002 pada tanggal 8 November 2002 tentang pembentukan Organisasi dan Tata Kerja Unit Pelaksana Teknis di Lingkungan Dinas Tenaga Kerja dan Transmigrasi Provinsi DKI Jakarta. Keberadaan Balai Hiperkes dan KK Disnakertrans Propivinsi DKI Jakarta sangat dibutuhkan sebagai unit yang menangani perlindungan tenaga kerja terhadap kecelakaan kerja, penyakit akibat kerja maupun lingkungan kerja.
                    </p>
                    <p>
                        Balai Hiperkes dan KK merupakan Unit Pelaksana Teknis Dinas Tenaga Kerja dan Transmigrasi di bidang pelatihan dan pengujian higiene perusahaan, kesehatan dan keselamatan kerja
                    </p>
                </div>
                <div class="col-md-5">
                    <!-- Start Touch Slider -->
                    <div class="touch-slider" data-slider-navigation="true">
                        <div class="item"><img alt="" src="{{ asset('assets/images/hiperkes/IMG_9195.JPG') }}"></div>
                        <div class="item"><img alt="" src="{{ asset('assets/images/hiperkes/IMG_8972.JPG') }}"></div>
                        <div class="item"><img alt="" src="{{ asset('assets/images/hiperkes/DSC03168.JPG') }}"></div>
                        <div class="item"><img alt="" src="{{ asset('assets/images/hiperkes/IMG_3694.JPG') }}"></div>
                        <div class="item"><img alt="" src="{{ asset('assets/images/hiperkes/IMG_3863.JPG') }}"></div>
                    </div>
                    <!-- End Touch Slider -->
                </div>
            </div>
            <!-- Divider -->
            <div class="hr1" style="margin-bottom:50px;"></div>
            <div class="row">
                <div class="col-md-6">
                    <!-- Classic Heading -->
                    <h3 class="classic-title"><span>Keahlian Kami</span></h3>
                    <div class="skill-shortcode">
                        <div class="skill">
                            <p>Pelatihan Pengujian Hiperkes</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-percentage="100">
                                    <span class="progress-bar-span">100%</span>
                                    <span class="sr-only">0% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <p>Layanan Konsultasi Hiperkes</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-percentage="100">
                                    <span class="progress-bar-span">100%</span>
                                    <span class="sr-only">0% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <p>Pengujian Hiperkes & KK Perusahaan</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-percentage="100">
                                    <span class="progress-bar-span">100%</span>
                                    <span class="sr-only">0% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

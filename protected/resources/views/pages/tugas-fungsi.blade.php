@extends('index')

@section('content')
<!-- Start Page Banner -->
<div class="page-banner" style="padding:40px 0; background: url(assets/images/slide-02-bg.jpg) center #f9f9f9;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Tugas & Fungsi</h2>
                <p>Tugas Kami</p>
            </div>
            <div class="col-md-6">
                <ul class="breadcrumbs">
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li><a href="#">Organisasi</a></li>
                    <li>Tugas & Fungsi</li>
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
                <h3 class="classic-title"><span>Tugas dan Fungsi</span></h3>
                <h3><span>Tugas</span></h3>
                <p>
                    <b>Balai Hiperkes dan KK </b>mempunyai tugas melaksanakan pelatihan dan pengujian di bidang higiene perusahaan, ergonomic, kesehatan dan kesselamatan kerja dengan menggunakan fasilitas laboratorium.
                </p><br />
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3><span>Fungsi</span></h3>
                <p>Untuk menyelenggarakan tugas sebagaimana dimaksud, Balai Hiperkes dan KK mempunyai fungsi :</p>
                <ol class="number">
                    <li class="items">Penyusunan rencana pelatihan dan pengujian hiperkes dan keselamatan kerja</li>
                    <li class="items">Pelatihan, pemberian layanan konsultasi dan bantuan teknis dibidang higiene perusahaan, ergonomic, kesehatan dan keselamatan kerja</li>
                    <li class="items">Penyelidikan dan pengujian dibidang higiene perusahaan, ergonomic, kesehatan dan keselamatan kerja</li>
                    <li class="items">Pengelolaan fasilitas tempat dan peralatan pelatihan dan pengujian hiperkes dan keselamatan kerja</li>
                    <li class="items">Penyelenggaraan kegiatan ketatausahaan</li>
                </ol>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('index')

@section('content')
<!-- Start Page Banner -->
<div class="page-banner" style="padding:40px 0; background: url(assets/images/slide-02-bg.jpg) center #f9f9f9;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Visi & Misi</h2>
                <p>Fokus Kami</p>
            </div>
            <div class="col-md-6">
                <ul class="breadcrumbs">
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li><a href="#">Organisasi</a></li>
                    <li>Visi & Misi</li>
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
                <h3 class="classic-title"><span>Visi dan Misi</span></h3>
                <p>Untuk menunjang misi Disnakertrans Propinsi DKI Jakarta, yaitu mendorong kesadaran tentang Higiene dan K3 di perusahaan, maka Balai Hiperkes dan KK menetapkan :<br /><br /></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>Visi</h3>
                <p>Terwujudnya tenaga kerja yang sehat dan produktif dalam lingkungan kerja yang sehat, aman dan nyaman pada tahun 2010.<br /><br /></p>
            </div>
            <div class="col-md-6">
                <h3>Misi</h3>
                <ol class="number">
                    <li class="items">Penyusunan Standard Nasional di bidang Hiperkes dan KK berdasarkan hasil penelitian, pengkajian, pengujian, dan perekayasaan serta pelatihan Hiperkes dan KK</li>
                    <li class="items">Membantu upaya peningkatan produktivitas perusahaan melalui pendekatan Hiperkes dan KK</li>
                    <li class="items">Meningkatkan derajat kesehatan tenaga kerja melalui penerapan Hiperkes dan KK</li>
                    <li class="items">Membangun jaringan informasi tentang Hiperkes dan KK yang bermanfaat dalam rangka penyusunan kebijakan daerah dalam upaya perlindungan tenaga kerja.</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Kedudukan</h3>
                <ol class="number">
                    <li class="items">Balai Hiperkes dan KK merupakan Unit Pelaksana Teknis Dinas Tenaga Kerja dan Transmigrasi di bidang pelatihan dan pengujian higiene perusahaan, kesehatan dan keselamatan kerja</li>
                    <li class="items">Balai Hiperkes dan KK dipimpin oleh seorang Kepala Balai yang dalam melaksanakan tugas dan fungsinya bertanggung jawab kepada Kepala Dinas</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('index')

@section('content')
<!-- Start Map -->
<div id="map" data-position-latitude="-6.18231" data-position-longitude="106.87543" data-marker-img="{{ asset('assets/images/map-marker.png') }}"></div>
<!-- End Map -->

<!-- Start Content -->
<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <!-- Classic Heading -->
        <h4 class="classic-title"><span>Kontak Kami</span></h4>

        <!-- Start Contact Form -->
        <form role="form" class="contact-form" id="contact-form" method="post">
          <div class="form-group">
            <div class="controls">
              <input type="text" placeholder="Nama" name="name">
            </div>
          </div>
          <div class="form-group">
            <div class="controls">
              <input type="email" class="email" placeholder="Email" name="email">
            </div>
          </div>
          <div class="form-group">
            <div class="controls">
              <input type="text" class="requiredField" placeholder="Judul" name="subject">
            </div>
          </div>

          <div class="form-group">

            <div class="controls">
              <textarea rows="7" placeholder="Pesan Anda" name="message"></textarea>
            </div>
          </div>
          <button type="submit" id="submit" class="btn-system btn-large">Kirim</button>
          <div id="success" style="color:#34495e;"></div>
        </form>
        <!-- End Contact Form -->

      </div>

      <div class="col-md-4">

        <!-- Classic Heading -->
        <h4 class="classic-title"><span>Informasi</span></h4>

        <!-- Some Info -->
        <p>
            <strong>Pusat Higiene Perusahaan, Kesehatan, dan Keselamatan Kerja (Hiperkes & KK)</strong> <br />
            <strong>Dinas Tenaga Kerja dan Transmigrasi Provinsi DKI Jakarta</strong> <br />
            Jl. Jend. A. Yani No. 69-70, Cempaka Putih, Jakarta Pusat <br />
            <ul class="icons-list">
                <li><i class="fa fa-phone" title="Phone"></i>&nbsp; 021-4209820, 4240284, 42878913</li>
                <li><i class="fa fa-fax" title="Fax"></i> 021-4209820</li>
                <li><i class="fa fa-envelope-o" title="Email"></i> info@yourcompany.com</li>
            </ul>
        </p>

        <!-- Divider -->
        <div class="hr1" style="margin-bottom:15px;"></div>

        <!-- Classic Heading -->
        <h4 class="classic-title"><span>Jam Kerja</span></h4>

        <!-- Info - List -->
        <ul class="list-unstyled">
          <li><strong>Senin - Jumat</strong> - 07.00 - 17.00 WIB</li>
          <li><strong>Sabtu</strong> - Libur</li>
          <li><strong>Minggu</strong> - Libur</li>
        </ul>

      </div>

    </div>

  </div>
</div>
<!-- End content -->
@endsection

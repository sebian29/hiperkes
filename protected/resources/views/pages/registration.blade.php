@extends('index')

@section('content')
<!-- Start Page Banner -->
<div class="page-banner" style="padding:40px 0; background: url(assets/images/slide-02-bg.jpg) center #f9f9f9;">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Daftar Pelatihan</h2>
        <p>Ikuti Pelatihan Kami</p>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumbs">
          <li><a href="{{ url('/') }}">Beranda</a></li>
          <li>Pelatihan</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- End Page Banner -->

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 sidebar left-sidebar margin-bottom-15">
                <div class="widget widget-categories">
                    <h4>Info<span class="head-line"></span></h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <ol class="number">
                        <li>Pelatihan Hiperkes dan Keselamatan Kerja Bagi Dokter</li>
                        <li>Pelatihan Hiperkes dan Keselamatan Kerja Bagi Paramedis</li>
                        <li>Pelatihan Hiperkes dan Keselamatan Kerja Bagi P2K3</li>
                        <li>Pelatihan P3K Bagi Pekerja</li>
                        <li>Pelatihan Audiometri</li>
                        <li>Pelatihan Spirometri</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-9">
                <!-- Classic Heading -->
                <h4 class="classic-title"><span>Registrasi</span></h4>

                <!-- Start Registration Form -->
                <form class="registration-form" id="registration-form" role="form" method="post">
                    <div class="form-group">
                        <div class="controls">
                            <input type="text" placeholder="Nomor Identitas" class="form-control" name="identityno">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <input type="text" placeholder="Nama Lengkap" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <input type="text" placeholder="Tempat Lahir" class="form-control" name="pob">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <input type="text" placeholder="Tanggal Lahir" class="form-control" name="dob">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <input type="text" placeholder="Asal Universitas / Akademi" class="form-control" name="university">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <select class="trainingtype" name="trainingtype" class="form-control">
                                <option value="">-- Pilih Jenis Pelatihan --</option>
                                <option value="Dokter">Dokter</option>
                                <option value="Paramedis">Paramedis</option>
                                <option value="Teknisi">Teknisi</option>
                                <option value="Lain-Lain">Lain-lain</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <select class="job" name="job" class="form-control">
                                <option value="">-- Pilih Pekerjaan Anda --</option>
                                <option value="Dokter">Dokter</option>
                                <option value="Paramedis">Paramedis</option>
                                <option value="Teknisi">Teknisi</option>
                                <option value="Lain-Lain">Lain-lain</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <input type="text" placeholder="Jabatan" class="form-control" name="position">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <textarea rows="5" placeholder="Alamat Rumah" name="home-address"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <input type="email" placeholder="Email" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <input type="text" placeholder="Nama Perusahaan" class="form-control" name="company-name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <textarea rows="5" placeholder="Alamat Kantor" name="company-address"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <select class="info" name="info" class="form-control">
                                <option value="">-- Info Pelatihan Dari --</option>
                                <option value="Teman">Teman</option>
                                <option value="Internet">Internet</option>
                                <option value="Pegawai Hiperkes">Pegawai Pusat Hiperkes</option>
                                <option value="Lain-Lain">Lain-lain</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" id="submit" class="btn-system btn-large">Submit</button>
                </form>
                <!-- End Registration Form -->
            </div>
        </div>
    </div>
</div>
@endsection

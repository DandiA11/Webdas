<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Situs resmi pendaftaran peserta didik baru SMA NEGERI 2 PATI">
  <meta name="author" content="">

  <title>Registrasi - Pendaftaran Siswa Baru</title>

  <!-- gambar title -->
  <link rel="icon" type="image/jpeg" href="assets/img/logo.jpeg">

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
   
  <style>
      .img-logo {
            max-height: 160px;
            margin-bottom: 5px; }
  </style>

</head>

<body class="bg-gradient-danger">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-md-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-md-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Registrasi Siswa Baru</h1>
                  </div>
                  <form class="user">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="nisn">NISN</label>
                        <input type="text" name="nisn" class="form-control" id="nisn">
                    </div>
                    <div class="form-group">
                        <label for="asal_sekolah">Asal Sekolah</label>
                        <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah">
                    </div>
                    <div class="form-group">
                        <label for="tahun_lulus">Tahun Lulus (lampirkan foto copy ijazah)</label>
                        <input type="file" name="tahun_lulus" class="form-control" id="tahun_lulus">
                        <input type="submit" name="tombol" value="simpan"/>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir">
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
                        </div>         
                    </div>
                    <div class="form-group">
                        <label for="berkas">*foto copy akte kelahiran yang sudah di legalisir*</label>
                        <input type="file" name="berkas" class="form-control" id="berkas">
                        <input type="submit" name="tombol" value="simpan"/>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <div class="form-check">
                                <input type="radio" name="jenis_kelamin" value="L" class="form-check-input" id="laki">
                                <label for="laki" class="form-check-label">Laki-Laki</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="jenis_kelamin" value="L" class="form-check-input" id="perempuan">
                                <label for="perempuan" class="form-check-label">Perempuan</label>
                            </div>
                        
                        </div>
                        <div class="col-md-6">
                            <label for="agama">Agama</label>
                           <select name="agama" id="agama" class="form-control">
                               <option value="">Pilih Agama</option>
                               <option value="islam">Islam</option>
                               <option value="kristen">Kristen</option>
                               <option value="katolik">Katolik</option>
                               <option value="budha">Budha</option>
                           </select>
                        </div>     
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Aktif</label>
                        <input type="text" name="email" class="form-control" id="email" >
                    </div>
                    <div class="form-group">
                        <label for="berkas">*lampirkan KK ( Kartu Keluarga )*</label>
                        <input type="file" name="berkas" class="form-control" id="berkas">
                        <input type="submit" name="tombol" value="simpan"/>
                    </div>
                    <div class="form-group">
                        <label for="berkas">Nomor Kartu Keluarga</label>
                        <input type="text" name="berkas" class="form-control" id="berkas">
                    </div>
                    <div class="form-group">
                        <label for="berkas">Nama Ayah Kandung</label>
                        <input type="text" name="berkas" class="form-control" id="berkas" >
                        <div class="col-md-6">
                            <label for="agama">Agama</label>
                           <select name="agama" id="agama" class="form-control">
                               <option value="">Pilih Agama</option>
                               <option value="islam">Islam</option>
                               <option value="kristen">Kristen</option>
                               <option value="katolik">Katolik</option>
                               <option value="budha">Budha</option>
                           </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="berkas">Pekerjaan</label>
                        <input type="text" name="berkas" class="form-control" id="berkas">
                    </div>
                    <div class="form-group">
                        <label for="berkas">Nama Ibu Kandung</label>
                        <input type="text" name="berkas" class="form-control" id="berkas">
                        <div class="col-md-6">
                            <label for="agama">Agama</label>
                           <select name="agama" id="agama" class="form-control">
                               <option value="">Pilih Agama</option>
                               <option value="islam">Islam</option>
                               <option value="kristen">Kristen</option>
                               <option value="katolik">Katolik</option>
                               <option value="budha">Budha</option>
                           </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="berkas">Pekerjaan</label>
                        <input type="text" name="berkas" class="form-control" id="berkas">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Orang Tua</label>
                        <textarea name="alamat" id="alamat" class="form-control"></textarea>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="email">Email Aktif</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="col-md-6">
                            <label for="telepon">Telephone</label>
                            <input type="text" name="telepon" class="form-control" id="telepon">
                        </div>         
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password...">
                        </div>
                        <div class="col-md-6">
                            <label for="ulangi_password">Ulangi Password</label>
                            <input type="password" name="ulangi_password" class="form-control" id="ulangi_password" placeholder="Ulangi Password...">
                        </div>         
                    </div>
                    

                    
                    <a href="siswa/dashboard.php" class="btn btn-primary btn-user btn-block">
                      Registrasi
                    </a> 
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="login.php">Sudah Punya Akun ? Login!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>

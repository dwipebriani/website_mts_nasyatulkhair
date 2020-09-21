<?php 
session_start();

include "../../config.php";
include '../template-proses/header.php';
 ?> 

 <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Tambah Kegiatan Tahun Ini</div>
        </div>


        <div class="card-body">
          <div class="table-responsive">
            <div class="col-lg-6">
            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                <label>Judul Kegiatan </label>
                <input class="form-control" name="judul" required="">
              </div>
              <div class="form-group">
                <label>Tempat Kegiatan</label>
                <input class="form-control" name="tempat" required="">
              </div>
              <div class="form-group">
                <label>Tanggal</label>
                <input class="form-control" type="date" name="tanggal" required="">
              </div>          
                <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto" required="">
              </div>

                    <div class="form-group">
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary" alt="">
                        <a href="../kegiatan_sekolah.php" class="btn btn-info">Kembali</a>
                    </div>
            </form>
            </div></div>
        </div>

 <?php 

 if(isset($_POST['simpan'])){

$judul = $_POST['judul'];
$tempat=($_POST['tempat']);
$tanggal=($_POST['tanggal']);
$file_name = $_FILES['foto']['name'];
$sourc = $_FILES['foto']['tmp_name'];
$folder = '../img/';
move_uploaded_file($sourc,$folder.$file_name);


$tambah = mysqli_query($koneksi, "INSERT INTO tbl_kegiatan_tahun_ini VALUES('','$judul','$tempat','$tanggal','$file_name')");


 // cek apakah data berhasil ditambahkan atau tidak
  if($tambah) {
    echo "
    <script>
      alert('data berhasil ditambahkan!');
      window.location.href = '../kegiatan_tahun_ini.php';
    </script> 

    ";
   } else {
     echo "
    <script>
      alert('data gagal ditambahkan!');
      window.location.href = '../kegiatan_tahun_ini.php';
    </script> 

    ";
   }
 }



include '../template-proses/footer.php';
  ?>
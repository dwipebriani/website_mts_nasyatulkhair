<?php 
session_start();

include "../../config.php";
include '../template-proses/header.php';
 ?> 

 <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Tambah Kegiatan ekstrakulikuler</div>
        </div>


        <div class="card-body">
          <div class="table-responsive">
            <div class="col-lg-6">
            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                <label>Judul Kegiatan ekstrakulikuler </label>
                <input class="form-control" name="judul" required="">
              </div>
              
              <div class="form-group">
                <label>keterangan</label>
                <input class="form-control" name="keterangan" required="">
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
$keterangan=($_POST['keterangan']);
$file_name = $_FILES['foto']['name'];
$sourc = $_FILES['foto']['tmp_name'];
$folder = '../img/';
move_uploaded_file($sourc,$folder.$file_name);


$tambah = mysqli_query($koneksi, "INSERT INTO tbl_ekstrakulikuler VALUES('','$judul','$keterangan','$file_name')");


 // cek apakah data berhasil ditambahkan atau tidak
  if($tambah) {
    echo "
    <script>
      alert('data berhasil ditambahkan!');
      window.location.href = '../ekstrakulikuler.php';
    </script> 

    ";
   } else {
     echo "
    <script>
      alert('data gagal ditambahkan!');
      window.location.href = '../ekstrakulikuler.php';
    </script> 

    ";
   }
 }



include '../template-proses/footer.php';
  ?>
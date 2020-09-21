<?php 
session_start();

include "../../config.php";
include '../template-proses/header.php';
 ?> 

 <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Tambah Testimoni</div>
        </div>


        <div class="card-body">
          <div class="table-responsive">
            <div class="col-lg-6">
            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                <label>Nama </label>
                <input class="form-control" name="nama" required="">
              </div>        
                <div class="form-group">
                <label>Komentar </label>
                <input class="form-control" name="komentar" required="">
              </div>

                    <div class="form-group">
                        <input type="submit" name="simpan" value="simpan" class="btn btn-primary" alt="">
                        <a href="../Testimoni.php" class="btn btn-info">Kembali</a>
                    </div>
            </form>
            </div></div>
        </div>

 <?php 

 if(isset($_POST['simpan'])){

$nama = $_POST['nama'];
$komentar = $_POST['komentar'];


$tambah = mysqli_query($koneksi, "INSERT INTO tbl_testimoni VALUES('','$nama','$komentar')");


 // cek apakah data berhasil ditambahkan atau tidak
  if($tambah) {
    echo "
    <script>
      alert('data berhasil ditambahkan!');
      window.location.href = '../Testimoni.php';
    </script> 

    ";
   } else {
     echo "
    <script>
      alert('data gagal ditambahkan!');
      window.location.href = '../Testimoni.php';
    </script> 

    ";
   }
 }



include '../template-proses/footer.php';
  ?>
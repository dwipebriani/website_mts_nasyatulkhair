<?php 
session_start();

include '../../config.php';
include '../template-proses/header.php';

$id_testimoni = $_GET['id_testimoni'];
$query =mysqli_query($koneksi, "SELECT * FROM tbl_testimoni where id_testimoni='$id_testimoni'");
$data = mysqli_fetch_assoc($query);

 ?>

 <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>Edit Testimoni</div>
        </div>


        <div class="card-body">
          <div class="table-responsive">
            <div class="col-lg-6">
            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                <label>Nama</label>
                <input class="form-control" name="nama" value="<?php echo $data['nama'] ;?>">
              </div>
             
              <div class="form-group">
                <label>Komentar</label>
                <input class="form-control" name="komentar" value="<?php echo $data['komentar'] ;?>">
              </div>                      

                    <div class="form-group">
                        <input type="submit" name="edit" value="edit" class="btn btn-primary">
                        
                    </div>
            </form>
            </div>
              

            </div>
        </div>

<?php 
if (isset($_POST['edit'])) {
$nama = $_POST['nama'];
$komentar = $_POST['komentar'];
$ubah = mysqli_query($koneksi, "UPDATE tbl_testimoni SET nama='$nama' WHERE id_testimoni='$id_testimoni'");
$ubah = mysqli_query($koneksi, "UPDATE tbl_testimoni SET komentar='$komentar' WHERE id_testimoni='$id_testimoni'");

 
 // cek apakah data berhasil ditambahkan atau tidak
  if($ubah) {
    echo "
    <script>
      alert('data berhasil diedit!');
      window.location.href = '../Testimoni.php';
    </script> 

    ";
   } else {
     echo "
    <script>
      alert('data gagal diubah!');
      window.location.href = '../Testimoni.php';
    </script> ";

   }
   }
  include '../template-proses/footer.php';
  ?>
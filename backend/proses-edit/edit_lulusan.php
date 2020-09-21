<?php 
session_start();

include '../../config.php';
include '../template-proses/header.php';

$id_lulusan = $_GET['id_lulusan'];
$query =mysqli_query($koneksi, "SELECT * FROM tbl_lulusan where id_lulusan='$id_lulusan'
             ");
$data = mysqli_fetch_assoc($query);

 ?>

 <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Edit Kegiatan Tahun Ini</div>
        </div>


        <div class="card-body">
          <div class="table-responsive">
            <div class="col-lg-6">
            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                <label>Judul Kegiatan</label>
                <input class="form-control" name="judul" value="<?php echo $data['judul'] ;?>">
              </div>  
              <div class="form-group">
                <label>Foto</label>
                <img width="90" height="90" src="../img/<?= $data['foto'];?>" >
                <input type="file" name="file_name">
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
$judul = $_POST['judul'];
$file_name = $_FILES['file_name']['name'];
 if ($file_name=="") {

$ubah = mysqli_query($koneksi, "UPDATE tbl_lulusan SET judul='$judul' WHERE id_lulusan='$id_lulusan'");

 }
 else {

$sourc = $_FILES['file_name']['tmp_name'];
$folder = '../img/';
move_uploaded_file($sourc,$folder.$file_name);
  
$ubah = mysqli_query($koneksi, "UPDATE tbl_lulusan SET judul='$judul', foto='$file_name'WHERE id_lulusan='$id_lulusan'");
 }







 // cek apakah data berhasil ditambahkan atau tidak
  if($ubah) {
    echo "
    <script>
      alert('data berhasil diedit!');
      window.location.href = '../lulusan.php';
    </script> 

    ";
   } else {
     echo "
    <script>
      alert('data gagal diubah!');
      window.location.href = '../lulusan.php';
    </script> ";

    
   }
   }
 


include '../template-proses/footer.php';
  ?>

<?php 
session_start();

include '../../config.php';
include '../template-proses/header.php';

$id_aktivitas_ekstra = $_GET['id_aktivitas_ekstra'];
$query =mysqli_query($koneksi, "SELECT * FROM tbl_aktivitas_ekstra where id_aktivitas_ekstra='$id_aktivitas_ekstra'
             ");
$data = mysqli_fetch_assoc($query);

 ?>

 <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Edit Aktivitas Ekstra</div>
        </div>


        <div class="card-body">
          <div class="table-responsive">
            <div class="col-lg-6">
            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                <label>nama</label>
                <input class="form-control" name="nama" value="<?php echo $data['nama'] ;?>">
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
$nama = $_POST['nama'];

$file_name = $_FILES['file_name']['name'];
 if ($file_name=="") {

$ubah = mysqli_query($koneksi, "UPDATE tbl_aktivitas_ekstra SET nama='$nama' WHERE id_aktivitas_ekstra='$id_aktivitas_ekstra'");

 }
 else {

$sourc = $_FILES['file_name']['tmp_name'];
$folder = '../img/';
move_uploaded_file($sourc,$folder.$file_name);
  
$ubah = mysqli_query($koneksi, "UPDATE tbl_aktivitas_ekstra SET nama='$nama', foto='$file_name'WHERE id_aktivitas_ekstra='$id_aktivitas_ekstra'");
 }








 // cek apakah data berhasil ditambahkan atau tidak
  if($ubah) {
    echo "
    <script>
      alert('data berhasil diedit!');
      window.location.href = '../aktivitas_ekstra.php';
    </script> 

    ";
   } else {
     echo "
    <script>
      alert('data gagal diubah!');
      window.location.href = '../aktivitas_ekstra.php';
    </script> ";

    
   }
   }
 


include '../template-proses/footer.php';
  ?>

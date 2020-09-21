<?php 
session_start();

include '../../config.php';
include '../template-proses/header.php';

$id_data = $_GET['id_data'];
$query =mysqli_query($koneksi, "SELECT * FROM tbl_data_guru where id_data='$id_data'
             ");
$data = mysqli_fetch_assoc($query);

 ?>

 <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Edit Data Guru</div>
        </div>


        <div class="card-body">
          <div class="table-responsive">
            <div class="col-lg-6">
            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                <label>Nama Guru</label>
                <input class="form-control" name="nama" value="<?php echo $data['nama'] ;?>">
              </div>
              <div class="form-group">
                <label>Pelajaran</label>
                <input class="form-control" name="pelajaran"  value="<?php echo $data['pelajaran'] ;?>">
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
$pelajaran = $_POST['pelajaran'];
$file_name = $_FILES['file_name']['name'];
 if ($file_name=="") {

$ubah = mysqli_query($koneksi, "UPDATE tbl_data_guru SET nama='$nama', pelajaran='$pelajaran'  WHERE id_data='$id_data'");

 }
 else {

$sourc = $_FILES['file_name']['tmp_name'];
$folder = '../img/';
move_uploaded_file($sourc,$folder.$file_name);
  
$ubah = mysqli_query($koneksi, "UPDATE tbl_data_guru SET nama='$nama', pelajaran='$pelajaran', foto='$file_name'WHERE id_data='$id_data'");
 }







 // cek apakah data berhasil ditambahkan atau tidak
  if($ubah) {
    echo "
    <script>
      alert('data berhasil diedit!');
      window.location.href = '../data_guru.php';
    </script> 

    ";
   } else {
     echo "
    <script>
      alert('data gagal diubah!');
      window.location.href = '../data_guru.php';
    </script> ";

    
   }
   }
 


include '../template-proses/footer.php';
  ?>

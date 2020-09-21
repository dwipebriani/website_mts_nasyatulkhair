<?php 
session_start();

include '../../config.php';
include '../template-proses/header.php';

$id_moto = $_GET['id_moto'];
$query =mysqli_query($koneksi, "SELECT * FROM tbl_moto where id_moto='$id_moto'
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
                <label>Moto</label>
                <input class="form-control" name="moto" value="<?php echo $data['moto'] ;?>">
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
$moto = $_POST['moto'];
$ubah = mysqli_query($koneksi, "UPDATE tbl_moto SET moto='$moto' WHERE id_moto='$id_moto'");

 

 // cek apakah data berhasil ditambahkan atau tidak
  if($ubah) {
    echo "
    <script>
      alert('data berhasil diedit!');
      window.location.href = '../moto.php';
    </script> 

    ";
   } else {
     echo "
    <script>
      alert('data gagal diubah!');
      window.location.href = '../moto.php';
    </script> ";

    
   }
  }


include '../template-proses/footer.php';
  ?>

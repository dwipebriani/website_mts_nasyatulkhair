<?php 
session_start();

include '../../config.php';
include '../template-proses/header.php';

$id_kelas = $_GET['id_kelas'];
$query =mysqli_query($koneksi, "SELECT * FROM tbl_kelas where id_kelas='$id_kelas'
             ");
$data = mysqli_fetch_assoc($query);

 ?>

 <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Edit kelas</div>
        </div>


        <div class="card-body">
          <div class="table-responsive">
            <div class="col-lg-6">
            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                <label>kelas</label>
                <input class="form-control" name="kelas" value="<?php echo $data['kelas'] ;?>">
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
$kelas = $_POST['kelas'];

$ubah = mysqli_query($koneksi, "UPDATE tbl_kelas SET kelas='$kelas'  WHERE id_kelas='$id_kelas'");


 
 // cek apakah data berhasil ditambahkan atau tidak
  if($ubah) {
    echo "
    <script>
      alert('data berhasil diedit!');
      window.location.href = '../kelas.php';
    </script> 

    ";
   } else {
     echo "
    <script>
      alert('data gagal diubah!');
      window.location.href = '../kelas.php';
    </script> ";

    
   }
   }
 


include '../template-proses/footer.php';
  ?>

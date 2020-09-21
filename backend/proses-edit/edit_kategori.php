<?php 
session_start();

include '../../config.php';
include '../template-proses/header.php';

$id_kategori = $_GET['id_kategori'];
$query =mysqli_query($koneksi, "SELECT * FROM tbl_kategori where id_kategori='$id_kategori'
             ");
$data = mysqli_fetch_assoc($query);

 ?>

 <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Edit Kategori</div>
        </div>


        <div class="card-body">
          <div class="table-responsive">
            <div class="col-lg-6">
            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                <label>Kategori</label>
                <input class="form-control" name="kategori" value="<?php echo $data['kategori'] ;?>">
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
$kategori = $_POST['kategori'];

$ubah = mysqli_query($koneksi, "UPDATE tbl_kategori SET kategori='$kategori'  WHERE id_kategori='$id_kategori'");


 
 // cek apakah data berhasil ditambahkan atau tidak
  if($ubah) {
    echo "
    <script>
      alert('data berhasil diedit!');
      window.location.href = '../kategori.php';
    </script> 

    ";
   } else {
     echo "
    <script>
      alert('data gagal diubah!');
      window.location.href = '../kategori.php';
    </script> ";

    
   }
   }
 


include '../template-proses/footer.php';
  ?>

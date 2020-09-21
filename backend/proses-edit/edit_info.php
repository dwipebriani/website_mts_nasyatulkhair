<?php 
session_start();

include '../../config.php';
include '../template-proses/header.php';

$id_info = $_GET['id_info'];
$query =mysqli_query($koneksi, "SELECT * FROM tbl_info where id_info='$id_info'
             ");
$data = mysqli_fetch_assoc($query);

 ?>

 <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Edit Info</div>
        </div>


        <div class="card-body">
          <div class="table-responsive">
            <div class="col-lg-6">
            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" name="alamat" value="<?php echo $data['alamat'] ;?>">
              </div>  
               <div class="form-group">
                <label>Telepon</label>
                <input class="form-control" name="tlp" value="<?php echo $data['tlp'] ;?>">
              </div>  
               <div class="form-group">
                <label>Whatsapp</label>
                <input class="form-control" name="wa" value="<?php echo $data['wa'] ;?>">
              </div> 
                <div class="form-group">
                <label>Email</label>
                <input class="form-control" name="email" value="<?php echo $data['email'] ;?>">
              </div>  
                    <div class="form-group">
                <label>Facebook</label>
                <input class="form-control" name="fb" value="<?php echo $data['fb'] ;?>">
              </div>   
                 <div class="form-group">
                <label>Twitter</label>
                <input class="form-control" name="tw" value="<?php echo $data['tw'] ;?>">
              </div>  
                <div class="form-group">
                <label>Instagram</label>
                <input class="form-control" name="ig" value="<?php echo $data['ig'] ;?>">
              </div> 
                <div class="form-group">
                <label>Youtobe</label>
                <input class="form-control" name="yt" value="<?php echo $data['yt'] ;?>">
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
$alamat = $_POST['alamat'];
$tlp = $_POST['tlp'];
$email = $_POST['email'];
$fb = $_POST['fb'];
$tw = $_POST['tw'];
$ig = $_POST['ig'];
$yt = $_POST['yt'];
$wa = $_POST['wa'];
$ubah = mysqli_query($koneksi, "UPDATE tbl_info SET alamat='$alamat',tlp='$tlp', email='$email',fb='$fb',tw='$tw',ig='$ig',yt='$yt',wa='$wa' WHERE id_info='$id_info'");

 








 // cek apakah data berhasil ditambahkan atau tidak
  if($ubah) {
    echo "
    <script>
      alert('data berhasil diedit!');
      window.location.href = '../info.php';
    </script> 

    ";
   } else {
     echo "
    <script>
      alert('data gagal diubah!');
      window.location.href = '../info.php';
    </script> ";

    
   }
 }
   
 


include '../template-proses/footer.php';
  ?>

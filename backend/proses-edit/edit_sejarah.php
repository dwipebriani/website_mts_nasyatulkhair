<?php 
session_start();

include '../../config.php';
include '../template-proses/header.php';

$id_sejarah = $_GET['id_sejarah'];
$query =mysqli_query($koneksi, "SELECT * FROM tbl_sejarah where id_sejarah='$id_sejarah'
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
                <label>sejarah</label>
               <textarea id="editor" rows="10" name="isi_sejarah" class="form-control" ><?php echo"$data[isi_sejarah]"; ?></textarea><br> 
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
$isi_sejarah = $_POST['isi_sejarah'];
$ubah = mysqli_query($koneksi, "UPDATE tbl_sejarah SET isi_sejarah='$isi_sejarah' WHERE id_sejarah='$id_sejarah'");

 

 // cek apakah data berhasil ditambahkan atau tidak
  if($ubah) {
    echo "
    <script>
      alert('data berhasil diedit!');
      window.location.href = '../sejarah.php';
    </script> 

    ";
   } else {
     echo "
    <script>
      alert('data gagal diubah!');
      window.location.href = '../sejarah.php';
    </script> ";

    
   }
  }


include '../template-proses/footer.php';
  ?>

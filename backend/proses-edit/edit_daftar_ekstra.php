<?php 
session_start();

include '../../config.php';
include '../template-proses/header.php';

$id_daftar_ekstra = $_GET['id_daftar_ekstra'];
$query =mysqli_query($koneksi, "SELECT * FROM tbl_daftar_ekstra LEFT JOIN tbl_kelas ON tbl_daftar_ekstra.id_kelas=tbl_kelas.id_kelas
            LEFT JOIN tbl_pilih_ekstra ON tbl_daftar_ekstra.id_ekstra=tbl_pilih_ekstra.id_ekstra  where id_daftar_ekstra='$id_daftar_ekstra'
             ");
$data = mysqli_fetch_assoc($query);

 ?>

 <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Edit Kegiatan Tahun Ini</div>
        </div>


         <div class="form-group">
                <label>Nama</label>
                <input class="form-control" name="nama" value="<?php echo $data['nama'] ;?>">
              </div>
               <div class="form-group">
                <label>Tempat Lahir</label>
                <input class="form-control" name="tempat" value="<?php echo $data['tempat'] ;?>">
              </div>
               <div class="form-group">
                <label>Tanggal Lahir</label>
                <input class="form-control" type="date" name="tanggal" value="<?php echo $data['tanggal'] ;?>">
              </div>
               <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" name="talamat" value="<?php echo $data['alamat'] ;?>">
              </div>
                             <div class="form-group form-label-group">
                    <select class="form-control" name="id_kelas">
                        <option value="<?php echo $data['id_kelas']; ?>" selected=""><?php echo $data['nama_kelas']; ?></option>
                        <?php
                        $kelas=mysqli_query($koneksi,"select * from tbl_kelas");
                        while($datadata=mysqli_fetch_assoc($kelas)) {?>
                            <option value="<?php echo $datadata['id_kelas']; ?>"><?php echo $datadata['nama_kelas']; ?></option>
                            <?php 
                                }
                             ?>
                    </select></div>
               <div class="form-group">
                <label>Nomor Whatssap</label>
                <input class="form-control" name="no_wa" value="<?php echo $data['no_wa'] ;?>">
              </div>
              <div class="form-group form-label-group">
                           <select class="form-control" name="id_ekstra">
                               <option value="<?php echo $data['id_ekstra']; ?>" disabled="" selected="">--Pilih Ekstra--
                               </option>
                               <?php    
                               include "config.php";
                               $ekstra=mysqli_query($koneksi,"select * from tbl_pilih_ekstra");
                        while($dataaa=mysqli_fetch_assoc($ekstra)) {?>
                            <option value="<?php echo $dataaa['id_ekstra']; ?>"><?php echo $dataaa['nama_ekstra']; ?></option>
                            <?php 
                                }
                             ?>
                                ?>
                           </select> 
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
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$id_kelas = $_POST['id_kelas'];
$no_wa = $_POST['no_wa'];
$id_ekstra = $_POST['id_ekstra'];

$file_name = $_FILES['file_name']['name'];
 if ($file_name=="") {

$ubah = mysqli_query($koneksi, "UPDATE tbl_daftar_ekstra SET nama='$nama', tempat='$tempat',tanggal='$tanggal',alamat='$alamat',id_kelas='$id_kelas',no_wa='$no_wa',id_ekstra='$id_ekstra'  WHERE id_daftar_ekstra='$id_daftar_ekstra'");

 }
 else {

$sourc = $_FILES['file_name']['tmp_name'];
$folder = '../img/';
move_uploaded_file($sourc,$folder.$file_name);
  
$ubah = mysqli_query($koneksi, "UPDATE tbl_daftar_ekstra SET nama='$nama', tempat='$tempat',tanggal='$tanggal',alamat='$alamat',id_kelas='$id_kelas',no_wa='$no_wa',id_ekstra='$id_ekstra', foto='$file_name'WHERE id_daftar_ekstra='$id_daftar_ekstra'");
 }







 // cek apakah data berhasil ditambahkan atau tidak
  if($ubah) {
    echo "
    <script>
      alert('data berhasil diedit!');
      window.location.href = '../daftar_ekstra.php';
    </script> 

    ";
   } else {
     echo "
    <script>
      alert('data gagal diubah!');
      window.location.href = '../daftar_ekstra.php';
    </script> ";

    
   }
   }
 


include '../template-proses/footer.php';
  ?>

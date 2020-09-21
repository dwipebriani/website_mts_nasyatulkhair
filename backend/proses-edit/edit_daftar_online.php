<?php 
session_start();

include '../../config.php';
include '../template-proses/header.php';

$id_daftar_online = $_GET['id_daftar_online'];
$query =mysqli_query($koneksi, "SELECT * FROM tbl_daftar_online where id_daftar_online='$id_daftar_online'
             ");
$data = mysqli_fetch_assoc($query);

 ?>

 <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Edit daftar online</div>
        </div>


        <div class="card-body">
          <div class="table-responsive">
            <div class="col-lg-6">
            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                <label>Nama Siswa/ Siswi</label>
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
                <label>Email</label>
                <input class="form-control" type="Email" name="email" value="<?php echo $data['email'] ;?>">
              </div>  
               <div class="form-group">
                <label>Jenis Kelamin</label>
                <input class="form-control"  name="jk" value="<?php echo $data['jk'] ;?>">
              </div>   
               <div class="form-group">
                <label>NISN</label>
                <input class="form-control"  name="nisn" value="<?php echo $data['nisn'] ;?>">
              </div>   
               <div class="form-group">
                <label>Nama Ayah</label>
                <input class="form-control"  name="nm_ayah" value="<?php echo $data['nm_ayah'] ;?>">
              </div> 
              
               <div class="form-group">
                <label>No Tlp Orangtua</label>
                <input class="form-control"  name="no_tlp" value="<?php echo $data['no_tlp'] ;?>">
              </div> 
              <div class="form-group">
                <label>Alamat</label>
                <input class="form-control"  name="alamat" value="<?php echo $data['alamat'] ;?>">
              </div> 
              
              <div class="form-group">
                <label>Ijazah</label>
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
$tempat=($_POST['tempat']);
$tanggal=($_POST['tanggal']);
$email=($_POST['email']);
$jk=($_POST['jk']);
$nisn=($_POST['nisn']);
$nm_ayah=($_POST['nm_ayah']);
$no_tlp=($_POST['no_tlp']);
$alamat=($_POST['alamat']);

$file_name = $_FILES['file_name']['name'];
 if ($file_name=="") 
{

$ubah = mysqli_query($koneksi, "UPDATE tbl_daftar_online SET nama='$nama', tempat='$tempat',tanggal='$tanggal',email='$email',jk='$jk',nisn='$nisn',nm_ayah='$nm_ayah',no_tlp='$no_tlp',alamat='$alamat'  WHERE id_daftar_online='$id_daftar_online'");

 }
 else {

$sourc = $_FILES['file_name']['tmp_name'];
$folder = '../img/';
move_uploaded_file($sourc,$folder.$file_name);

  
$ubah = mysqli_query($koneksi, "UPDATE tbl_daftar_online SET nama='$nama', tempat='$tempat',tanggal='$tanggal',email='$email',jk='$jk',nisn='$nisn',nm_ayah='$nm_ayah',no_tlp='$no_tlp',alamat='$alamat', foto='$file_name'WHERE id_daftar_online='$id_daftar_online'");
 }







 // cek apakah data berhasil ditambahkan atau tidak
  if($ubah) {
    echo "
    <script>
      alert('data berhasil diedit!');
      window.location.href = '../daftar_online.php';
    </script> 

    ";
   } else {
     echo "
    <script>
      alert('data gagal diubah!');
      window.location.href = '../daftar_online.php';
    </script> ";

    
   }
   }
 


include '../template-proses/footer.php';
  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Edit Berita</title>
	  <!-- Required meta tags -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="backend/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="backend/lib/summernote.css">
    <!-- <link rel="stylesheet" type="text/css" href="http://localhost/website/Backend/lib_berita/bootstrap.css"> -->

    <!-- <link rel="stylesheet" type="text/css" href="http://localhost/website/Backend/admin.css"> -->
    <link rel="stylesheet" type="text/css" href="backend/fontawesome-free/css/all.min.css">

	<link href="bootstrap.css" rel="stylesheet">
	<script src="jquery.js"></script>
	<script src="bootstrap.js"></script>
	<link href="summernote.css" rel="stylesheet">
	<script src="summernote.js"></script>
</head>

<?php 
// koneksi ke DBMS
include '../../config.php'; 
$id_berita_sekolah = $_GET["id_berita_sekolah"];

// query data service berdasarkan id_berita_sekolah
$berita = query("SELECT * FROM tbl_berita_sekolah WHERE id_berita_sekolah = '$id_berita_sekolah'")[0];

// ambil data dari tabel berita
$result2 = mysqli_query($koneksi,"SELECT * FROM tbl_kategori");



function query($query) {
include '../../config.php'; 
  $result2 = mysqli_query($koneksi, $query);
  $rows = [];
  while( $row = mysqli_fetch_assoc($result2) ) {
    $rows[] = $row;
  }
  return $rows;
}

function ubah($data){
  global $koneksi;

  $id_berita_sekolah = $data["id_berita_sekolah"];
  $judul = htmlspecialchars($data["judul"]);
  $nama_penulis = htmlspecialchars($data["nama_penulis"]);
  $tanggal = htmlspecialchars($data["tanggal"]);
  $isi = $data["isi"];
  $fotolama = htmlspecialchars($data["fotolama"]);

  // cek apakah user pilih gambar baru atau tid_berita_sekolahak
  if( $_FILES['foto'] ['error'] === 4 ) {
    $foto = $fotolama;
  } else {
    $foto = upload();
  }

  $query = "UPDATE tbl_berita_sekolah SET
            judul ='$judul',
             nama_penulis ='$nama_penulis',
             
             isi = '$isi', tanggal = '$tanggal', 
            foto ='$foto'
             WHERE id_berita_sekolah =  $id_berita_sekolah";

mysqli_query ($koneksi, $query);

return mysqli_affected_rows($koneksi);


}

function upload() {

  $namaFile = $_FILES['foto'] ['name'];
  $ukuranFile =$_FILES ['foto'] ['size'];
  $error = $_FILES ['foto'] ['error'];
  $tmpName = $_FILES ['foto'] ['tmp_name'];

  // cek apakah tidak ada foto yanag di upload
  if($error === 4){
    echo "<script>
    alert('pilih foto yang di pilih');
    </script>";
    return false;

  }

   // cek apakah yang diupload adalah foto
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
    echo "<script>
        alert('yang anda upload bukan gambar!');
    </script>";
    return false;
    }
  
 // lolos pengecekan, gambar siap diupload
  // generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;
  $folder = "../img/";
  

 move_uploaded_file($tmpName, $folder.$namaFileBaru);


  return $namaFileBaru;

}

if(isset($_POST['submit'])){
    
    if( ubah($_POST) > 0){
      echo "
        <script>
        alert('data berhasil di edit')
        document.location.href = '../berita_sekolah.php';
        </script>";
    } else {
      echo "
      <script>
      alert('data gagal di edit')
        document.location.href = '../berita_sekolah.php';
        </script>";
    }
  }

?>

<nav class="navbar navbar-expand-lg navbar bg-primary fixed-top">
      <a class="navbar-brand" style="color: white" href="../berita_sekolah.php"> <b>Kembali</b></a>    
    </nav>
  <div class="container">
  <!-- ini berita -->
<form action="" method="post" enctype="multipart/form-data">
  <div class="container-fluid">
      <h1>Edit Berita</h1>
      <div class="row">
         <div class="col-sm-9">

           <input type="hidden" name="id_berita_sekolah" value="<?= $berita["id_berita_sekolah"]; ?>">
           <input type="hidden" name="fotolama" value="<?= $berita["foto"]; ?>">

      <label for="judul" style="color: black;">Judul</label>
      <input type="teks" name="judul" required value="<?= $berita["judul"]; ?>" class =" form form-control">

      <br>

       <label for="isi" style="color: black;">Isi</label><br>
       <textarea id="editor" rows="10" name="isi" class="form-control" ><?php echo"$berita[isi]"; ?></textarea><br>

      <button class="btn btn-primary form-control mt-3" type="submit" name="submit">Simpan</button>
      </div>

      <div class="col-sm-3">

      <label for="nama_penulis" style="color: black;">Nama penulis</label>
      <input type="" name="nama_penulis" required value="<?= $berita["nama_penulis"]; ?>" class =" form form-control">
      <br>
       <label for="nama_penulis" style="color: black;">Tanggal</label>
      <input type="date" name="tanggal" required value="<?= $berita["tanggal"]; ?>" class =" form form-control">
      <br>

   
      <label for="gambar">Gambar</label>
      <img src="../img/<?= $berita['foto']; ?>" width="200">
      <br><br>
      <input type="file" name="foto" id="foto">
      <br>
      
     </div>
  </div>
  </div>
</form>
</div>

<script>
    $(document).ready(function(){
      $('#editor').summernote({
        height:200,
        
      });
    });

  </script>



<?php 	
include'../../config.php';
$id_berita_sekolah= $_GET['id_berita_sekolah'];
$hapus =mysqli_query($koneksi, "DELETE FROM tbl_berita_sekolah where id_berita_sekolah = '$id_berita_sekolah'");


if ($hapus) {
	header("location:../berita_sekolah.php");
} else{

echo'<script language="javascript">alert("Gagal Hapus petugas"); window.history.back();</script>';
}
 ?>
<?php 	
include'../../config.php';
$id_kegiatan_sekolah= $_GET['id_kegiatan_sekolah'];
$hapus =mysqli_query($koneksi, "DELETE FROM tbl_kegiatan_sekolah where id_kegiatan_sekolah = '$id_kegiatan_sekolah'");


if ($hapus) {
	header("location:../kegiatan_sekolah.php");
} else{

echo'<script language="javascript">alert("Gagal Hapus petugas"); window.history.back();</script>';
}
 ?>
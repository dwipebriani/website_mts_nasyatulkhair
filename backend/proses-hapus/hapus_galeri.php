<?php 	
include'../../config.php';
$id_galeri= $_GET['id_galeri'];
$hapus =mysqli_query($koneksi, "DELETE FROM tbl_galeri where id_galeri = '$id_galeri'");


if ($hapus) {
	header("location:../galeri.php");
} else{

echo'<script language="javascript">alert("Gagal Hapus petugas"); window.history.back();</script>';
}
 ?>
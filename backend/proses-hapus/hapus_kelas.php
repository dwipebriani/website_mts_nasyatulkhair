<?php 	
include'../../config.php';
$id_kelas= $_GET['id_kelas'];
$hapus =mysqli_query($koneksi, "DELETE FROM tbl_kelas where id_kelas = '$id_kelas'");


if ($hapus) {
	header("location:../kelas.php");
} else{

echo'<script language="javascript">alert("Gagal Hapus petugas"); window.history.back();</script>';
}
 ?>
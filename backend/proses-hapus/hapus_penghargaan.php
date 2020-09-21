<?php 	
include'../../config.php';
$id_penghargaan= $_GET['id_penghargaan'];
$hapus =mysqli_query($koneksi, "DELETE FROM tbl_penghargaan where id_penghargaan = '$id_penghargaan'");


if ($hapus) {
	header("location:../ekstrakulikuler.php");
} else{

echo'<script language="javascript">alert("Gagal Hapus petugas"); window.history.back();</script>';
}
 ?>
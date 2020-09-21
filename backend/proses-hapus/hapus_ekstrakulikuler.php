<?php 	
include'../../config.php';
$id_ekstrakulikuler= $_GET['id_ekstrakulikuler'];
$hapus =mysqli_query($koneksi, "DELETE FROM tbl_ekstrakulikuler where id_ekstrakulikuler = '$id_ekstrakulikuler'");


if ($hapus) {
	header("location:../ekstrakulikuler.php");
} else{

echo'<script language="javascript">alert("Gagal Hapus petugas"); window.history.back();</script>';
}
 ?>
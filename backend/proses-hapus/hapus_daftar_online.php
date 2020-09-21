<?php 	
include'../../config.php';
$id_daftar_online= $_GET['id_daftar_online'];
$hapus =mysqli_query($koneksi, "DELETE FROM tbl_daftar_online where id_daftar_online = '$id_daftar_online'");


if ($hapus) {
	header("location:../daftar_online.php");
} else{

echo'<script language="javascript">alert("Gagal Hapus petugas"); window.history.back();</script>';
}
 ?>
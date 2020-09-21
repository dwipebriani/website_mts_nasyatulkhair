<?php 	
include'../../config.php';
$id_daftar_ekstra= $_GET['id_daftar_ekstra'];
$hapus =mysqli_query($koneksi, "DELETE FROM tbl_daftar_ekstra where id_daftar_ekstra = '$id_daftar_ekstra'");


if ($hapus) {
	header("location:../daftar_ekstra.php");
} else{

echo'<script language="javascript">alert("Gagal Hapus petugas"); window.history.back();</script>';
}
 ?>
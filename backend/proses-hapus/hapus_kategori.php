<?php 	
include'../../config.php';
$id_kategori= $_GET['id_kategori'];
$hapus =mysqli_query($koneksi, "DELETE FROM tbl_kategori where id_kategori = '$id_kategori'");


if ($hapus) {
	header("location:../kategori.php");
} else{

echo'<script language="javascript">alert("Gagal Hapus petugas"); window.history.back();</script>';
}
 ?>
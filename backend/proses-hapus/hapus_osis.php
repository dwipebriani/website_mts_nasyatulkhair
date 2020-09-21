<?php 	
include'../../config.php';
$id_osis= $_GET['id_osis'];
$hapus =mysqli_query($koneksi, "DELETE FROM tbl_osis where id_osis = '$id_osis'");


if ($hapus) {
	header("location:../osis.php");
} else{

echo'<script language="javascript">alert("Gagal Hapus petugas"); window.history.back();</script>';
}
 ?>
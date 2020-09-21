<?php 	
include'../../config.php';
$id_lulusan= $_GET['id_lulusan'];
$hapus =mysqli_query($koneksi, "DELETE FROM tbl_lulusan where id_lulusan = '$id_lulusan'");


if ($hapus) {
	header("location:../lulusan.php");
} else{

echo'<script language="javascript">alert("Gagal Hapus petugas"); window.history.back();</script>';
}
 ?>
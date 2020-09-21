<?php 	
include'../../config.php';
$id_testimoni= $_GET['id_testimoni'];
$hapus =mysqli_query($koneksi, "DELETE FROM tbl_testimoni where id_testimoni = '$id_testimoni'");


if ($hapus) {
	header("location:../testimoni.php");
} else{

echo'<script language="javascript">alert("Gagal Hapus petugas"); window.history.back();</script>';
}
 ?>
<?php 	
include'../../config.php';
$id_data= $_GET['id_data'];
$hapus =mysqli_query($koneksi, "DELETE FROM tbl_data_guru where id_data = '$id_data'");


if ($hapus) {
	header("location:../data_guru.php");
} else{

echo'<script language="javascript">alert("Gagal Hapus petugas"); window.history.back();</script>';
}
 ?>
<?php 	
include'../../config.php';
$id_aktivitas_ekstra= $_GET['id_aktivitas_ekstra'];
$hapus =mysqli_query($koneksi, "DELETE FROM tbl_aktivitas_ekstra where id_aktivitas_ekstra = '$id_aktivitas_ekstra'");


if ($hapus) {
	header("location:../aktivitas_ekstra.php");
} else{

echo'<script language="javascript">alert("Gagal Hapus petugas"); window.history.back();</script>';
}
 ?>
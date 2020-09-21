<?php 	
include'../../config.php';
$id_kti= $_GET['id_kti'];
$hapus =mysqli_query($koneksi, "DELETE FROM tbl_kegiatan_tahun_ini where id_kti = '$id_kti'");


if ($hapus) {
	header("location:../kegiatan_tahun_ini.php");
} else{

echo'<script language="javascript">alert("Gagal Hapus petugas"); window.history.back();</script>';
}
 ?>
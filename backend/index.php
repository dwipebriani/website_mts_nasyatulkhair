<?php 
ob_start();
session_start();
if(!isset($_SESSION['login_id'])) header("location:login.php");
include 'template/header.php';
?>

    <!-- End of Content Wrapper -->
   <div class="text-center " >
              <h2 style="color: purple";><b>SELAMAT DATANG ADMIN MTS Nasyatul Khair</b></h2>
              <img src="img/au6.png" height="350">
            </div>
<?php
include 'template/footer.php';

 ?>
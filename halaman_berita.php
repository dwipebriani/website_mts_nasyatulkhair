<?php 
include 'config.php';
$id_berita_sekolah = $_GET["id_berita_sekolah"];
$result2 = mysqli_query($koneksi, "SELECT * FROM tbl_berita_sekolah LEFT JOIN tbl_kategori ON tbl_berita_sekolah.id_kategori=tbl_kategori.id_kategori where id_berita_sekolah='$id_berita_sekolah'");
$berita = mysqli_fetch_assoc($result2);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Berita-Sekolah</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="body">

    <style>
    .body{ background-color: #ffffff;
}
    </style>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
    

        <div class="main_menu">
            

            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                       <a class="btn danger"  style="color: white;" href="berita-sekolah.php">Halaman sebelumnya</a> 
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            
                            
                            <li class="nav-item"><h2 style="color: #c79a5f;">Halaman Berita</h2></li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-nav navbar-right">
            </ul>
            </div>
      </div>
    </nav>


<section class="text-center" style="margin-top: 80px;">
	<div class="container">
		<div class="col-sm-12">
                  <img width="300" src="backend/img/<?=$berita['foto']; ?>" ><br></b></h2><br>  <br><br>  <br>  
                <h2><b><?=$berita['judul']; ?></b></h2>
                <h5 style="font-size: 16px">Ditulis oleh : <?=$berita['nama_penulis']; ?></h5>
                <h5 style="">Kategori : <?=$berita['kategori']; ?></h5><br>
                <p><?=$berita['isi']; ?></p>
		</div>
	</div>
</section>
  </body>
</html>
<?php   
include 'config.php';
$result2 = mysqli_query($koneksi, "SELECT * FROM tbl_berita_sekolah LEFT JOIN tbl_kategori ON tbl_berita_sekolah.id_kategori=tbl_kategori.id_kategori ORDER BY id_berita_sekolah DESC");

 ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Berita</title>
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
                   
    </header>

    <section class="berita" id="berita">  
      <div class="container">

       
          <br><br>

          <!-- pencarian -->
       <div class="col-md-12">
          <form action="" method="post" class="form-inline my-2 my-lg-0">
            <input type="text" name="keyword" class="form-control mr-sm-2"  size="40" autofocus 
                placeholder="cari..." autocomplete="off">
              <button class="btn btn-info" type="submit" name="cari">Cari</button>
          </form>
<br><br>

          <div class="row">
            <?php while($berita =mysqli_fetch_assoc($result2)):  ?>
              <div class="col-sm-3 text-center">
                <ul class="list-group" width="200" height="150">
                  <li class="list-group-item">
                    <img src="backend/img/<?= $berita['foto']; ?>" width="150" height="100">
              <h3><?=$berita['judul']; ?></h3>
              <a href="halaman_berita.php?id_berita_sekolah=<?=$berita['id_berita_sekolah']; ?>" class="btn btn-primary">Selengkapnya</a>
            </li>
          </ul>
        </div>
      <?php endwhile;  ?>
    </div>
  </div>
</section>
</div></section></body></html>
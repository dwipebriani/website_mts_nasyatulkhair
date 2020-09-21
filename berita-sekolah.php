<?php   
include 'config.php'; 
$berita_sekolah= mysqli_query($koneksi, "SELECT * FROM tbl_berita_sekolah ORDER BY id_berita_sekolah DESC LIMIT 3"); 
$infoo= mysqli_query($koneksi, "SELECT * FROM tbl_info");
 ?>

 
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Berita-sekolah</title>
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
            <div class="search_input" id="search_input_box">
                <div class="container">
                    <form class="d-flex justify-content-between" method="" action="">
                        <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                        <button type="submit" class="btn"></button>
                        <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
                    </form>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
                            <li class="nav-item"><a class="nav-link" href="profil.php">Profil</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Kegiatan</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="kegiatan-osis.php">Osis</a></li>
                                    <li class="nav-item"><a class="nav-link" href="kegiatan-ekstrakulikuler.php">Ekstrakulikuler</a></li>
                                    <li class="nav-item"><a class="nav-link" href="kegiatan-sekolah.php">Kegiatan Sekolah</a></li>
                                    <li class="nav-item"><a class="nav-link" href="kegiatan-galeri.php">Galeri</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown active">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Berita</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="berita-sekolah.php">Berita Sekolah</a></li>
                                    <li class="nav-item"><a class="nav-link" href=berita-pengumuman.php>Pengumuman</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="kontak.php">Kontak</a></li>
                           
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2>Berita Sekolah</h2>
                            <p>Berita MTs Nasyatul Khair</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area">
        <div class="container">
            <div class="row">
             
            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        <article class="row blog_item">
                            <?php while($berita =mysqli_fetch_assoc($berita_sekolah)):  ?> 
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    
                                    <ul class="blog_meta list">
                                        <li><a href="#"><?=$berita['nama_penulis']; ?><i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#"><?=$berita['tanggal']; ?><i class="lnr lnr-calendar-full"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                   <img class="img-fluid w-100" src="backend/img/<?=$berita['foto']; ?>"><br>  
                                    <div class="blog_details">
                                        <div class="text-center">   
                                        <a href="single-blog.html">
                                            <h2><?=$berita['judul'] ?></h2>
                                        </a>
                                        <a href="halaman_berita.php?id_berita_sekolah=<?php echo $berita['id_berita_sekolah'];?>" >klik Disini untuk membaca</a> 
                                        <br><br><br>    <br>        
                                    </div>
                                    </div>
                                </div>
                            </div>
                             <?php endwhile; ?>
                        </article>
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-left"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item"><a href="more_berita.php" class="page-link">Lihat Semua Berita</a></li>
                                
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-right"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
 <!--================ Start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <?php $info =mysqli_fetch_assoc($infoo); ?>
                <div class="col-md-4  single-footer-widget">
                    <h4>MTs Nasyatul Khair</h4>
                    <ul>
                        <li><a href="#"><?=$info['alamat']; ?></a></li>
                        <li><a href="tel:62187720815"><i class="fa fa-phone"></i> <?=$info['tlp']; ?></a></li>
                        <li><a href="mailto:mts.nasyatulkhair@gmail.com"><i class="fa fa-envelope"></i> <?=$info['email']; ?></a></li>
                    </ul>
                </div>
                
                
                <div class="col-md-4 single-footer-widget">
                    <h4>Sosial Media Kami</h4>
                    
                    <ul>
                        <li><a href="https://www.facebook.com/mtsnasyatul.khair"><i class="fa fa-facebook"></i> <?=$info['fb']; ?></a></li>
                    <li><a href="https://www.instagram.com/mts.nasyatulkhair"><i class="fa fa-instagram"></i> <?=$info['ig']; ?></a></li>
                    <li><a href="https://www.youtube.com/channel/UC7i5Yzc1KGc4tmhYpWr2LgQ"><i class="fa fa-youtube"></i> <?=$info['yt']; ?></a></li>
                    </ul>
                    
                </div>
            </div>
            <div class="row footer-bottom d-flex justify-content-between">
                <p class="col-md-4 footer-text m-0 text-white">Copyright © 2020 All rights reserved | <a href="https://ruangsite.com">RuangSite.com</a></p>
                <div class="col-md-4 footer-social">
                    
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>
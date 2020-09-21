<?php   
include 'config.php'; 
$osis= mysqli_query($koneksi, "SELECT * FROM tbl_osis");
$infoo= mysqli_query($koneksi, "SELECT * FROM tbl_info");
 ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Kegiatan-Osis</title>
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
                            <li class="nav-item"><a class="nav-link" href="index.php">BERANDA</a></li>
                            <li class="nav-item"><a class="nav-link" href="profil.php">PROFIL</a></li>
                            <li class="nav-item submenu dropdown active">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">KEGIATAN</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="kegiatan-osis.php">OSIS</a></li>
                                    <li class="nav-item"><a class="nav-link" href="kegiatan-ekstrakulikuler.php">EKSTRAKULIKULER</a></li>
                                   <li class="nav-item"><a class="nav-link" href="kegiatan-sekolah.php">KEGIATAN SEKOLAH</a></li>
                                    <li class="nav-item"><a class="nav-link" href="kegiatan-galeri.php">GALERI</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">BERITA</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="berita-sekolah.php">BERITA SEKOLAH</a></li>
                                    <li class="nav-item"><a class="nav-link" href="berita-pengumuman.php">PENGUMUMAN</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="kontak.php">KONTAK</a></li>
                          
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
                           
                            <h2>Kegiatan Osis MTs Nasyatul Khair</h2>
                            <p></p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses lite_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="main_title">
                        <h2>Dokumentasi Kegiatan Osis</h2>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single course -->
<?php while($osis1 =mysqli_fetch_assoc($osis)):  ?> 

                <!-- single course -->
                <div class="col-lg-3 col-md-6">
                    <div class="single_course">
                        <div class="course_head overlay">
                            <img class="img-fluid w-100" src="backend/img/<?=$osis1['fotoo']; ?>" width='180' height='150'>
                            
                        </div>
                        <div class="course_content">
                            <h4>
                                <a href="#"><?=$osis1['judul']; ?></a>
                            </h4>
                            <p><?=$osis1['keterangan']; ?></p>
                           
                        </div>
                    </div>
                </div>
           <?php endwhile; ?>
            </div>
        </div>
    </div>
    <!--================ End Popular Courses Area =================-->

    
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
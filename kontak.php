<?php   
include 'config.php';
 $info= mysqli_query($koneksi, "SELECT * FROM tbl_info");
 $infoo= mysqli_query($koneksi, "SELECT * FROM tbl_info");
 ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Kontak</title>
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
                                    <li class="nav-item"><a class="nav-link" href="kegiatan-ekstrakuikuer.php">Ekstrakuikuer</a></li>
                                    <li class="nav-item"><a class="nav-link" href="kegiatan-sekolah.php">Kegiatan Sekolah</a></li>
                                    <li class="nav-item"><a class="nav-link" href="kegiatan-galeri.php">Galeri</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Berita</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="berita-sekolah.php">Berita Sekolah
                                    <li class="nav-item"><a class="nav-link" href="berita-pengumuman.php">Pengumuman</a></li>
                                </ul>
                            </li>
                            <li class="nav-item active"><a class="nav-link" href="kontak.php">Kontak</a></li>
                            
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
                            <h2>Kontak</h2>
                            <p>ini adalah kontak yang bisa anda hubungi</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
        <div class="container">
           
            <div class="row">
                <?php $info2 =mysqli_fetch_assoc($info); ?>
                <div class="col-lg-5">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6><?=$info2['alamat']; ?></h6>
                               
                        </div> <br>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#"><?=$info2['tlp']; ?></a></h6>
                        </div><br> 
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#"><?=$info2['email']; ?></a></h6>
                        </div><br>  
                         <div class="info_item">
                                 <a href="https://api.whatsapp.com/send?text=Assalamualaikum %20admin%20saya%20ingin%20bertanya"> <i class="fa fa-whatsapp"></i><h6><?=$info2['wa']; ?></a></h6><br><br>        
                        </div>



                    </div>
                </div>
            <div class="col-lg-5">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.213263630769!2d106.85803631476986!3d-6.366440695393127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec639ba31a37%3A0xf7d95cc3cd8ebca4!2sMadrasah%20Tsanawiyah%20Nasyatul%20Khair!5e0!3m2!1sid!2sid!4v1593178416898!5m2!1sid!2sid" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                   
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->

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
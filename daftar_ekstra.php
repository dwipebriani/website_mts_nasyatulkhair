<?php 
session_start();

include "config.php";
$infoo= mysqli_query($koneksi, "SELECT * FROM tbl_info");

 ?> 

 <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Daftar Ekstrakurikuler</title>
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
                        <h2>Daftar Ekstrakulikuler </h2>
                        <p>Silahkan isi kolom dibawah ini dengan benar</p>
                        
                    </div>
                </div>
            </div>
            <div class="row">





        <div class="card-body">
          <div class="table-responsive">
            <div class="col-lg-6">
            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                <label>Nama</label>
                <input class="form-control" name="nama" required="">
              </div>
               <div class="form-group">
                <label>Tempat Lahir</label>
                <input class="form-control" name="tempat" required="">
              </div>
               <div class="form-group">
                <label>Tanggal Lahir</label>
                <input class="form-control" type="date" name="tanggal" required="">
              </div>
               <div class="form-group">
                <label>Almat</label>
                <input class="form-control" name="alamat" required="">
              </div>
                             <div class="form-group form-label-group">
                           <select class="form-control" name="id_kelas">
                               <option value="Pilih Kelas" disabled="" selected="">--Pilih Kelas--
                               </option>
                               <?php    
                               include "config.php";
                               $kelas=mysqli_query($koneksi,"select * from tbl_kelas");
                        while($dataaaa=mysqli_fetch_assoc($kelas)) {?>
                            <option value="<?php echo $dataaaa['id_kelas']; ?>"><?php echo $dataaaa['nama_kelas']; ?></option>
                            <?php 
                                }
                             ?>
                                ?>
                           </select> 
                        </div><br><br><br>
               <div class="form-group">
                <label>Nomor Whatssap</label>
                <input class="form-control" name="no_wa" required="">
              </div>
              <div class="form-group form-label-group">
                           <select class="form-control" name="id_ekstra">
                               <option value="Pilih Jenis" disabled="" selected="">--Pilih Ekstra--
                               </option>
                               <?php    
                               include "config.php";
                               $ekstra=mysqli_query($koneksi,"select * from tbl_pilih_ekstra");
                        while($dataaaaa=mysqli_fetch_assoc($ekstra)) {?>
                            <option value="<?php echo $dataaaaa['id_ekstra']; ?>"><?php echo $dataaaaa['nama_ekstra']; ?></option>
                            <?php 
                                }
                             ?>
                                ?>
                           </select> 
                        </div><br> <br><br>  

                <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto" required="">
              </div>

                    <div class="form-group">
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary" alt="">
                        <a href="../lulusan.php" class="btn btn-info">Kembali</a>
                    </div>
            </form>
            </div></div>
        </div>

 <?php 

 if(isset($_POST['simpan'])){

$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$id_kelas = $_POST['id_kelas'];
$no_wa = $_POST['no_wa'];
$id_ekstra = $_POST['id_ekstra'];
$file_name = $_FILES['foto']['name'];
$sourc = $_FILES['foto']['tmp_name'];
$folder = '../../img/';
move_uploaded_file($sourc,$folder.$file_name);


$tambah = mysqli_query($koneksi, "INSERT INTO tbl_daftar_ekstra(id_daftar_ekstra,nama,tempat,tanggal,alamat,id_kelas,no_wa,id_ekstra,foto) VALUES(' ','$nama','$tempat','$tanggal','$alamat','$id_kelas','$no_wa','$id_ekstra','$foto')");


 // cek apakah data berhasil ditambahkan atau tidak
  if($tambah) {
    echo "
    <script>
      alert('data berhasil ditambahkan!, jika anda terdaftar anda akan dimasukan grup');
      window.location.href = 'index.php';
    </script> 

    ";
   } else {
     echo "
    <script>
      alert('data gagal ditambahkan!');
      window.location.href = 'index.php';
    </script> 

    ";
   }
 }




  ?>

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
                        <li><a href="#"><i class="fa fa-phone"></i> <?=$info['tlp']; ?></a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i> <?=$info['email']; ?></a></li>
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
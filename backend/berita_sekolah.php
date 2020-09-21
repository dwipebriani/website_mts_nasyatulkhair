 <?php  
session_start();
include '../config.php'; 
include 'template/header.php';
$berita= mysqli_query($koneksi, "SELECT * FROM tbl_berita_sekolah order by id_berita_sekolah desc");
  ?>   

  <h3><i class="fas fa-newspaper mr-2"></i>Berita</h3><hr>
   <section>
    <a  class="btn btn-primary mt-2" href="lib/index.php">[+]Tambah</a>

 <!-- pencarian -->
       <div class="col-md-12">
         


<!-- form berita -->
       <div class="row">
        <?php while($berita_sekolah = mysqli_fetch_assoc($berita)): ?>
          <div class="col-sm-3 text-center">
            <ul class="list-group"> <br>
              <li class="list-group-item">
                <img src="img/<?= $berita_sekolah['foto']; ?>"  width="150" height="100">
                <h5><?=$berita_sekolah['judul']; ?></h5>
               <a  class="btn btn-success" href="lib/edit.php?id_berita_sekolah=<?=$berita_sekolah['id_berita_sekolah'];?>">Edit</a> 
              <a  class="btn btn-danger" href="proses-hapus/hapus_berita_sekolah.php?id_berita_sekolah=<?=$berita_sekolah['id_berita_sekolah'];?>"  onclick="return confirm('yakin dihapus ?');">Hapus</a>
              </li>
            </ul>
          </div>
<?php endwhile;  ?>

       </div>
    </div>
  </section>

  <?php    
                    include 'template/footer.php'; 
                  ?>

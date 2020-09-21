 <?php  
session_start();
include '../config.php'; 
include 'template/header.php';
$pengumuman= mysqli_query($koneksi, "SELECT * FROM tbl_pengumuman order by id_pengumuman desc");
  ?>   

  <h3><i class="fas fa-newspaper mr-2"></i>pengumuman</h3><hr>
   <section>
    <a  class="btn btn-primary mt-2" href="lib/tambah_pengumuman.php">[+]Tambah</a>

 <!-- pencarian -->
       <div class="col-md-12">
         


<!-- form pengumuman -->
       <div class="row">
        <?php while($pengumuman_sekolah = mysqli_fetch_assoc($pengumuman)): ?>
          <div class="col-sm-3 text-center">
            <ul class="list-group"> <br>
              <li class="list-group-item">
                <img src="img/<?= $pengumuman_sekolah['foto']; ?>"  width="150" height="100">
                <h5><?=$pengumuman_sekolah['judul']; ?></h5>
               <a  class="btn btn-success" href="lib/edit_pengumuman.php?id_pengumuman=<?=$pengumuman_sekolah['id_pengumuman'];?>">Edit</a> 
              <a  class="btn btn-danger" href="proses-hapus/hapus_pengumuman_sekolah.php?id_pengumuman=<?=$pengumuman_sekolah['id_pengumuman'];?>"  onclick="return confirm('yakin dihapus ?');">Hapus</a>
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

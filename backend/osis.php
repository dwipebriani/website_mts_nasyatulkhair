 <?php  
session_start();
if(!isset($_SESSION['login_id'])) header("location:login.php");
include 'template/header.php';
  ?>        

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">

                <?php   
                  include '../config.php';

                  $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_osis"); ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  

                   <div class="text-left">
                  <a href="proses-tambah/tambah_osis.php" class="btn btn-primary">[+]Tambah Kegiatan Osis</a>
                </div><br>

                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul Kegiatan Osis</th>
                      <th>Keterangan</th>
                      <th> Foto</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php   
                    $no=1; 
                    while ($data = mysqli_fetch_array($tampil)) {

                      ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['judul'] ?></td>
                       <td><?php echo $data['keterangan'] ?></td>
                         <td><img src="img/<?php echo $data['foto']; ?>" width="90"></td>

                        <td><a class="btn btn-primary" href="proses-edit/edit_osis.php?id_osis=<?php echo $data['id_osis'];?>"><i class="fa fa-w fa-edit"></i></a> 

                         <a class="btn btn-danger" href="proses-hapus/hapus_osis.php?id_osis=<?php echo $data['id_osis']; ?>" onclick="return confirm('yakin dihapus ?');"><i class="fa fa-w fa-trash"></i></a></td> 

                    </tr>
                    <?php  } ?>
                  </tbody>
                </table>
              </div>
            </div></div>
<?php    
                    include 'template/footer.php'; 
                  ?>

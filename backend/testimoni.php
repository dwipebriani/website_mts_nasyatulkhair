 <?php  
session_start();
include 'template/header.php';
  ?>        

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Testimoni</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">

                <?php   
                  include '../config.php';

                  $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_testimoni"); ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  

                   <div class="text-left">
                  <a href="proses-tambah/tambah_testimoni.php" class="btn btn-primary">[+]Tambah Testimoni</a>
                </div><br>

                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Komentar</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php   
                    $no=1; 
                    while ($data = mysqli_fetch_array($tampil)) {

                      ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['nama'] ?></td>
                         <td><?php echo $data['komentar']; ?></td>

                    <td><a class="btn btn-primary" href="proses-edit/edit_testimoni.php?id_testimoni=<?php echo $data['id_testimoni'];?>"><i class="fa fa-w fa-edit"></i></a>  

                         <a class="btn btn-danger" href="proses-hapus/hapus_testimoni.php?id_testimoni=<?php echo $data['id_testimoni']; ?>" onclick="return confirm('yakin dihapus ?');"><i class="fa fa-w fa-trash"></i></a></td>  

                    </tr>
                    <?php  } ?>
                  </tbody>
                </table>
              </div>
            </div></div>
<?php    
                    include 'template/footer.php'; 
                  ?>
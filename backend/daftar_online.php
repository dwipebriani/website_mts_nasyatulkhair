<?php  
session_start();
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

                  $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_daftar_online"); ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">


                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Siswa Baru </th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir </th>
                      <th>Email</th>
                      <th>Jenis Kelamin</th>
                      <th>NISN</th>
                      <th>Nama Ayah</th>
                      <th>No Tlp</th>
                      <th>Alamat</th>
                      <th>Ijazah</th>
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
                      <td><?php echo $data['nama'] ?></td>
                       <td><?php echo $data['tempat'] ?></td>
                       <td><?php echo $data['tanggal'] ?></td>
                       <td><?php echo $data['email'] ?></td>
                       <td><?php echo $data['jk'] ?></td>
                       <td><?php echo $data['nisn'] ?></td>
                       <td><?php echo $data['nm_ayah'] ?></td>
                       <td><?php echo $data['no_tlp'] ?></td>
                       <td><?php echo $data['alamat'] ?></td>
                         <td><img src="img/<?php echo $data['foto']; ?>" width="90"></td>

                        <td><a class="btn btn-primary" href="proses-edit/edit_daftar_online.php?id_daftar_online=<?php echo $data['id_daftar_online'];?>"><i class="fa fa-w fa-edit"></i></a> 

                         <a class="btn btn-danger" href="proses-hapus/hapus_daftar_online.php?id_daftar_online=<?php echo $data['id_daftar_online']; ?>" onclick="return confirm('yakin dihapus ?');"><i class="fa fa-w fa-trash"></i></a></td> 

                    </tr>
                    <?php  } ?>
                  </tbody>
                </table>
              </div>
            </div></div>
<?php    
                    include 'template/footer.php'; 
                  ?>
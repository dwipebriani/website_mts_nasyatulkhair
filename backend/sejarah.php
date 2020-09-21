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

                  $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_sejarah"); ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  

                 

                  <thead>
                    <tr>
                      <th>Profil</th>
                      <th>Edit</th>

                    </tr>
                  </thead>

                  <tbody>
                    <?php   
                   
                    $data = mysqli_fetch_array($tampil);

                      ?>
                    <tr>
                      
                      <td><?php echo $data['isi_sejarah'] ?></td>
                      
                        <td><a class="btn btn-primary" href="proses-edit/edit_sejarah.php?id_sejarah=<?php echo $data['id_sejarah'];?>"><i class="fa fa-w fa-edit"></i></a> 

                        </td> 

                    </tr>
                   
                  </tbody>
                </table>
              </div>
            </div></div>
<?php    
                    include 'template/footer.php'; 
                  ?>

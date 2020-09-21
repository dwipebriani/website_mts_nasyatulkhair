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

                  $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_moto"); ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  

                 

                  <thead>
                    <tr>
                      <th>Moto</th>
                      <th>Edit</th>

                    </tr>
                  </thead>

                  <tbody>
                    <?php   
                   
                    $data = mysqli_fetch_array($tampil);

                      ?>
                    <tr>
                      
                      <td><?php echo $data['moto'] ?></td>
                      
                        <td><a class="btn btn-primary" href="proses-edit/edit_moto.php?id_moto=<?php echo $data['id_moto'];?>"><i class="fa fa-w fa-edit"></i></a> 

                        </td> 

                    </tr>
                   
                  </tbody>
                </table>
              </div>
            </div></div>
<?php    
                    include 'template/footer.php'; 
                  ?>

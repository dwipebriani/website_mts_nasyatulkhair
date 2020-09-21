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

                  $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_info"); ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  

                  <thead>
                    <tr>
                     
                      <th>Alamat</th>
                      <th>Telepon</th>
                      <th>Whatsapp</th>
                      <th>Email</th>
                      <th>Facebook</th>
                      <th>Instagram</th>
                      <th>Youtobe</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php   
                    
                   $data = mysqli_fetch_array($tampil);

                      ?>
                    <tr>
                      
                      <td><?php echo $data['alamat'] ?></td>
                       <td><?php echo $data['tlp'] ?></td>
                       <td><?php echo $data['wa'] ?></td>
                        <td><?php echo $data['email'] ?></td>
                         <td><?php echo $data['fb'] ?></td>
                          <td><?php echo $data['ig'] ?></td>
                            <td><?php echo $data['yt'] ?></td>


                <td><a class="btn btn-primary" href="proses-edit/edit_info.php?id_info=<?php echo $data['id_info'];?>"><i class="fa fa-w fa-edit"></i></a> 

                 </td> 

                    </tr>
                   
                  </tbody>
                </table>
              </div>
            </div></div>
<?php    
                    include 'template/footer.php'; 
                  ?>

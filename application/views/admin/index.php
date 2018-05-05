<div class="container-fluid">
  <div class="row">
      <div class="col-lg-12">
          <h3 class="page-header">Data Admin</h3>
      </div>
  </div>
  <div class="row">
              <?php if ($admin_info->level=='petugas') {
                echo "";
              }
              else 
              {  ?>
              <div style=" margin-bottom:20px">
                <a class="btn btn-info" href=<?=base_url()."admin/create"?>><i class="fa fa-plus"></i> Tambah Data Admin</a>
              </div>
              <?php } ?>

                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Admin</th>
                      <th>Username admin</th>
                      <th>level</th>
                      <?php if ($admin_info->level=='author') 
                        {
                          echo "<th>aksi</th>";
                        }
                        else 
                        {
                          echo '';   
                        } 
                      ?>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php $no = 1; foreach ($all as $admin) { ?>
                      
                      <td><?=$no++?></td>
                      <td><?=$admin->nama_admin?></td>
                      <td><?=$admin->username_admin?></td>
                      <td><?=$admin->level?></td>

                      <?php if ($admin_info->level=='author') { ?>
                        <td>
                          <div class="aksi">

                          <?php if ($admin->id_admin==$admin_info->id_admin) { ?>
                             <a class="btn btn-warning btn-sm" href=<?=base_url()."admin/edit/".$admin->id_admin?>><i class="fa fa-edit"></i> edit</a>  
                          <?php 
                          } 
                          else 
                          { ?>
                            <form method="post" action=<?=base_url()."admin/delete/"?>>
                              <a class="btn btn-warning btn-sm" href=<?=base_url()."admin/edit/".$admin->id_admin?>><i class="fa fa-edit"></i> edit</a>
                              <input type="number" name="id" hidden value=<?=$admin->id_admin?>>
                              <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i> Hapus</button>
                            </form>
                          </div>
                        </td>  
                          <?php }
                        } 
                            else
                            {
                              echo "";
                            } 
                      ?>
                      
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
        </div>
                <!-- /.col-lg-12 -->
    </div>
</div>  


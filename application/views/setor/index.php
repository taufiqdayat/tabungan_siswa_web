<div class="container-fluid">
  <div class="row">
      <div class="col-lg-12">
          <h3 class="page-header">Data setor</h3>
      </div>
  </div>
  <div class="row">
              <div style=" margin-bottom:20px">
                <a class="btn btn-info" href=<?=base_url()."setor/add"?>><i class="fa fa-plus"></i> Setor Tabungan</a>
              </div>

                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIS</th>
                      <th>nominal</th>
                      <th>Tanggal setor</th>
                      <th>aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php $no = 1; foreach ($all as $setor) { ?>
                      
                      <td><?=$no++?></td>
                      <td><?=$setor->nis_siswa?></td>
                      <td><?=$setor->nominal_nabung?></td>
                      <td><?=date("d-m-Y", strtotime($setor->tanggal_nabung))?></td>
                      <td>
                        <form method="post" action=<?=base_url()."setor/delete/"?>>
                          <a class="btn btn-warning btn-sm" href=<?=base_url()."setor/edit/".$setor->id_nabung?>><i class="fa fa-edit"></i> edit</a>
                          <input type="number" name="id_nabung" hidden value=<?=$setor->id_nabung?>>
                          <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Batalkan</button>
                        </form>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
        </div>
                <!-- /.col-lg-12 -->
    </div>
</div>  
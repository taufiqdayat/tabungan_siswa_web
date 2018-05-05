<div class="container-fluid">
  <div class="row">
      <div class="col-lg-12">
          <h3 class="page-header">Data Tarik</h3>
      </div>
  </div>
  <div class="row">
              <div style=" margin-bottom:20px">
                <a class="btn btn-info" href=<?=base_url()."tarik/add"?>><i class="fa fa-plus"></i> Tarik Tabungan</a>
              </div>

                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIS</th>
                      <th>nominal</th>
                      <th>Tanggal tarik</th>
                      <th>aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php $no = 1; foreach ($all as $tarik) { ?>
                      
                      <td><?=$no++?></td>
                      <td><?=$tarik->nis_siswa?></td>
                      <td><?=$tarik->nominal_nabung?></td>
                      <td><?=date("d-m-Y", strtotime($tarik->tanggal_nabung))?></td>
                      <td>
                        <form method="post" action=<?=base_url()."tarik/delete/"?>>
                          <input type="number" name="id_nabung" hidden value=<?=$tarik->id_nabung?>>
                          <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Batalkan Penarikan</button>
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
<div class="container-fluid">
  <div class="row">
      <div class="col-lg-12">
          <h3 class="page-header">Data Siswa</h3>
      </div>
  </div>
  <div class="row">
              <div style=" margin-bottom:20px">
                <a class="btn btn-info" href=<?=base_url()."siswa/create"?>><i class="fa fa-plus"></i> Tambah Data Siswa</a>
              </div>

                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIS</th>
                      <th>Nama Siswa</th>
                      <th>Tanggal Lahir</th>
                      <th>Jenis Kelamin</th>
                      <th>aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php $no = 1; foreach ($semua as $siswa) { ?>
                      
                      <td><?=$no++?></td>
                      <td><?=$siswa->nis_siswa?></td>
                      <td><?=$siswa->nama_siswa?></td>
                      <td><?=date("d-m-Y", strtotime($siswa->tgl_lahir_siswa))?></td>
                      <td><?=$siswa->jk_siswa?></td>
                      <td>
                        <div class="aksi">
                        <form method="post" action=<?=base_url()."siswa/delete/"?>>
                          <a class="btn btn-warning btn-sm" href=<?=base_url()."siswa/edit/".$siswa->id?>><i class="fa fa-edit"></i> edit</a>
                          <input type="number" name="id_siswa" hidden value=<?=$siswa->id?>>
                          <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i> Hapus</button>
                        </form>
                        </div>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
        </div>
                <!-- /.col-lg-12 -->
    </div>
</div>  
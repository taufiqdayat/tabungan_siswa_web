<div class="container-fluid">
  <div class="row">
      <div class="col-lg-12">
          <h3 class="page-header">konfirmasi</h3>
      </div>
  </div>
  <div class="row">
    <div class="panel panel-warning">
      <div class="panel-heading">
        <h3 class="panel-title">Konfirmasi</h3>
      </div>
      <div class="panel-body">
      
      <?php
        if (!empty($edit)) {
          echo 'Apakah Anda akan mengubah setoran uang dengan <br>';
        }
        else
        {
          echo 'Apakah Anda akan menyetorkan uang dengan <br>';
        }
      ?>
         <?php foreach ($diri as $row) {
        } 

        ?>
        <strong>Nominal : <?=$nom?></strong><br>
          pada siswa <br>
        <strong>NIS : <?=$row->nis_siswa?></strong>
        <form method="post" action=<?=base_url()."setor/proses"?>>
        <?php 
            form_hidden('nis', $row->nis_siswa); 
            form_hidden('ket', $ket);
            form_hidden('nominal', $nom);
        ?>
    			<input class="form-control hidden" type="text" value=<?=$row->nis_siswa?> name="nis">
          <input class="form-control hidden" type="text" value=<?=$ket?> name="ket">
    			<input class="form-control hidden" type="number" value=<?=$nom?> name="nominal">
          <a class="btn btn-warning" href=<?=base_url()."setor/add"?>>
            <span class="fa fa-backward"></span> Kembali
          </a>
    			<button type="submit" class="btn btn-success">Lanjut <span class="fa fa-forward"></span></button>
          </form>
    	</div>
    </div>
  </div>
</div>
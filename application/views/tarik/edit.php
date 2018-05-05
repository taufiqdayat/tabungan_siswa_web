<div class="container-fluid">
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Edit Setor</h1>
      </div>
  </div>
  <div class="row">
	<form class="form-horizontal" method="post" action=<?=base_url()."Setor/update/".$nabung->id_nabung?>>
		<div class="form-group">
			<label class="col-lg-2 control-label">NIS Siswa</label>
			<div class="col-lg-8">
				<input type="hidden" name="ket" value="setor">
				<input class="form-control" value=<?=$nabung->nis_siswa?> type="text" name="nis">
				<input type="hidden" name="tambahan" value="ubah">
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-2 control-label">Nominal</label>
			<div class="col-lg-8">
				<input class="form-control" type="number" name="nominal" value=<?=$nabung->nominal_nabung?>>
			</div>
		</div>
		<div class="form-group">
			<div class="col-lg-10 col-lg-offset-2">
				<button type="submit" class="btn btn-success">Ubah</button>
			</div>
		</div>
	</form>
  </div>
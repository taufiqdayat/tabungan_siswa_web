<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12">
	        <h3 class="page-header">Edit Data Siswa</h3>
	    </div>
	</div>
		<form method="post" class="form-horizontal" action=<?=base_url()."siswa/update/".$data_siswa->id?>>
			<div class="form-group">
				<label class="col-lg-2 control-label">NIS</label>
				<div class="col-lg-6">
					<input class="form-control" type="number" name="nis" value=<?=$data_siswa->nis_siswa?>>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-2 control-label">Nama</label>
				<div class="col-lg-6">
					<input class="form-control" type="text" name="nama" value=<?=$data_siswa->nama_siswa?>>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-2 control-label">Tanggal Lahir</label>
				<div class="col-lg-6">
					<input class="form-control" type="text" id="datetimepicker" name="tgl" value=<?= date("d-m-Y", strtotime($data_siswa->tgl_lahir_siswa))?>>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-2 control-label">Jenis Kelamin</label>
				<div class="col-lg-6">
					<select class="form-control" name="jk">
						<option value="L" <?=$data_siswa->jk_siswa=='L' ? 'selected' : '';?>>Laki-laki</option>
						<option value="P" <?=$data_siswa->jk_siswa=='P' ? 'selected' : ''; ?>>Perempuan</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-10 col-lg-offset-2">
					<button type="submit" class="btn btn-success">Edit</button>
				</div>
			</div>
		</form>
</div>

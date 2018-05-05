<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12">
	        <h3 class="page-header">Tambah Data Siswa</h3>
	    </div>
	</div>
        <form method="post" class="form-horizontal" action=<?=base_url()."siswa/store"?>>
			<div class="form-group">
				<label class="col-lg-2 control-label">NIS</label>
				<div class="col-lg-6">
					<input class="form-control" type="number" name="nis">
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-2 control-label">Nama</label>
				<div class="col-lg-6">
					<input class="form-control" type="text" name="nama">
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-2 control-label">Tanggal Lahir</label>
				<div class="col-lg-6">
					<input type='text' name="tgl" class="form-control" id='datetimepicker'>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-2 control-label">Jenis Kelamin</label>
				<div class="col-lg-6">
					<select class="form-control" name="jk">
						<option value="L">Laki-laki</option>
						<option value="P">Perempuan</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-10 col-lg-offset-2">
					<button type="submit" class="btn btn-success">tambah</button>
				</div>
			</div>
		</form>
</div>	

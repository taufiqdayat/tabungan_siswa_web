<form method="post" action=<?=base_url()."buku/lihat"?> class="form-horizontal">
	<div class="form-group">
		<label class="control-label col-lg-3">Nis</label>
		<div class="col-lg-5">
			<input class="form-control" type="number" name="nis">
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-9 col-lg-offset-3">
			<button type="submit" class="btn btn-success">Cari</button>
		</div>
	</div>
</form>
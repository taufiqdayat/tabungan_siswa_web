<div class="container-fluid">
  	<div class="row">
      	<div class="col-lg-12">
          	<h3 class="page-header">Semua Tabungan</h3>
      	</div>
  	</div>
  	<div class="row">
	  	<div class="col-lg-12">
	  		<div class="row">
		  		<div class="col-lg-4">
		  			<div class="alert alert-info">
	                	Total Tabungan = Rp. <?=$jumlah?>,-
	            	</div>
	            </div>
            </div>
	             
			<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr>
						<th>Nominal</th>
						<th>Petugas</th>
						<th>Keterangan</th>
						<th>Tanggal</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($siswa as $row) { 
					if ($row->keterangan=='setor') {
							echo "<tr class='success'>";
						}
						else
						{
							echo "<tr class='warning'>";
						}
						?>
						<td><?=$row->nominal_nabung?></td>
						<td><?=$row->petugas?></td>
						<td><?=$row->keterangan?></td>
						<td><?=$row->tanggal_nabung?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div> 
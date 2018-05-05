<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tarik Tabungan</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Form Tarik Tabungan
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action=<?=base_url()."tarik/proses"?>>
                            <div class="form-group">
                                <label>NIS</label>
                                <input type="hidden" name="ket" value="tarik">
                                <input type="hidden" name="petugas" value=<?=$admin_info->id_admin?>>
                                <input id="fnis" name="nis" type="number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nominal</label>
                                <input id="fnom" name="nominal" type="number" class="form-control">
                            </div>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Konfirmasi data</h4>
                                        </div>
                                        <div class="modal-body">
                                        	apakah anda akan menarik uang dengan nominal :<br>  
                                        	<b>Rp.</b><b id="nom"> </b> <br>
                                        	Pada Siswa dengan nis : <br>
                                        	<b id="nis"></b>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-default">Konfirmasi</button>
                                            
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </form>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="test()">
                        	Tarik
                        </button>
                                                             
                    </div>
                                
                </div>
                            <!-- /.row (nested) -->
            </div>
                        <!-- /.panel-body -->
        </div>
                    <!-- /.panel -->
    </div>
                <!-- /.col-lg-12 -->
</div>
<script>
    function test() {
        document.getElementById('nis').innerHTML = document.getElementById('fnis').value;
        document.getElementById('nom').innerHTML = document.getElementById('fnom').value
    }
</script>	
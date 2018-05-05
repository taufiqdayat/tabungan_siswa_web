<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Ganti Password</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Form Ganti Password
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action=<?=base_url()."admin/updatepass"?>>
                            <div class="form-group">
                                <label>Masukkan Password Baru</label>
                                <input name="passwordnew" type="password" class="form-control">
                            </div>
                            
                            <button onclick="alert('apakah anda yakin ingin mengubah password')" type="submit" class="btn btn-success">Ubah Password</button>
                        </form>
                                                             
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
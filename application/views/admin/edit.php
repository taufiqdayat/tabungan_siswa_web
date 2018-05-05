<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Admin</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Form Edit Admin
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action=<?=base_url()."admin/update/".$data_admin->id_admin?>>
                            <div class="form-group">
                                <label>Nama Admin</label>
                                <input name="nama" type="text" class="form-control" value=<?=$data_admin->nama_admin?>>
                            </div>
                            <div class="form-group">
                                <label>Username Admin</label>
                                <input name="username" type="text" class="form-control" value=<?=$data_admin->username_admin?>>
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <select name="level" class="form-control">
                                    <option <?php if ($data_admin->level=='author') { echo 'selected'; } ?> value="author">Author</option>
                                    <option <?php if ($data_admin->level=='petugas') { echo 'selected'; } ?> value="petugas">Petugas</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Password Admin</label>
                                <input name="password" type="password" class="form-control">
                                <p>*jika tidak ingin mengganti passsword maka kosongi saja kolom password</p>
                            </div>
                            
                            <button type="submit" class="btn btn-success">Edit</button>
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
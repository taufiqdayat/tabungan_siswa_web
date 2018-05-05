<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tambah Admin</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Form Create Admin
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action=<?=base_url()."admin/store"?>>
                            <div class="form-group">
                                <label>Nama Admin</label>
                                <input name="nama" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Username Admin</label>
                                <input name="username" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password Admin</label>
                                <input name="password" type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <select name="level" class="form-control">
                                    <option value="author">Author</option>
                                    <option value="petugas">Petugas</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Tambah Admin</button>
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
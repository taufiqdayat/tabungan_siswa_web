<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tabungan</title>

    <!-- Bootstrap Core CSS -->

    <link href=<?=base_url()."assets/vendor/bootstrap/css/bootstrap.min.css"?> rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href=<?=base_url()."assets/vendor/metisMenu/metisMenu.min.css"?> rel="stylesheet">

    <!-- Custom CSS -->
    

    <!-- Custom Fonts -->
    

    <link href=<?=base_url()."assets/datepick/css/bootstrap-datetimepicker.min.css"?>>

      <!-- DataTables CSS -->
    <link href=<?=base_url()."assets/vendor/datatables-plugins/dataTables.bootstrap.css"?> rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href=<?=base_url()."assets/vendor/datatables-responsive/dataTables.responsive.css"?> rel="stylesheet">

    <link href=<?=base_url()."assets/dist/css/sb-admin-2.css"?> rel="stylesheet">

    <link href=<?=base_url()."assets/vendor/font-awesome/css/font-awesome.min.css"?> rel="stylesheet" type="text/css">

    

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> -->
                <a class="navbar-brand" href=<?=base_url()."buku"?>>Tabungan Sekolah</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href=<?=base_url()."buku/changepin"?>><i class="fa fa-key fa-fw"></i> Ganti PIN</a></li>
                        <li><a href=<?=base_url()."buku/logout"?>><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>  <!-- /.navbar-static-side -->
        </nav>

         

        <!-- Page Content -->
        <div id="page-wrapper" style="margin-left:0px; min-height:610px">
            <?php $this->load->view($subview); ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=<?=base_url()."assets/vendor/jquery/jquery.min.js"?>></script>


    <!-- Bootstrap Core JavaScript -->
    <script src=<?=base_url()."assets/vendor/bootstrap/js/bootstrap.min.js"?>></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=<?=base_url()."assets/vendor/metisMenu/metisMenu.min.js"?>></script>

    <?php if (empty($javasc)) {
        echo '';
        
    }else{ $this->load->view($javasc); } ?>

    <!-- Custom Theme JavaScript -->
    <script src=<?=base_url()."assets/dist/js/sb-admin-2.js"?>></script>



    

</body>

</html>

<?php 
defined("BASEPATH") or exit("Access Denied");
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gemilang | <?php echo $_title ?></title>
    
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>asset/dash/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>asset/dash/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>asset/dash/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- WYSIWYG HTML5-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/plugins/datatables/media/css/jquery.dataTables.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/plugins/datatables/media/css/dataTables.responsive.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php echo $_header; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                     <div class="col-lg-12">
                        <h1 class="page-header">
                            <?php echo $_title; ?>
                            <small><?php echo $sub_title; ?></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <?php 
                                $dat = "";
                                switch ($_title) {
                                    case "New Article" :
                                        $dat = "glyphicon glyphicon-list-alt";
                                        break;
                                    case "List Article" :
                                        $dat = "glyphicon glyphicon-list-alt";
                                        break;
                                    case 'Account Settings':
                                        $dat = "glyphicon glyphicon-user";
                                        break;
                                    case 'Admin List':
                                        $dat = "glyphicon glyphicon-user";
                                        break;    
                                    case 'File Manager':
                                        $dat = "glyphicon glyphicon-cloud";
                                        break;                                    
                                    default:
                                        $dat = "fa fa-file";
                                        break;
                                }
                                if($_title != "Dashboard"){
                             ?>
                            <li class="active">
                                <i class="<?php echo $dat; ?>"></i> <?php echo $_title ?>
                            </li>
                            <?php 
                                }
                             ?>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <?php echo $_content; ?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>asset/dash/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>asset/dash/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>asset/plugins/datatables/media/js/jquery.dataTables.js" ></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/plugins/datatables/media/js/dataTables.responsive.js"></script>
    <script type="text/javascript">
        $("#wysihtml5").wysihtml5();
        $("#datatables").dataTable({
            responsive : true
        });
    </script>

</body>

</html>

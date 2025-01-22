<?php
/* Smarty version 4.0.0, created on 2025-01-22 11:33:06
  from 'C:\xampp\htdocs\Patient-Management-Module\modules\doctors\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6790c96272b722_95249374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48b1f36117d9f16dbe4fd4b60622dde2e3adf561' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Patient-Management-Module\\modules\\doctors\\edit.tpl',
      1 => 1737541967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790c96272b722_95249374 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit doctor</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../libs/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="../../libs/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../libs/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../libs/adminlte/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../libs/adminlte/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../libs/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../libs/adminlte/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../libs/adminlte/plugins/summernote/summernote-bs4.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../libs/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <span class="brand-text font-weight-light">Patient Management</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="index.php?module=dashboard" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/calendar.html" class="nav-link">
                                <i class="nav-icon fas fa-book-medical"></i>
                                <p>
                                    Patients
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?module=doctors&page=list" class="nav-link">
                                <i class="nav-icon fas fa-user-md"></i>
                                <p>
                                    Doctors
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Doctors</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit doctor</h3>
                            </div>
                            <form action="update.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['id'];?>
" />

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="full_name">Full Name</label>
                                        <input type="text" class="form-control" id="full_name" name="full_name"
                                            value="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['full_name'];?>
" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="specialty">Specialty</label>
                                        <input type="text" class="form-control" id="specialty" name="specialty"
                                            value="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['specialty'];?>
" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone"
                                            value="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['phone'];?>
" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['email'];?>
" required>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="hidden" name="doctor_id" value="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['id'];?>
" />
                                    <button type="submit" class="btn btn-primary">Update doctor</button>
                                </div>
                            </form>

                        </div>
                        <!-- /.card -->
                    </div>
            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- Main content -->
    <section class="content">

    </section>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.0
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="libs/adminlte/plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- jQuery UI 1.11.4 -->
    <?php echo '<script'; ?>
 src="libs/adminlte/plugins/jquery-ui/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <?php echo '<script'; ?>
>
        $.widget.bridge('uibutton', $.ui.button)
    <?php echo '</script'; ?>
>
    <!-- Bootstrap 4 -->
    <?php echo '<script'; ?>
 src="../../libs/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <!-- ChartJS -->
    <?php echo '<script'; ?>
 src="../../libs/adminlte/plugins/chart.js/Chart.min.js"><?php echo '</script'; ?>
>
    <!-- Sparkline -->
    <?php echo '<script'; ?>
 src="../../libs/adminlte/plugins/sparklines/sparkline.js"><?php echo '</script'; ?>
>
    <!-- JQVMap -->
    <?php echo '<script'; ?>
 src="../../libs/adminlte/plugins/jqvmap/jquery.vmap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../libs/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"><?php echo '</script'; ?>
>
    <!-- jQuery Knob Chart -->
    <?php echo '<script'; ?>
 src="../../libs/adminlte/plugins/jquery-knob/jquery.knob.min.js"><?php echo '</script'; ?>
>
    <!-- daterangepicker -->
    <?php echo '<script'; ?>
 src="../../libs/adminlte/plugins/moment/moment.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../libs/adminlte/plugins/daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>
    <!-- Tempusdominus Bootstrap 4 -->
    <?php echo '<script'; ?>
 src="../../libs/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"><?php echo '</script'; ?>
>
    <!-- Summernote -->
    <?php echo '<script'; ?>
 src="../../libs/adminlte/plugins/summernote/summernote-bs4.min.js"><?php echo '</script'; ?>
>
    <!-- overlayScrollbars -->
    <?php echo '<script'; ?>
 src="../../libs/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"><?php echo '</script'; ?>
>
    <!-- AdminLTE App -->
    <?php echo '<script'; ?>
 src="../../libs/adminlte/dist/js/adminlte.js"><?php echo '</script'; ?>
>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <?php echo '<script'; ?>
 src="../../libs/adminlte/dist/js/pages/dashboard.js"><?php echo '</script'; ?>
>
    <!-- AdminLTE for demo purposes -->
    <?php echo '<script'; ?>
 src="../../libs/adminlte/dist/js/demo.js"><?php echo '</script'; ?>
>
    <!-- DataTables -->
    <?php echo '<script'; ?>
 src="../../libs/adminlte/plugins/datatables/jquery.dataTables.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../libs/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"><?php echo '</script'; ?>
>

    <!-- page script -->
    <?php echo '<script'; ?>
>
        $(function() {
            $("#example1").DataTable();
            $("#example2").DataTable({
                paging: true,
                lengthChange: false,
                searching: false,
                ordering: true,
                info: true,
                autoWidth: false,
            });
        });
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}

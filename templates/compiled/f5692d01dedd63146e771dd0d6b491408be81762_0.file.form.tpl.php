<?php
/* Smarty version 4.0.0, created on 2025-01-22 14:05:36
  from 'C:\xampp-v-7\htdocs\Patient-Management-Module\modules\patients\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6790ed209cd6a1_00081165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5692d01dedd63146e771dd0d6b491408be81762' => 
    array (
      0 => 'C:\\xampp-v-7\\htdocs\\Patient-Management-Module\\modules\\patients\\form.tpl',
      1 => 1737546871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790ed209cd6a1_00081165 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add patient</title>
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
                            <a href="/Patient-Management-Module/index.php?module=patients&page=list" class="nav-link">
                                <i class="nav-icon fas fa-book-medical"></i>
                                <p>
                                    Patients
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/Patient-Management-Module/index.php?module=doctors&page=list" class="nav-link">
                                <i class="nav-icon fas fa-user-md"></i>
                                <p>Doctors</p>
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
                            <h1 class="m-0 text-dark">Patients</h1>
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
                                <h3 class="card-title">Add patient</h3>
                            </div>
                            <form action="create.php" method="POST">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="full_name">Full Name</label>
                                        <input type="text" class="form-control" id="full_name" name="full_name"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Date</label>
                                        <input type="date" class="form-control" id="date" name="date" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="date_of_birth">Date of Birth</label>
                                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select class="form-control" id="gender" name="gender" required>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="doctor_id">Doctor</label>
                                        <select class="form-control" id="doctor_id" name="doctor_id" required>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doctors']->value, 'doctor');
$_smarty_tpl->tpl_vars['doctor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['doctor']->value) {
$_smarty_tpl->tpl_vars['doctor']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['doctor']->value['full_name'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer">

                                    <button type="submit" class="btn btn-primary">Add Patient</button>
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

<?php
/* Smarty version 4.0.0, created on 2025-01-22 14:05:33
  from 'C:\xampp-v-7\htdocs\Patient-Management-Module\modules\dashboard\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6790ed1d20e940_87331589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77c8ece81d370caa6651612a6401634913599c4c' => 
    array (
      0 => 'C:\\xampp-v-7\\htdocs\\Patient-Management-Module\\modules\\dashboard\\dashboard.tpl',
      1 => 1737551116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790ed1d20e940_87331589 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?php echo $_smarty_tpl->tpl_vars['total_patients']->value;?>
</h3>
                        <p>Total Patients</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-book-medical"></i>
                    </div>
                    <a href="#" class="small-box-footer">List <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?php echo $_smarty_tpl->tpl_vars['total_doctors']->value;?>
</h3>
                        <p>Total Doctors</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <a href="#" class="small-box-footer">List <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- Main row -->
        <div class="row">
            <section class="col">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Full name</th>
                                    <th>date</th>
                                    <th>date of birth</th>
                                    <th>gender</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Doctor</th>
                                    <th>Created at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                            <tfoot>
                                <tr>
                                    <th>Full name</th>
                                    <th>date</th>
                                    <th>date of birth</th>
                                    <th>gender</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Doctor</th>
                                    <th>Created at</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </section>
            <div class="modal fade" id="patientDetailsModal" tabindex="-1" role="dialog"
                aria-labelledby="patientDetailsModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="patientDetailsModalLabel">Patient Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Full Name:</strong> <span id="patient_full_name"></span></p>
                            <p><strong>Phone:</strong> <span id="patient_phone"></span></p>
                            <p><strong>Email:</strong> <span id="patient_email"></span></p>
                            <p><strong>Date of Birth:</strong> <span id="patient_date_of_birth"></span></p>
                            <p><strong>Gender:</strong> <span id="patient_gender"></span></p>
                            <p><strong>Doctor:</strong> <span id="patient_doctor"></span></p>
                            <p><strong>Created At:</strong> <span id="patient_created_at"></span></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><?php }
}

<?php
/* Smarty version 4.0.0, created on 2025-01-22 13:38:07
  from 'C:\xampp\htdocs\Patient-Management-Module\modules\doctors\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6790e6af8d7772_15099809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f326709cf36f73d67f5517a75c17451cdfecc79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Patient-Management-Module\\modules\\doctors\\list.tpl',
      1 => 1737543121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790e6af8d7772_15099809 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Doctors</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="row">
    <section class="col">
        <div class="card">
            <div class="card-header">
                <div class="col-sm-2">
                    <button type="button" class="btn btn-block btn-success"
                        onclick="window.location.href='modules/doctors/create.php';">
                        Add doctor
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Full name</th>
                            <th>Specialty</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                    <tfoot>
                        <tr>
                            <th>Full name</th>
                            <th>Specialty</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </section>
    <div class="modal fade" id="doctorDetailsModal" tabindex="-1" role="dialog"
        aria-labelledby="doctorDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="doctorDetailsModalLabel">Doctor Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Full Name:</strong> <span id="doctor_full_name"></span></p>
                    <p><strong>Specialty:</strong> <span id="doctor_specialty"></span></p>
                    <p><strong>Phone:</strong> <span id="doctor_phone"></span></p>
                    <p><strong>Email:</strong> <span id="doctor_email"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    var table;

    $(document).ready(function() {
        table = $('#example1').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "/Patient-Management-Module/modules/doctors/fetch_doctors.php",
                "type": "GET"
            },
            "columns": [
                { "data": "full_name" },
                { "data": "specialty" },
                { "data": "phone" },
                { "data": "email" },
                { "data": "created_at" },
                {
                    "data": "id",
                    "render": function(data, type, row) {
                        return "<button class='btn btn-warning edit-btn' onclick=\"window.location.href='modules/doctors/edit.php?id=" +
                            data +
                            "'\">Edit</button> <button class='btn btn-danger delete-btn' onclick='deleteDoctor(" +
                            data +
                            ")'>Delete</button> <button class='btn btn-info info-btn' onclick='viewDetails(" +
                            data +
                            ")'>Details</button>";
                    }

                }
            ]

        });
    });

    window.deleteDoctor = function(doctor_id) {
        if (confirm("Are you sure you want to delete this doctor?")) {
            $.ajax({
                url: '/Patient-Management-Module/modules/doctors/delete.php',
                type: 'POST',
                data: { id: doctor_id },
                success: function(response) {
                    if (response === "success") {

                        table.ajax.reload();
                        alert("Doctor deleted successfully!");
                    } else {
                        alert("Failed to delete doctor.");
                    }
                },
                error: function() {
                    alert("An error occurred. Please try again.");
                }
            });
        }
    };

    window.viewDetails = function(doctor_id) {

        $.ajax({
            url: '/Patient-Management-Module/modules/doctors/details.php', 
            type: 'GET',
            data: { id: doctor_id },
            success: function(response) {
                var doctor = JSON.parse(
                    response); 

                $('#doctor_full_name').text(doctor.full_name);
                $('#doctor_specialty').text(doctor.specialty);
                $('#doctor_phone').text(doctor.phone);
                $('#doctor_email').text(doctor.email);

                $('#doctorDetailsModal').modal('show');
            },
            error: function() {
                alert("Failed to fetch doctor details.");
            }
        });
    };
<?php echo '</script'; ?>
><?php }
}

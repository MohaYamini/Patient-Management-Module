<?php
/* Smarty version 4.0.0, created on 2025-01-22 14:05:35
  from 'C:\xampp-v-7\htdocs\Patient-Management-Module\modules\patients\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6790ed1fbe6a78_55482068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cb060c49d5f53dcbde49570e707623e0fd778ba' => 
    array (
      0 => 'C:\\xampp-v-7\\htdocs\\Patient-Management-Module\\modules\\patients\\list.tpl',
      1 => 1737546656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6790ed1fbe6a78_55482068 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Patients</h1>
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
                        onclick="window.location.href='modules/patients/create.php';">
                        Add patient
                    </button>
                </div>
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
                "url": "/Patient-Management-Module/modules/patients/fetch_patients.php", // Update to the correct path for the PHP script
                "type": "GET"
            },
            "columns": [
                { "data": "full_name" },
                { "data": "date" },
                { "data": "date_of_birth" },
                { "data": "gender" },
                { "data": "phone" },
                { "data": "email" },
                { "data": "doctor" }, // Show doctor name from the function
                { "data": "created_at" },
                {
                    "data": "id", // Use the id for actions
                    "render": function(data, type, row) {
                        return "<button class='btn btn-warning edit-btn' onclick=\"window.location.href='modules/patients/edit.php?id=" +
                            data +
                            "'\">Edit</button> <button class='btn btn-danger delete-btn' onclick='deletePatient(" +
                            data +
                            ")'>Delete</button> <button class='btn btn-info info-btn' onclick='viewDetails(" +
                            data +
                            ")'>Details</button>";
                    }
                }
            ]
        });
    });

    // Function to handle deletion
    window.deletePatient = function(patient_id) {
        if (confirm("Are you sure you want to delete this patient?")) {
            $.ajax({
                url: '/Patient-Management-Module/modules/patients/delete.php',
                type: 'POST',
                data: { id: patient_id },
                success: function(response) {
                    if (response === "success") {
                        table.ajax.reload(); // Reload the table
                        alert("Patient deleted successfully!");
                    } else {
                        alert("Failed to delete patient.");
                    }
                },
                error: function() {
                    alert("An error occurred. Please try again.");
                }
            });
        }
    };

    window.viewDetails = function(patient_id) {
    $.ajax({
        url: '/Patient-Management-Module/modules/patients/details.php', // Correct endpoint
        type: 'GET',
        data: { id: patient_id },
        success: function(response) {
            console.log(response); // Log the response to see what you get

            try {
                var patient = JSON.parse(response); // Attempt to parse the response
                // Check if there's an error in the response
                if (patient.error) {
                    alert(patient.error); // Display the error message (e.g., "Patient not found")
                } else {
                    // Populate the modal with patient details
                    $('#patient_full_name').text(patient.full_name);
                    $('#patient_phone').text(patient.phone);
                    $('#patient_email').text(patient.email);
                    $('#patient_date_of_birth').text(patient.date_of_birth);
                    $('#patient_gender').text(patient.gender);
                    $('#patient_doctor').text(patient.doctor_name); // Correctly use doctor_name from the response
                    $('#patient_created_at').text(patient.created_at);

                    // Show the modal
                    $('#patientDetailsModal').modal('show');
                }
            } catch (e) {
                alert('Error parsing JSON: ' + e.message);
            }
        },
        error: function() {
            alert("Failed to fetch patient details.");
        }
    });
};

<?php echo '</script'; ?>
><?php }
}

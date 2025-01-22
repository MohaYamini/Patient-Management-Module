<?php
// Include your database connection
require_once __DIR__ . '/../../includes/db.php'; 

if (!$db instanceof PDO) {
    die("Database connection is not set up correctly.");
}

// Get the search term, pagination, and sorting data
$search = isset($_GET['search']['value']) ? $_GET['search']['value'] : '';
$order_column = isset($_GET['order'][0]['column']) ? $_GET['order'][0]['column'] : 0;
$order_dir = isset($_GET['order'][0]['dir']) ? $_GET['order'][0]['dir'] : 'asc';
$start = isset($_GET['start']) ? $_GET['start'] : 0;
$length = isset($_GET['length']) ? $_GET['length'] : 10;

// Define the columns for ordering
$columns = ['full_name', 'date', 'date_of_birth', 'gender', 'phone', 'email', 'created_at'];
$order_by = $columns[$order_column]; // Column name from the table

// Define the query to get patients with search and pagination
$query = "SELECT * FROM patients WHERE full_name LIKE :search ORDER BY $order_by $order_dir LIMIT :start, :length";

// Prepare the statement
$stmt = $db->prepare($query);

// Bind parameters
$stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
$stmt->bindValue(':start', (int)$start, PDO::PARAM_INT);
$stmt->bindValue(':length', (int)$length, PDO::PARAM_INT);

// Execute the query
$stmt->execute();

// Count the total number of records
$total_records_stmt = $db->query("SELECT COUNT(*) FROM patients");
$total_records = $total_records_stmt->fetchColumn(); // Use fetchColumn() for a single value

// Fetch the data
$data = [];
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $data[] = [
        'id' => $row['id'],
        'full_name' => $row['full_name'],
        'date' => $row['date'],
        'date_of_birth' => $row['date_of_birth'],
        'gender' => $row['gender'],
        'phone' => $row['phone'],
        'email' => $row['email'],
        'doctor' => getDoctorName($row['doctor_id'], $db), // A function to get the doctor's name
        'created_at' => $row['created_at']
    ];
}

// Send the response to DataTables
$response = [
    'draw' => isset($_GET['draw']) ? $_GET['draw'] : 0,
    'recordsTotal' => $total_records,
    'recordsFiltered' => $total_records,
    'data' => $data
];

header('Content-Type: application/json');
echo json_encode($response);

// Function to get doctor name based on doctor_id
function getDoctorName($doctor_id, $db)
{
    $doctor_query = "SELECT full_name FROM doctor WHERE id = :doctor_id";
    $doctor_stmt = $db->prepare($doctor_query);
    $doctor_stmt->bindValue(':doctor_id', (int)$doctor_id, PDO::PARAM_INT);
    $doctor_stmt->execute();
    $doctor_row = $doctor_stmt->fetch(PDO::FETCH_ASSOC);
    return $doctor_row ? $doctor_row['full_name'] : 'Unknown';
}
?>

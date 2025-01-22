<?php
// Include the Smarty class
require_once __DIR__ . '/vendor/autoload.php';

// Initialize the Smarty object
$smarty = new Smarty();

// Include the database connection
require_once __DIR__ . '/includes/db.php';

// Include the DoctorController and other necessary files
require_once 'modules/doctors/DoctorController.php';

try {
    // Get the 'module' and 'page' parameters from the URL
    $module = $_GET['module'] ?? 'dashboard'; // Default module
    $page = $_GET['page'] ?? 'index';         // Default page

    // Determine the content template
    if ($module === 'dashboard') {
        $contentTemplate = 'modules/dashboard/dashboard.tpl';
    } else {
        $contentTemplate = "modules/{$module}/{$page}.tpl";
    }

    // Check if the file exists
    if (file_exists($contentTemplate)) {
        $smarty->assign('content_template', $contentTemplate);
    }

    // Set the page title
    $smarty->assign('title', ucfirst($module));

    // Display the main layout with dynamic content
    $smarty->display('libs/adminlte/index.tpl');

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

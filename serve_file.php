<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];
    // Check if the file exists
    if (file_exists($file)) {
        // Set headers to prompt for download or open in new tab
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: inline; filename="' . basename($file) . '"');
        header('Cache-Control: max-age=0');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // Always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0

        // Output the file content
        readfile($file);
        header("Location: admin.php");
    } else {
        echo "File not found.";
    }
} else {
    echo "No file specified.";
}

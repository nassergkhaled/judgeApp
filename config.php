<?php
$DB_SERVER = "mysql_container";  // MySQL container name in the Docker network
$DB_USERNAME = "root";           // MySQL username (default is root)
$DB_PASSWORD = "root";           // MySQL password (set during container creation)
$DB_DATABASE = "my_database";    // MySQL database name

// Create connection
$db = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} else {
    echo "Connected successfully";  // This should confirm the database connectivity
}
?>

<?php
/**
 * Returns the list of cars.
 */
require 'connect.php';
$id = file_get_contents("php://input");

    
$userInfo = [];
$sql = "DELETE FROM users where id=$id";


if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}


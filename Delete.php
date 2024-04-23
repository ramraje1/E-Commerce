<?php
// Database connection
$Connect = mysqli_connect('localhost', 'root', '', 'e_user');

// Get the user ID to delete
$id = $_GET['id'];
echo "ID: " . $id; // Debugging statement

// Query to delete the user record
$Query = "DELETE FROM user WHERE id = $id";
echo "Query: " . $Query; // Debugging statement
$Result = mysqli_query($Connect, $Query);

if ($Result) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . mysqli_error($Connect);
}
?>

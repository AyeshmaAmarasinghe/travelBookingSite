

<?php
include('php/config.php');
session_start(); // Start the session
$user_id = $_SESSION['id']; // Assuming you store user ID in a session variable

// Perform the delete operation
$sql = "DELETE FROM users WHERE Id = $user_id";

if ($con->query($sql) === TRUE) {
    echo "<div class='message'><p >Account Deleted Successfully!</p></div> <br>";
    echo "<a href='register.php' <button class='btn1'>Register Again</button></a>";
} else {
    echo "Error deleting account: " . $con->error;
    header("Location:index.php");
}

$con->close();
?>
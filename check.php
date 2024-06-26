<?php
include('db.php');


// Get form data
$email = $_POST['email'];

// Check if email is registered
$sql = "SELECT * FROM attendees WHERE con_email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location: email_registered.html");
} else {
    echo "Email not registered";
    header("Location: con_register.html");
}

$conn->close();
?>
<?php
include('db.php');

// Get form data
$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$email = $_POST['email'];
$dob = $_POST['dob'];

// Check for duplicate email
$sql= "SELECT * FROM attendees WHERE con_email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location: email_registered.html");
} else {
    // Insert data into database
    $sql = "INSERT INTO attendees (con_fname, con_lname, con_email, con_dbirth)
    VALUES ('$fname', '$lname', '$email', '$dob')";

    if ($conn->query($sql) === TRUE) {
        header("Location: success.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
// ?>
<?php

session_start();

$conn= mysqli_connect(
    'localhost',
    'root',
    'root',
    'conference',
    8889

) or die(mysqli_error($mysqli));

?>
<?php

// connect to db
$conn = mysqli_connect("localhost", "ahmed", "test123", "pizza");

// check connection

if (!$conn) {
    echo "Connection error: " . mysqli_connect_error();
}

?>
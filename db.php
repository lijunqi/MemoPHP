<?php

$conn = mysqli_connect('localhost', 'root', '', 'loginapp');
if ($conn) {
    echo "We're connected.";
} else {
    die("Database connection failed");
}

?>
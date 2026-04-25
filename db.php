<?php
$conn = mysqli_connect("localhost", "root", "", "car_rental");
if (!$conn) {
    die("Database connection failed");
}
session_start();
?>

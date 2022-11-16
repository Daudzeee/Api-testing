<?php
$conn = mysqli_connect('localhost', 'root', '', 'user_records');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

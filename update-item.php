<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');

//DATABASE_CONNECTION
include 'connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$category = $_POST['category'];

//SQL_QUERY_FOR_UPDATE_RECORD
$sql = "UPDATE items SET name = '$name', price = '$price', quantity = '$quantity',category='$category' where id = '$id'";

if (mysqli_query($conn, $sql)) {
    echo json_encode(['msg' => 'Data Updated Successfully!']);
} else {
    echo json_encode(['msg' => 'Error Updating data']);
}
?>
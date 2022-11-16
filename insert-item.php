<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');

//DATABASE_CONNECTION
include 'connection.php';

//$data = json_decode(file_get_contents("php://input"));
$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$category = $_POST['category'];

//SQL_QUERY_FOR_INSERT_RECORD
 $sql = "INSERT INTO items (name,price,quantity,category) VALUES ('$name', $price,'$quantity','$category')";

if (mysqli_query($conn, $sql)) {
    echo json_encode(['msg' => 'Data Inserted Successfully!', 'status' => true,]);
} else {
    echo json_encode(['msg' => 'Data Failed to be Inserted!', 'status' => false]);
}
?>
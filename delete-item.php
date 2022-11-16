<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');

//DATABASE_CONNECTION
include 'connection.php';
$id = $_POST['id'];

//SQL_QUERY_DELETE_RECORD
$sql = "Delete FROM items WHERE id = $id ";

if (mysqli_query($conn, $sql)) {
    echo json_encode(['msg' => 'Deleted Successfully']);
} else {
    echo json_encode(['msg' => 'Data Not Deleted']);
}

?>
<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

//DATABASE_CONNECTION
include 'connection.php';

//IF GIVEN ID IT WILL GET RECORD AGAINST->ID
if (isset($_GET['id'])) {
    $itemId = $_GET['id'];

//SQL_QUERY_FOR_GET_RECORD_OF_GIVEN-ID
    $sql = "select * from items where id = '$itemId'";
    $result=mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_all($result);
        echo json_encode($data);
    } else {
        echo json_encode(['msg' => 'Data Not Found']);
    }

//IF NOT GIVEN ID IT WILL RETURN ALL RECORDS
}else {

//SQL_QUERY_FOR_GET_RECORD_OF_GIVEN-ID
    $sql2 = "select * from items";
    $result2 = mysqli_query($conn,$sql2);
    if ($result2) {
            $data2 = mysqli_fetch_all($result2,MYSQLI_ASSOC);

   echo json_encode($data2);
} else {
        echo json_encode(['msg' => 'Data Not Found']);
    }
}
?>
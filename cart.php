<?php

$conn = new mysqli('localhost', 'root', '', 'android_api');
$stmt = "SELECT * FROM save";
$result=mysqli_query($conn,$stmt);
$response = array();

while($row = mysqli_fetch_assoc($result)) {
    # code...
    $response[] = $row;
    
}

echo json_encode($response);

?>
<?php
//host
$host = "localhost";
//user name
$username = "root";
//database password
$pwd = "";
//database name.
$db = "android_api";

$con=mysqli_connect($host,$username,$pwd,$db) or die("Unable to Connect");

if(mysqli_connect_error($con))
{
	echo "Failed to connect";
}

$result=mysqli_query($con,"SELECT * FROM link");
$response = array();

while($row = mysqli_fetch_assoc($result)) {
    # code...
    $response[] = $row;
    
}

echo json_encode($response);
?>




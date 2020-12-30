<?php

require_once 'include/DB_Functions.php';
$db1 = new DB_Functions();

//host
$host = "localhost";
//user name
$username = "root";
//database password
$pwd = "";
//database name.
$db = "android_api";

$conn=mysqli_connect($host,$username,$pwd,$db) or die("Unable to Connect");

$userID = $_POST['userID'];
$shopName = $_POST['shopName'];
$productName = $_POST['productName'];
$price = $_POST['price'];
$offers = $_POST['offers'];

if ($db1->isProductExisted($price)) {
    $Sql_Query = "DELETE FROM save where price='$price'";
    if(mysqli_query($conn,$Sql_Query)){
        echo 'Data Deleted Successfully';
    }
    else{
        echo 'Try Again';
    }
}
else{
    $Sql_Query = "INSERT INTO save (userID,shopName,productName,price,offers) values ('$userID','$shopName','$productName','$price','$offers')";
    if(mysqli_query($conn,$Sql_Query)){
        echo 'Data Saved Successfully';
    }
    else{
        echo 'Try Again';
    }
    
}
mysqli_close($conn);

?>
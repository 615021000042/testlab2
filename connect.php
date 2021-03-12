<?php

$host = "localhost" ;
$username = "testlab2";
$password = "1234";
$db = "mmovie";

$conn = mysqli_connect($host,$username,$password,$db);

if($conn->connect_error){
    die("connection faied:" .$$conn->connect_error);
}
echo "Database Connected Successfully";

?>
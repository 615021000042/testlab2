<?php
include("connect.php");

$sql = "CREATE DATABASE mmovie";

if($conn->query($sql)=== TRUE){
    echo"db created success";
}else{
    echo "error" . $conn->error;
}
$conn->close();
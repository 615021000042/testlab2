<?php
include("connect.php");

$sql = "INSERT INTO tbmovie(mvid,mvname,mvtime,username,pin)
VALUES ('001','Titan1','2012-02-02','aa','1111');";

$sql .= "INSERT INTO tbmovie(mvid,mvname,mvtime,username,pin)
VALUES ('002','Titan2','2013-03-03','bb','2222');";

$sql .= "INSERT INTO tbmovie(mvid,mvname,mvtime,username,pin)
VALUES ('003','Titan3','2014-04-04','cc','3333');";

if($conn->multi_query($sql)===TRUE){
    echo "insert success";
}else{
    echo"error" .$sql .$conn->error;
}

$conn ->close();
?>

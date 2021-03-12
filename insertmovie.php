<html>
<head>
    <title>เพิ่มข้อมูลภาพยนต์</title>
</head>
<body>

<h1>เพิ่มรายการภาพยนต์</h1>

<form action = "insertmovie.php" method ="post">
    <h2>รหัสภาพยนต์
         <input type ="text" name="mvid" placeholder = "รหัสภาพยนต์"required> </h2>
    <h2>ชื่อภาพยนต์
        <input type ="text" name="mvname" placeholder = "ชื่อภาพยนต์"required> </h2>
    <h2>วัน-เวลาฉาย
        <input type ="datetime" name="mvtime" placeholder = "วัน-เวลาฉาย"required> </h2>
    
        <br>
    <button type="submit" name="save">บันทึก</button>
    <button type="reset" name="cancel">ยกเลิก</button>


<?php include("connect.php"); 

if(isset($_POST['save'])){
$sql = "INSERT INTO tbmovie (mvid, mvname, mvtime)
VALUES ('".$_POST['mvid']."', '".$_POST['mvname']."', '".$_POST['mvtime']."')";


if($conn->query($sql) === TRUE){
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย'); </script>";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();

?>
</form>

<a href = "index.php"><button type ="submit" name ="home">หน้าหลัก</button></a>

</body>
</html>
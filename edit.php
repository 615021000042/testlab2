<html>
<head>
    <title>EDIT</title>
        <form action = "edit.php" method ="post">
            <?php include("connect.php");
                $sql = "SELECT * FROM tbmovie WHERE mvid = '$_REQUEST[edit_id]'";
                $query = mysqli_query($conn,$sql);
                $save = mysqli_fetch_array($query);
                ?>
                    <h2>รหัสภาพยนต์<input name="mvid" type="text" value="<?php echo $_REQUEST['edit_id']; ?>" readonly></h2>
                    <h2>ชื่อภาพยนต์<input name= "mvname" type="text" value="<?php echo $save['mvname']; ?>" required></h2>
                    <h2>วัน-เวลาฉาย<input name= "mvtime" type="datetime" value="<?php echo $save['mvtime']; ?>" required></h2>
                    <h2>ชื่อ<input name= "username" type="text" value="<?php echo $save['username']; ?>" readonly></h2>
                    <h2>รหัส<input name= "pin" type="int" value="<?php echo $save['pin']; ?>" readonly></h2>

                    <button type = "submit" name ="edit">update</button>

                </form>
<?php

if(isset($_POST['edit'])){
include("connect.php");

$sql = "UPDATE tbmovie
        SET mvid = '".$_POST['mvid']."',
        mvname = '".$_POST['mvname']."',
        mvtime = '".$_POST['mvtime']."',
        username = '".$_POST['username']."',
        pin = '".$_POST['pin']."'
        WHERE mvid = '".$_POST['mvid']."'";
if($conn->query($sql) === TRUE){
    echo"<script>alert('แก้ไขข้อมูลเรียบร้อย'); window.location='index.php';</script>";
}else{
    echo"error". $sql . "<br>" . $conn->error;
}
$conn->close();
}?>

</form>
</body>
</html>
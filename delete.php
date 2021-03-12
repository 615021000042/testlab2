<?php include("connect.php");
  if(isset($_GET['delete'])){

        $delete = $_GET['delete'];
        $sql = "DELETE FROM tbmovie WHERE mvid = '".$delete."'";
        $run = $conn->query($sql);

        if(mysqli_query($conn,$sql)){
            echo"<script>alert('ลบเรียบร้อย'); window.location = 'index.php';</script>"; 
        }
        $conn->close();
  }
  ?>
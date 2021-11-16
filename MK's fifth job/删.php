<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "homework";
$conn = new mysqli($servername, $username, $password,$dbname);

$sql = "DELETE FROM text WHERE Number = 2";
$res=mysqli_query($conn,$sql);
if($res>0){
    echo "删除成功";
}

$conn->close();

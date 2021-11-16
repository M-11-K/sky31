<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "homework";
$conn = new mysqli($servername, $username, $password,$dbname);

$sql = "UPDATE text SET Username ='XXX',Gender='aa' WHERE Number = 2 ";
$res=mysqli_query($conn,$sql);
if($res>0){
    echo "修改成功";
}

$conn->close();

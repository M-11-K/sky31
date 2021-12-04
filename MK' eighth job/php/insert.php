<?php

$servername ="localhost";
$username ="root";
$password ="root";
$database="homework";
$conn =new mysqli($servername,$username,$password,$database);
if ($conn->connect_error){
    die("连接失败；".$conn->connect_error);
}
function insert(){
    global $conn;
$username=$_POST['username'];
$sex=$_POST['sex'];
$phone_number=$_POST['phone_number'];
$qq=$_POST['qq'];
$college=$_POST['college'];
$profession=$_POST['profession'];
$stmt=$conn->prepare("INSERT INTO user(username,sex,phone_number,qq,college,profession) VALUES (?,?,?,?,?,?)" );
$stmt->bind_param("ssiiss",$username,$sex,$phone_number,$qq,$college,$profession);
$stmt->execute();
$conn->close();
return mysqli_stmt_affected_rows($stmt);
}

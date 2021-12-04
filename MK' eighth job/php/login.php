<?php
function login(){
$servername ="localhost";
$username ="root";
$password ="root";
$database="homework";
$conn =new mysqli($servername,$username,$password,$database);
if ($conn->connect_error){
    die("连接失败；".$conn->connect_error);
}
$username=$_POST('username');
$password=$_POST('password');
$stmt=$conn->prepare("select * from user_login where username =? and password=?");
$stmt->bind_param("ss",$username,$password);
$stmt->execute();
$user_query =$stmt->get_result();
$row=mysqli_num_rows($user_query);
$conn->close();
if($row==1){
        return 0;
    }
else{
        return 1;
    }
}
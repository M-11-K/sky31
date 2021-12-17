<?php
header("Content-Type:text/html;charset:utf-8");
$conn=mysqli_connect('localhost','root','root','homework');
if($conn->connect_error){
    die("连接失败：".$conn->connect_error);
}
mysqli_query($conn,'set names utf-8');
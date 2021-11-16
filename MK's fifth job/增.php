<?php
$servername ="localhost";
$username ="root";
$password ="root";
$database="homework";
$conn =new mysqli($servername,$username,$password,$database);
if ($conn->connect_error){
    die("连接失败；".$conn->connect_error);
}
$sql= "insert into text(Number,Username,Gender,Age)
    values('2','XX','female','18')";
if($conn->query($sql)===true){
    echo "新增成功";
}else{
    echo "Error：".$sql."<br>".$conn->connect_error;
}
$conn->close();
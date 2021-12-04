<?php
function change(){
    $servername="localhost";
    $username="root";
    $password="root";
    $database="homework";
    $conn=new mysqli($servername,$username,$password,$database);
    if($conn->connect_error){
        die("连接失败".$conn->connect_error);
    }
    $id=1;
    $new_username=2;
    $stmt=$conn->prepare("UPDATE user SET username =? WHERE id =? " );
    $stmt->bind_param("si",$new_username,$id);
    $stmt->execute();
    $conn->close();
    return mysqli_stmt_affected_rows($stmt);
}
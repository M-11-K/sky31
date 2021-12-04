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
    $ID=$_POST['ID'];
    $Comment=$_POST['Comment'];
    $stmt=$conn->prepare("UPDATE message_board SET Comment =? WHERE ID =? " );
    $stmt->bind_param("si",$Comment,$ID);
    $stmt->execute();
    $conn->close();
    return mysqli_stmt_affected_rows($stmt);
}
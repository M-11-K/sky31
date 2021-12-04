<?php
function delete(){
    $servername="localhost";
    $username="root";
    $password="root";
    $database="homework";
    $conn=new mysqli($servername,$username,$password,$database);
    if($conn->connect_error){
        die("连接失败".$conn->connect_error);
    }
    $ID=$_POST['ID'];
    $stmt=$conn->prepare("DELETE FROM message_board WHERE ID =?" );
    $stmt->bind_param("s",$ID );
    $stmt->execute();
    $conn->close();
    return mysqli_stmt_affected_rows($stmt);

}
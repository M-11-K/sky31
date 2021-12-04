<?php

function add(){
    $servername="localhost";
    $username="root";
    $password="root";
    $database="homework";
    $conn=new mysqli($servername,$username,$password,$database);
    if($conn->connect_error){
        die("连接失败".$conn->connect_error);
    }
    $Number="select count(*) from message_board";
    $Number++;
    $ID=$_POST['ID'];
    $Comment=$_POST['Comment'];
   $stmt=$conn->prepare("INSERT INTO message_board(Number,ID, Comment) VALUES (?,?,?)" );
   $stmt->bind_param("iss",$Number,$ID,$Comment);
   $stmt->execute();
    $conn->close();
    return mysqli_stmt_affected_rows($stmt);
}

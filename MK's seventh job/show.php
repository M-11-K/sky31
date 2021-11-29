<?php
$servername="localhost";
$username="root";
$password="root";
$database="homework";
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die("连接失败".$conn->connect_error);
}
$sql = "SELECT ID, Comment FROM message_board";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID &nbsp " . $row["ID"]. " : " . $row["Comment"].  "<br>";
    }
} else {
    echo "还没有留言啊┭┮﹏┭┮";
}
$conn->close();
<?php
function register(){
    $servername ="localhost";
    $username ="root";
    $password ="root";
    $database="homework";
    $conn =new mysqli($servername,$username,$password,$database);
    if ($conn->connect_error){
        die("连接失败；".$conn->connect_error);
    }
    $username=$_POST['username'];
    $password=$_POST['password'];
    $stmt=$conn->prepare("select * from user_login where username=?");
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $user_query =$stmt->get_result();
    $row=mysqli_num_rows($user_query);
    if($row==1){
        $conn->close();
        return 2;
    }
    else {
        $stmt1 = $conn->prepare("insert into user_login(username, password) values (?,?)");
        $stmt1->bind_param("ss", $username, $password);
        $stmt1->execute();
        $conn->close();
       return mysqli_stmt_affected_rows($stmt);
    }
}

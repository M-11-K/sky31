<?php
$servername="localhost";
$username="root";
$password="root";
$database="homework";
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die("连接失败".$conn->connect_error);
}
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$stmt=$conn->prepare("select * from login where Username = '$Username' and Password =('$Password')");
$user_query = mysqli_query($conn,$stmt) or die('mysql query error');
$rows=mysqli_num_rows($user_query);
if ($rows == 1){
    session_start();
    $_SESSION['Username'] = $Username;
    echo $Username, ' 欢迎你！进入 <a href="../html/留言板.html">留言板</a><br />';
    exit;
} else {
    echo '用户名密码错误
<br>
请<a href="../html/login.html">重新登录！</a>';
}

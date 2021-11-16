<?php
$servername ="localhost";
$username ="root";
$password ="root";
$database="homework";
$conn =new mysqli($servername,$username,$password,$database);
if ($conn->connect_error){
    die("连接失败；".$conn->connect_error);
}
$sql = "CREATE TABLE text( ".
    "Number INT NOT NULL AUTO_INCREMENT,".
    "Username VARCHAR(100) NOT NULL,".
    "Gender VARCHAR(100) NOT NULL, ".
    "Age VARCHAR(40) NOT NULL, ".
    "PRIMARY KEY (Number ))ENGINE=InnoDB DEFAULT CHARSET=utf8; ";
mysqli_select_db( $conn, 'homework' );
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
    die('数据表创建失败: ' . mysqli_error($conn));
}
echo "数据表创建成功\n";
mysqli_close($conn);


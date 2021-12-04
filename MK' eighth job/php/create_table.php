<?php
$servername ="localhost";
$username ="root";
$password ="root";
$database="homework";
$conn =new mysqli($servername,$username,$password,$database);
if ($conn->connect_error){
    die("连接失败；".$conn->connect_error);
}
$sql = "CREATE TABLE user( ".
    "id INT NOT NULL AUTO_INCREMENT,".
    "username VARCHAR(100) NOT NULL,".
    "sex VARCHAR(10) NOT NULL, ".
    "phone_number INT NOT NULL, ".
    "qq INT NOT NULL, ".
    "college VARCHAR(20) NOT NULL, ".
    "profession VARCHAR(20) NOT NULL, ".
    "PRIMARY KEY (id ))ENGINE=InnoDB DEFAULT CHARSET=utf8; ";
mysqli_select_db( $conn, 'homework' );
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
    die('数据表创建失败: ' . mysqli_error($conn));
}
echo "数据表创建成功\n";
mysqli_close($conn);


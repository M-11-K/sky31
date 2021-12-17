<?php
require './recruit/php/insert_server.php';
$stu_num=$_POST['stu_num'];
$stu_name=$_POST['stu_name'];
$qq=$_POST['qq'];
$phone_num=$_POST['phone_num'];
$remarks=$_POST['remarks'];
$image_name=$_FILES['image']['tmp_name'];
$image=addslashes(file_get_contents($image_name));
$insert=new insert_server();
$result=$insert->insert($stu_num,$stu_name,$qq,$phone_num,$remarks,$image);
echo $result;

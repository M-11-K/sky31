<?php
require '../php/change_server.php';
$new_stu_num=$_POST['stu_num'];
$new_stu_name=$_POST['stu_name'];
$new_qq=$_POST['qq'];
$new_phone_num=$_POST['phone_num'];
$new_remarks=$_POST['remarks'];
$new_image_name=$_FILES['image']['tmp_name'];
$new_image=addslashes(file_get_contents($new_image_name));
$change=new change_server1();
$result=$change->change($new_stu_num,$new_stu_name,$new_qq,$new_phone_num,$new_remarks,$new_image);
echo $result;
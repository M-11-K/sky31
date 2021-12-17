<?php
require '../php/change_server.php';
$new_stu_num=$_POST['stu_num'];
$new_stu_name=$_POST['stu_name'];
$change=new change_server();
$result=$change->change($new_stu_num,$new_stu_name);
echo $result;
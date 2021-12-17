<?php
require '../php/show_server1.php';
$show=new show_server1();
echo $result=$show->show();
echo $image=$show->show_image();

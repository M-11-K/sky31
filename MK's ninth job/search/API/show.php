<?php
require '../php/show_server.php';
$show=new show_server();
$result=$show->show();
echo $result;
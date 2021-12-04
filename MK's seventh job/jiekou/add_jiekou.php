<?php
require '../php/add.php';
$result=add();
if($result==1){
    echo "留言新增成功";
}
    else{
        echo "出错了┭┮﹏┭┮";
    }
<?php
require 'add.php';
$result=add();
if($result=true){
    echo "留言新增成功";
}
    else{
        echo "出错了┭┮﹏┭┮";
    }
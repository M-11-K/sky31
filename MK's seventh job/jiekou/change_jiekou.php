<?php
require '../php/change.php';
$result=change();
if($result==1){
    echo "留言修改成功";
}
else{
    echo "出错了┭┮﹏┭┮";
}

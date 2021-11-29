<?php
require 'change.php';
$result=change();
if($result=true){
    echo "留言修改成功";
}
else{
    echo "出错了┭┮﹏┭┮";
}

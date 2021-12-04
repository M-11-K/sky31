<?php
require "../php/delete.php";
$result=delete();
if($result==1){
    echo "删除成功";
}
else{
    echo "出错了";
}
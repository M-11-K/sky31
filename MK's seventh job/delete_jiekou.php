<?php
require "delete.php";
$result=delete();
if($result=true){
    echo "删除成功";
}
else{
    echo "出错了";
}
<?php
require "../php/insert.php";
$result=insert();
if($result==1){
    echo "code: 0";
    echo "<br>";
    echo "message: 插入成功";
}
else{
    echo "code: 1";
    echo "<br>";
    echo "message:插入失败";
}
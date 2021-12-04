<?php
require "../php/register.php";
$result=register();
if($result==1){
    echo "code: 0";
    echo "<br>";
    echo "message: 成功";
}
elseif ($result==2){
    echo  "code: 2";
    echo "<br>";
    echo "message: 账户信息已存在！";
}
else{
    echo "code: 1";
    echo "<br>";
    echo "message: 失败";
}

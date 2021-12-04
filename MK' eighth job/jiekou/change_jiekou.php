<?php
require "../php/change.php";
$result=change();
if($result==1){
    echo "code: 0";
    echo "<br>";
    echo "message: 成功";
}
else{
    echo "code: 1";
    echo "<br>";
    echo "message: 失败";
}
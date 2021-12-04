<?php
require "../php/login.php";
$result=login();
if($result==0){
    echo "code: 0";
    echo "<br>";
    echo "message: 成功";
}
else{
    echo "code: 1";
    echo "<br>";
    echo "message: 失败";


}
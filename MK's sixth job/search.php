
<?php
$database=file_get_contents("database.txt");
$dataarray=explode("\n",$database);
$keyword=$_POST['keyword'];
function search(){
    $result=array();
    global $dataarray,$keyword;
    for($i=0;$i<=sizeof($dataarray);$i++){
        if(strpos($dataarray[$i],$keyword)!==false){
            $result[]=$dataarray[$i];
        }
    }
    return $result;
}














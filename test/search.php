
<?php
$database=file_get_contents("database.txt");
$dataarray=explode("\n",$database);

$search="a";
$result=array();
for($i=0;$i<=sizeof($dataarray);$i++){
    if(strpos($dataarray[$i],$search)!==false){
        $result[]=$dataarray[$i];
    }
}
var_dump($result);




<?php
$database=file_get_contents("database.txt");
$search="a";
for($i=0;$i<= count_chars($database);$i++){
    if(strpos($database[$i],$search)!==false){
        echo $database[$i];
    }

}







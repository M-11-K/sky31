<!doctype html>
<html lang="en">
<head>
    <title>乘法口诀表</title>
    <meta charset="utf-8">
</head>
<body>

<?php


echo "<table border='1'>";
for($i=1;$i<=9;$i++){
        echo "<tr>";
        for($j=1;$j<=$i;$j++){
            $r=mt_rand(0,255);
            $g=mt_rand(0,255);
            $b=mt_rand(0,255);
            echo "<td style='background-color:rgb(".$r.",".$g.",".$b.")'>";
            echo "$i".'*'."$j".'='.$i*$j;
            echo "<td>";
        }
        echo "</tr>";}
echo "</table>";
        ?>
</body>
</html>

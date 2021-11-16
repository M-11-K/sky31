
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "homework";
$conn = new mysqli($servername, $username, $password,$dbname);

$sql = "SELECT * FROM text WHERE Username = 'MK' ";

//$res=$conn->query($sql);
$res=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($res)) {
    echo "Number:" . $row["Number"]. "  Username:   " . $row["Username"]. "   Gender :   " . $row["Gender"] ."  Age:  " . $row["Age"] ."<br>";
}

$conn->close();

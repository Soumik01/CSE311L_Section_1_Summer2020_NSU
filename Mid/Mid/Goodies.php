<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Mid_Term_Su";
//connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

if(!$connection){
    die("Failed!..." .mysqli_connect_error);
}

$sql = "CREATE TABLE Goodies(
   Pid int(1),
   Pname varchar(30),
   Color varchar(15)
)";


if(mysqli_query($connection, $sql)){
    echo "Table created";
}else{
    echo "Oops! failed to create...\n" .mysqli_error($connection);
}
mysqli_close($connection);
?>
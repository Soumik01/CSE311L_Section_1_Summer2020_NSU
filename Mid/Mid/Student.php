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

$sql = "CREATE TABLE Student(
    Snum int(10) NOT NULL,
    Sname varchar(30) NOT NULL,
    Major varchar(30),
    Level varchar(3),
    Age int(2) 
)";


if(mysqli_query($connection, $sql)){
    echo "Table created";
}else{
    echo "Oops! failed to create...\n" .mysqli_error($connection);
}
mysqli_close($connection);
?>
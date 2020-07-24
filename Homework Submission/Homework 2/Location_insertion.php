<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "VS_CODE_TEST";


$connection = mysqli_connect($servername, $username, $password, $dbname);

if(!$connection){
    die("Failed!..." .mysqli_connect_error);
}

$sql = 

"INSERT INTO Location_table VALUES
(1400,'2014 Jabberwocky Rd','26192','Southlake','Texas','US'),
(1500, '2011 Interiors Blvd','99236','South San Francisco','California','US'),
(1700, '2004 Charade Rd','98199','Seattle','Washington','US'),
(1800, '460 Bloor St. W.','ON M5S 1X8','Toronto','Ontario','CA'),
(2500,'Magdalen Centre- The Oxford Sc. Park','OX9 9ZB','OXford','Oxford','UK')";

if(mysqli_query($connection, $sql)){
    echo "Data Inserted!";
}else{
    echo "Oops! failed to insert...\n" .mysqli_error($connection);
}
mysqli_close($connection);
?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "VS_CODE_TEST";

//connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

if(!$connection){
    die("Failed!..." .mysqli_connect_error);
}

$sql = 

"CREATE TABLE Departments(
    Depratment_Id int(2) PRIMARY KEY NOT NULL,
    Department_Name varchar(14) NOT NULL,
    Manager_Id int(3),
    Location_Id int(4) NOT NULL)";

if(mysqli_query($connection, $sql)){
    echo "Table created";
}else{
    echo "Oops! failed to create...\n" .mysqli_error($connection);
}
mysqli_close($connection);
?>
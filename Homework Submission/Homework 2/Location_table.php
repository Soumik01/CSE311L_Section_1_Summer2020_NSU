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

"CREATE TABLE Location_table(
    Location_Id int(4) PRIMARY KEY NOT NULL,
    Street_Address VARCHAR (40) NOT NULL,
    Postal_Code VARCHAR(25) NOT NULL,
    City VARCHAR(30),
    State_Province VARCHAR(35) ,
    Country_Id VARCHAR(2)  )";


if(mysqli_query($connection, $sql)){
    echo "Table created";
}else{
    echo "Oops! failed to create...\n" .mysqli_error($connection);
}
mysqli_close($connection);
?>
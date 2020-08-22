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

"CREATE TABLE Employee_Data(
    EMPLOYEE_ID int(3) PRIMARY KEY NOT NULL,
    FIRST_NAME varchar(25) NOT NULL,
    LAST_NAME varchar(25) NOT NULL,
    EMAIL    varchar(25) NOT NULL,
    PHONE_NUM varchar(20) NOT NULL,
    HIRE_DATE varchar(12) NOT NULL,
    JOB_ID varchar(10)   NOT NULL,
    SALARY int(7) NOT NULL,
    COMMISSION float(3),
    MANAGER_ID int(3),
    DEPARTMENT_ID int(4) NOT NULL)";

if(mysqli_query($connection, $sql)){
    echo "Table created!";
}else{
    echo "Oops! failed to create...\n" .mysqli_error($connection);
}
mysqli_close($connection);
?>
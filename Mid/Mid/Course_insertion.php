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

$sql = "INSERT INTO Course VALUES 
(112348546,'Database Systems'),
(115987938,'Database Systems'),
(348121549,'Database Systems'),
(322654189,'Database Systems'),
(552455318,'Database Systems'),
(455798411,'Operating System Design'),
(552455318,'Operating System Design'),
(567354612,'Operating System Design'),
(112348546,'Operating System Design'),
(115987938,'Operating System Design'),
(322654189,'Operating System Design'),
(567354612,'Data Structures'),
(552455318,'Communication Networks'),
(455798411,'Optical Electronics'),
(301221823,'Perception'),
(301221823,'Social Cognition'),
(301221823,'American Political Parties'),
(556784565,'Air Quality Engineering'),
(099354543,'Patent Law'),
(574489456,'Urban Economics')
";


if(mysqli_query($connection, $sql)){
    echo "inserted infos";
}else{
    echo "Oops! failed to insert...\n" .mysqli_error($connection);
}
mysqli_close($connection);
?>
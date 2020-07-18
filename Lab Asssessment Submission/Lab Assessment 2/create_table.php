<? php

$link = mysqli_connect('localhost','root','VS_CODE_TEST');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());

}

if(mysqli_query($link, $sql))
{
    echo "DB Created";
}

else
{
    echo "Error: Could not able to create DB"
}

$sql = "CREATE TABLE test_table(
       id INT NOT NULL PRIMARY KET AUTO_INCREMENT,
       username VACHAR(50) NOT NULL UNIQUE,
       password VARCHAR(255) NOT NULL,
       created at DATETIME DEFAULT CURRENT TIMESTAMP
       )";
       if(mysqli_query($link, $sql))
       {
           echo "Table Created";
       }
       
       else
       {
           echo "Error: Could not able to create Table" .mysqli_error($link);
       }
       
       mysqli_close($link)
       
       ?>


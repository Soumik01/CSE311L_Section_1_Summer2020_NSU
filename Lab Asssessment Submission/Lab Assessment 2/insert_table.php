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

$sql = "INSERT INTO test_table(id,username,password) VALUES
       ('1','DEMO','DEMO')";
      
       if(mysqli_query($link, $sql))
       {
           echo "VALUES INSERTED";
       }
       
       else
       {
           echo "Error: Could not able to create Insert values" .mysqli_error($link);
       }
       
       mysqli_close($link)
       
       ?>


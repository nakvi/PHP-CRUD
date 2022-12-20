<?php
$server="localhost";
$username ="root";
$password ="";
$dbname="crud";
  
$connection=mysqli_connect($server,$username,$password,$dbname);
if($connection)
{
    echo "";
}
else
{
    die("Failed".mysqli_connect_error());
    echo "Connection Failed";
}
?>

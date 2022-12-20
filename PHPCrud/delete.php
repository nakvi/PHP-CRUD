<?php 
include 'connection.php';
$id=$_GET['id'];
$query="DELETE FROM form WHERE id='$id' ";
$data=mysqli_query($connection,$query);
if($data)
{
    ?>
   echo "<script>alert('Record Delete')</script>";

 <meta http-equiv="Refresh" content="0;URL=http://localhost/PHPCrud/view.php"/>;

}
<?php

}
	else
	{
    echo"<font color='red'>Delete Process Failed ";
}
?>
	


	



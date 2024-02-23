<?php
require_once('connect.php');
if(isset($_GET['Id']))
{

	$sql = "DELETE FROM `users` WHERE `users`.`Id` =  ".$_GET['Id'];

	$rs = mysqli_query($con, $sql);

	if($rs)
	{
		echo "Records Deleted";
	}
	
}

?>
<br/>
<a href="select.php">Go to list page</a>

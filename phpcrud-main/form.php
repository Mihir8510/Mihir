<?php
require_once('connect.php');
if(isset($_POST['txtEmail']))
{

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPassword = $_POST['txtPassword'];

$sql = "INSERT INTO `users` (`id`, `name`, `email`, `password` ) VALUES ('0', '$txtName', '$txtEmail', '$txtPassword')";

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
<br/>
<a href="contact.html">Add New Record</a>

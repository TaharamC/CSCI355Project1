<?php 
require_once 'config.php';
if($conn->connect_error)
{
	echo $conn->connect_error;
	die("Error while connecting");
}

if($_POST['username'] && $_POST['psswd'])
{
	$name = $_POST['username'];
	$pwd = $_POST['psswd'];
	$sql = "INSERT INTO Seller.sellers(username,password) VALUES('$name','$pwd')";
	if($conn->query($sql))
	{
		header("Location: signInS.html");
	}
}

 ?>
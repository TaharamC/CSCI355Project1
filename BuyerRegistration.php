<?php 
require_once 'config.php';
if($conn->connect_error)
{
	die("Error while connecting");
}

if($_POST['username'] && $_POST['psswd'])
{
	$name = $_POST['username'];
	$pwd = $_POST['psswd'];
	$checking = "SELECT id,username FROM Buyer.buyers WHERE username='$name'";
	$result = $conn->query($checking);
	if($result->num_rows > 0)
	{
		$sql = "INSERT INTO Buyer.buyers(username,password) VALUES('$name','$pwd')";
		if($conn->query($sql)===TRUE)
		{
			header("Location: signInB.html");
		}
	}else{
		header("Location: signInB.html");
	}

		
	
	
}

 ?>
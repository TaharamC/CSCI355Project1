<?php
	session_start();
	require_once 'config.php';
	if($_POST['username'] && $_POST['psswd'])
	{
		$u = $_POST['username'];
		$p = $_POST['psswd'];
		//$conn = new mysqli($host,$username,$pass);
		if($conn->connect_error)
		{
			die("Problem while connecting");
		}
		$sql = "SELECT id FROM Seller.sellers WHERE username='$u' && password='$p'";
		$result = $conn->query($sql);
		if($result->num_rows>0)
		{
			$row = $result->fetch_assoc();
			$_SESSION['username']=$row["id"];
			header("Location: displayMySale1.php");
		}
	}
?>
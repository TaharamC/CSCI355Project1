<?php 
$server="localhost";
$username="law";
$password="Motorihi6";
$conn = new mysqli($server,$username,$password);
if($conn->connect_error)
{
	echo $conn->connect_error;
}
?>
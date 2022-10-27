<!DOCTYPE html>
<html>
<body>
	<?php 
require_once 'config.php';
if($conn->connect_error)
{
	die("Connection Failed: ".$conn->connect_error);
}
else{
	$sql = "CREATE DATABASE Seller";
	if ($conn->query($sql) === TRUE) {
 	 echo "Database created successfully";
	}else{
		$sql = "CREATE TABLE Seller.sellers (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			username varchar(30) NOT NULL,password varchar(30) NOT NULL)";
		$sql1 = "CREATE TABLE Seller.items (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			itemname varchar(30) NOT NULL,ownerId INT(6) UNSIGNED,foreign key(ownerId) references Seller.sellers(id),src varchar(1200) NOT NULL,price INT(6) NOT NULLs)";
		if ($conn->query($sql1) === TRUE) {
		  echo "Table sellers created successfully";
		} else {
		  echo "Error creating table: " . $conn->error;
		}
}

$conn->close();
}

?>
</body>
</html>

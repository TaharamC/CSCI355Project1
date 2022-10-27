<?php
require_once 'config.php';
	if($conn->connect_error)
	{
		die("Connection Failed: ".$conn->connect_error);
	}
	else{
		$sql = "CREATE DATABASE Buyer";
		if ($conn->query($sql) === TRUE) {
	 	 echo "Database created successfully";
		}else{
			$sql = "CREATE TABLE Buyer.buyers (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				username varchar(30) NOT NULL,password varchar(30) NOT NULL)";
			$sql1 = "CREATE TABLE Buyer.itemsBought (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				itemname varchar(30) NOT NULL,ownerId INT(6) UNSIGNED,foreign key(ownerId) references Seller.sellers(id))";
			if ($conn->query($sql1) === TRUE) {
			  echo "Table sellers created successfully";
			} else {
			  echo "Error creating table: " . $conn->error;
			}
	}
}

$conn->close();

?>
<?php
session_start();?>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shop</title>
	<style>
        .form{
            margin: auto;
            width: 250px;
            margin-top: 100px;
            background-color: lightblue;
            padding: 25px;
            height: 250px;
        }
        .nav{
            margin-top: -80px;
            float: right;
            padding-right: 30px;
            color: blue;
            font-size: 25px;
        }
        a:link{
            text-decoration: none;
        }
        #buyer,#about,#contact,#seller{
            background-color: lightcyan;
        }
        #home{
            background-color: blue;
        }
    </style>
</head>
<body>
	<div class="nav">
        <a href="#" id="home">Home</a>
        <a href="#" id="about">About</a>
        <a href="#" id="contact">Contact</a>
        <a href="signInB.html" id="buyer">Buyer</a>
        <a href="signInS.html" id="seller">Seller</a>
    </div>
<?php
require_once 'config.php';
if($conn->connect_error)
{

}
$id = $_SESSION['username'];
$sql = "SELECT id WHERE ownerId='$id'";
$result = $conn.query($sql);
if($result->num_rows()==0)
{
	echo "No product to be shown";
}
while ($result->num_rows()>0) {
	$row = $result->fetch_assoc();
	echo "<div>";
	echo "<img src='"+$row['id']+".jpeg'";
	echo "</div>";
}
echo "</body>
</html>";
?>
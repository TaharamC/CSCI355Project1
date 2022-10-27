<?php
session_start();?>
<!DOCTYPE html>
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
            margin-top: 0px;
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
        #form1{
            margin-top:20px;
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
    <form action="postImage.php" id="form1" enctype="multipart/form-data" method="Post">
        <label for="img">Select image of product:</label>
        <input type="file" name="img" accept="image/*">
        <label>Price:</label>
        <input type="text" name="price">
        <label>Item Name:</label>
        <input type="text" name="item">
        <input type="submit">
    </form>
<?php
require_once 'config.php';
if($conn->connect_error)
{

}
$id = $_SESSION['username'];
$sql = "SELECT * FROM Seller.items WHERE ownerId='$id'";
$result = $conn->query($sql);
if($result->num_rows==0)
{
	echo "No product to be shown";
}
echo "<table><tr> <th>Item Id</th><th>Item name</th><th>Price</th> </tr>";
if ($result->num_rows>0) {
	while($row = $result->fetch_assoc())
    {
        
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['itemname']."</td>";
        echo "<td>".$row['price']."</td>";
        echo "</tr>";
    }
}
echo "</table>";
echo "</body>
</html>";
?>
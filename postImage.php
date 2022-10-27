<?php
require_once 'config.php';
session_start();
$id = $_SESSION['username'];

if(isset($_FILES['img'][tmp_name]))
{
    $price =$_POST['price'];
    $item = $_POST['item'];
    $src=$_FILES['img'][tmp_name];
    $dst="uploads/".uniqid().$_FILES['img'][name];
    if(move_uploaded_file($src,$dst)){
        $sql = "INSERT INTO Seller.items(src,ownerId,price,itemname) VALUES('$dst',$id,$price,'$item')";
        $conn->query($sql);
        header("Location:displayMySale1.php");
    }

}


?>
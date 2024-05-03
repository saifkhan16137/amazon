<?php
include "db.php";

if(isset($_GET['submit']))
{

    $name = $_GET['name'];
    $description = $_GET['description'];
    $price = $_GET['price'];


    $sql = "INSERT INTO `product` ( `name`, `description`, `price`) VALUES ( '$name', '$description ', '$price')";
    $res=mysqli_query($conn,$sql);
    if($res!=true){
        echo "Error on insertion".$conn ->error;

    }
    else{
        echo "  insertion successfully";
    }
}

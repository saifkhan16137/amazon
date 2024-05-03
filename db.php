<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "amazon";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error) {

    die("connection failed".$conn->connect_error);

}
else{
    echo "Connected successully";
}


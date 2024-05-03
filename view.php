<?php
include "db.php";
$sql="SELECT * FROM `product`";
$res = mysqli_query($conn,$sql);
if($res==TRUE){
echo "<br>";
echo "Display successful";
} else {
echo "Error ".$sql."<br>".$conn->error;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<style>
table,th,tr,td{
border: 2px solid white;
border-collapse: collapse;
border-style:double;
border-color: blanchedalmond;
padding: 20px;
color: white;
}
th{
background-color: darkolivegreen;
}
td{
background-color: chocolate;
}

th, td {
padding-top: 10px;
padding-bottom: 20px;
padding-left: 30px;
padding-right: 40px;
 }

a{
    margin: 380px;
    padding: 5px;
    background-color: transparent;
    border-radius: 2px;
    border: 2px solid;
    border-color: blanchedalmond;
}

</style>
<body>
<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Description</th>
<th>Price</th>
</tr>

<?php
if(mysqli_num_rows($res) > 0){
echo "Showing data";
while($fff=mysqli_fetch_assoc($res)){
echo "<tr>";
echo "<td>".$fff['id']."</td>";
echo "<td>".$fff['name']."</td>";
echo "<td>".$fff['description']."</td>";
echo "<td>".$fff['price']."</td>";
echo "</tr>";
}
}
?>
<br>
<br>
<a href="insert_product.php">Insert New</a><br><br>
</table>
</body>
</html>
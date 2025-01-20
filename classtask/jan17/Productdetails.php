<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product category</title>
</head>
<body>
<?php
$id=$_GET["id"];
$cnn = mysqli_connect("localhost", "root", "", "DBTATA");
$qry = "SELECT * FROM product where pid='$id'";
$result = $cnn->query($qry);

while ($row = $result->fetch_assoc()) {
    $pid = $row["pid"];
    $pname = $row["pname"];
    $price = $row["pprice"];
    $pimg = $row["pimg"]; 
    $catid = $row["catid"];
    $img = "<img src='Product_img//$pname.jpg' height='200' width='200' />";
    echo "<table border='1' cellspacing='0' cellpadding='10'>";
    echo "<tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Image</th>
          </tr>";

    echo "<tr>
            <td>$pid</td>
            <td>$pname</td>
            <td>$price</td>
            <td>$img</td>
          </tr>";
}


echo "</table>";
?>
</body>
</html>
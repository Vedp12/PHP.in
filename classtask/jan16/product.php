<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$cnn = mysqli_connect("localhost", "root", "", "DBTATA");
$qry = "SELECT * FROM `product`";
$result = $cnn->query($qry);


echo "<table border='1' cellspacing='0' cellpadding='10'>";
echo "<tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Image</th>
      </tr>";


while ($row = $result->fetch_assoc()) {
    $pid = $row["pid"];
    $pname = $row["pname"];
    $price = $row["pprice"];
    $pimg = $row["pimg"]; 
    $catid = $row["catid"];

    
    $img = "<img src='Product_img/$pname.jpg' height='100' width='100' />";

    
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
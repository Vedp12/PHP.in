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
$qry = "SELECT * FROM product where cid='$id'";
$result = $cnn->query($qry);

// Start the HTML table

// Fetch data and populate the table
while ($row = $result->fetch_assoc()) {
  $pid=$row["pid"];
  $pname=$row["pname"];
  $price=$row["price"];
  $pimg=$row["pimg"];
  $catid=$row["catid"];
  $img ="<img src='Product_img/$pimg' height='180px' width='180px'/>";
  $link = "<a href='Productdetails.php?id=$pid'>$img</a>";

    echo " $link <br>";
}

// End the HTML table
echo "</table>";
?>
</body>
</html>
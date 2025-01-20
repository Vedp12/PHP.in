<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product category</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    .product-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 20px;
    }
    .product {
      margin: 10px;
      padding: 10px;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 5px;
      text-align: center;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .product img {
      max-width: 100%;
      height: auto;
      border-radius: 5px;
    }
    .product a {
      text-decoration: none;
      color: #333;
    }
  </style>
</head>
<body>
<div class="product-container">
<?php
$id=$_GET["id"];
$cnn = mysqli_connect("localhost", "root", "", "DBTATA");
$qry = "SELECT * FROM product where cid='$id'";
$result = $cnn->query($qry);

// Fetch data and populate the table
while ($row = $result->fetch_assoc()) {
  $pid=$row["pid"];
  $pname=$row["pname"];
  $price=$row["price"];
  $pimg=$row["pimg"];
  $catid=$row["catid"];
  $img ="<img src='Product_img/$pimg' alt='$pname'/>";
  $link = "<a href='Productdetails.php?id=$pid'>$img</a>";

  echo "<div class='product'>$link</div>";
}
?>
</div>
</body>
</html>
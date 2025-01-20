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
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            
        }
        th, td {
            
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        img {
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<?php
$id=$_GET["id"];
$cnn = mysqli_connect("localhost", "root", "", "DBTATA");
$qry = "SELECT * FROM product where pid='$id'";
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
    $img = "<img src='Product_img/$pname.jpg' height='200' width='200' />";
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
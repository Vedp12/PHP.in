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

// Start the HTML table
echo "<table border='1' cellspacing='0' cellpadding='10'>";
echo "<tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Image</th>
      </tr>";

// Fetch data and populate the table
while ($row = $result->fetch_assoc()) {
    $pid = $row["pid"];
    $pname = $row["pname"];
    $price = $row["pprice"];
    $pimg = $row["pimg"]; // Assuming this is the file name in the database
    $catid = $row["catid"];

    // Use relative path for images inside the web server's document root
    $img = "<img src='Product_img/$pname.jpg' height='100' width='100' />";

    // Populate table rows
    echo "<tr>
            <td>$pid</td>
            <td>$pname</td>
            <td>$price</td>
            <td>$img</td>
          </tr>";
}

// End the HTML table
echo "</table>";
?>
</body>
</html>
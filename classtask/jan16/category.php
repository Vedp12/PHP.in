<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$cnn=mysqli_connect("localhost","root","","DBTATA");
$qry="select * from catagory";
$result=$cnn->query($qry);
while($row=$result->fetch_assoc())
{
$catid=$row["catid"];
$catname=$row["catname"];

echo "<br>$catid $catname";
}

?>
</body>
</html>
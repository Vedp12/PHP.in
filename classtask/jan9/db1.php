
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$cnn=mysqli_connect("localhost","root","","dbreliance");
$qry="select * from emp";
$result=$cnn->query($qry);
while($row=$result->fetch_assoc())
{
$eno=$row["eno"];
$ename=$row["ename"];
echo "<br>$eno --- $ename";
}

?>
</body>
</html>
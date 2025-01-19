
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$cnn=mysqli_connect("localhost","root","","Student");
$qry="select * from stu";
$result=$cnn->query($qry);
while($row=$result->fetch_assoc())
{
$sno=$row["sno"];
$sname=$row["sname"];
$gender=$row["gender"];
$sem=$row["sem"];
echo "<br>$sname --- $gender --- $sem";
}

?>
</body>
</html>

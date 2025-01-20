<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $txth=$_POST["txth"];
    $txtb=$_POST["txtb"];
    $area=$txtb*$txtb*0.5;
    echo "Area of tri=$area";
    ?>
</body>
</html>
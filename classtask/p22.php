<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $no=$_POST["txtno"];
    for ($i=1;$i<=$no;$i++)
    {
        $s=$i*$i;
        echo "$i -- $s";
        echo "<br>";
    }
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $no1=$_POST["txtno1"];
    $no2=$_POST["txtno2"];
    $no3=$no1-$no2;
    if($no1>$no2)
    {
        echo " No 1 is Greater by $no3 ";
    }
    else
    {
        echo " No 2 is Greater by $no3 ";
    }
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $age=$_POST["age"];;
    if($age>18)
    {
        echo " U can Drive";
    }
    else
    {
        echo " U can't Drive";
    }
    ?>
</body>
</html>
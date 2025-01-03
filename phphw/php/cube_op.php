
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cube = $_POST['cube'];
        echo "The cube of $cube is " . $cube * $cube * $cube;
        ?>
</body>
</html>
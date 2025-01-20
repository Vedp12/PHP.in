
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial OP</title>
</head>
<body>
    <?php
        $number = $_POST['number'];
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }
        echo "The factorial of $number is $factorial";
    ?>
</body>
</html>
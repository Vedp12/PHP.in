
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $oddeven = $_POST['oddeven'];
        if ($oddeven % 2 == 0) {
            echo "The number is even";
        } else {
            echo "The number is odd";
        }
        ?>
</body>
</html>
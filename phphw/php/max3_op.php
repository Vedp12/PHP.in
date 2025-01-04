
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>max3_op</title>
</head>
<body>
    <?php 
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        if($num1 > $num2 && $num1 > $num3){
            echo "The maximum number is: $num1";
        }elseif($num2 > $num1 && $num2 > $num3){
            echo "The maximum number is: $num2";
        }else{
            echo "The maximum number is: $num3";
        }
    ?>
</body>
</html>
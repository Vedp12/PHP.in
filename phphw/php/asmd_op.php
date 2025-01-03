
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $no1 = $_POST['no1'];
        $no2 = $_POST['no2'];
        
        $add = $no1+$no2;
        $sub = $no1-$no2;
        $mul = $no1*$no2;
        $div = $no1/$no2;    

        echo "The addtion is $add <br/>";
        echo "This subtraction is $sub <br/>"; 
        echo "The multiplication is $mul <br/>";
        echo "The division is $div <br/>";
        ?>
</body>
</html>
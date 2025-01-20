
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table form</title>
</head>
<body>
   <?php
   $table = $_POST['table'];
    for($i=1; $i<=10; $i++){
        echo $table . " x " . $i . " = " . $table*$i . "<br>";
    }
   ?>
    
</body>
</html>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form method="post">
        OP=<input type="text" name="operator" id="">
        <input type="submit" name="" id="">
    </form> -->
    <?php
    // $no1=$_POST["t1"];
    $no2=$_POST["t2"];
    $op=$_POST["op"];
    // $no4=$_POST['t4'];
    $ans ="";
    
    if($op=="+"){
        $ans = $no1+$no2;
    } 
    elseif($op=="-"){
        $ans = $no1-$no2;
    }
    elseif($op=="*"){
        $ans = $no1*$no2;
    }
    elseif($op=="/"){
        $ans = $no1/$no2;
    }
    echo "no1 = $no1 , no2 = $no2 , op = $op ";
    ?>
    <!-- <input type="text" value=""> -->

</body>
</html> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLG list</title>
</head>
<body>
<?php
        $cnn=mysqli_connect("localhost","root","","Student");
        $qry="SELECT * FROM `CLG_List`";
        $result=$cnn->query($qry);
        echo "<h1>Collage Names</h1>";
        while($row=$result->fetch_assoc())
        {
            $cid=$row["cid"];
            $Clgname=$row["Clgname"];
            $link = "<a href = 'student.php?id=$cid'>$Clgname</a>";
            echo "$cid. $link </br>";
        }
        ?>
</body>
</html>
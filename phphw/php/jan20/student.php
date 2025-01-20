<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLG list</title>
    <style>
        img {
            border: 2px solid #000;
            border-radius: 10px;
            box-shadow: 5px 5px 10px #888888;
        }
    </style>
</head>
<body>
<?php
        $id=$_GET["id"];
        $cnn=mysqli_connect("localhost","root","","Student");
        $qry="SELECT * from student_list where cid='$id'";
        $result=$cnn->query($qry);
        echo "<h1>Student Names</h1>";
        while($row=$result->fetch_assoc())
        {
            $Rollno=$row["Rollno"];
            $sname=$row["sname"];
            $gender=$row["gender"];
            $Sphoto=$row["Sphoto"];
            $cid=$row["cid"];

            $img ="<img src='Student_img/$Sphoto' width='200' height='200'/>";
            echo " $sname $img  </br>";
        }
        ?>
</body>
</html>
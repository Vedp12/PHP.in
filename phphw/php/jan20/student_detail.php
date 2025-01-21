<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLG list</title>
   
</head>
<body>
    <h1>Student Detail</h1>
    <div class="student-list">
        <?php
        $id=$_GET["Rollno"];
        $cnn=mysqli_connect("localhost","root","","Student");
        $qry="SELECT * from student_list where Rollno='$id'";
        $result=$cnn->query($qry);
        while($row=$result->fetch_assoc())
        {
            $Rollno=$row["Rollno"];
            $sname=$row["sname"];
            $gender=$row["gender"];
            $Sphoto=$row["Sphoto"];
            $cid=$row["cid"];
            
            echo "  <table border='1' cellspacing='0' cellpadding='20'>";
            echo "  <tr>
                    <th>Studnet ID</th>
                    <th>Student Name</th>
                    <th>Gender</th>
                    <th>Image</th>
                    </tr>";
                    echo "<tr>
                    <td>$Rollno</td>
                    <td>$sname</td>
                    <td>$gender</td>
                    <td><img src='Student_img/$Sphoto' alt='$sname'/></td>
                  </tr>";
            echo "</table>";
            
        }
                
        ?>
    </div>
</body>
</html>

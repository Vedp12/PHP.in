<?php
$id = $_GET["id"];
$cnn = mysqli_connect("localhost", "root", "", "Student");
$qry = "SELECT * FROM student_list WHERE cid='$id'";
$result = $cnn->query($qry);

while ($row = $result->fetch_assoc()) {
    $Rollno = $row["Rollno"];
    $sname = $row["sname"];
    $gender = $row["gender"];
    $Sphoto = $row["Sphoto"];
    $cid = $row["cid"];
    
    $link = "<a href='student_detail.php?Rollno=$Rollno'>$sname</a>";
    echo "<div class='student'>";
    echo "<img src='Student_img/$Sphoto' />";
    echo "<div class='student-name'><h3>$link</h3></div>";
    echo "</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLG list</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        a {
            text-decoration: none;
            color: #007BFF;
            transition: color 0.3s;
        }
        a:hover {
            color: #0056b3;
        }
        .college-list {
            list-style: none;
            padding: 0;
        }
        .college-list li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .college-list li:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            $cnn=mysqli_connect("localhost","root","","Student");
            $qry="SELECT * FROM `CLG_List`";
            $result=$cnn->query($qry);
            echo "<h1>College Names</h1>";
            echo "<ul class='college-list'>";
            while($row=$result->fetch_assoc())
            {
                $cid=$row["cid"];
                $Clgname=$row["Clgname"];
                $link = "<a href='student.php?id=$cid'>$Clgname</a>";
                echo "<li>$cid. $link</li>";
            }
            echo "</ul>";
        ?>
    </div>
</body>
</html>
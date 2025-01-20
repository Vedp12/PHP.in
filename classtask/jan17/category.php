<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        }
        .category-link {
            display: block;
            padding: 10px;
            margin: 5px 0;
            text-decoration: none;
            color: #333;
            border: 1px solid #ddd;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }
        .category-link:hover {
            background-color: #007BFF;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $cnn=mysqli_connect("localhost","root","","DBTATA");
        $qry="select * from catagory";
        $result=$cnn->query($qry);
        while($row=$result->fetch_assoc())
        {
            $catid=$row["catid"];
            $catname=$row["catname"];
            $link="<a class='category-link' href='products.php?id=$catid'>$catname</a>";
            echo "$link<br/>";
        }
        ?>
    </div>
</body>
</html>
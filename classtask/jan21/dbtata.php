<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
$catid="";
$catname="";
if(isset($_POST["btnsubmit"]))
{
$catid=$_POST["txtcatid"];
$catname=$_POST["txtcatname"];
$qry="update category set catname='$catname'
where catid='$catid'";
$cnn=mysqli_connect("localhost","root","","DBTATA");
$result=$cnn->query($qry);
header("location:catdisplay.php");
}
?>
<body>
<form name="frm1" method="post">
Category Id :<input type="text" name="txtcatid">
<br/>

Category name :<input type="text" name="txtcatname">
<br/>
<input type="submit" name="btnsubmit" value="Update">
</form>

</body>
</html>
<!--MARK UPDATE DESIGN-->


<?php
$con=mysqli_connect('localhost','root','','login');
if($con)
{
//echo "connected to database";
}
?>

<html>
<head>
<title>mark update</title>
</head>
<body>
<form method="post" action="marksearch.php">
<div style=background-color:#e8d290>
<h2 align="center"><i>Mark Update</h2></i><br></div>
Ktuid: <select name="ktuid"><option>select</option>
<?php 
$i="select * from marks";
$ci=mysqli_query($con,$i);
if(mysqli_num_rows($ci))
{
while($row=mysqli_fetch_assoc($ci))
{
echo "<option>".$row['ktuid']."</option>";
}
}
?>
</select>
<br><br><input type="submit" name="search" value="Search"></input>
</form>
</body>
</html>

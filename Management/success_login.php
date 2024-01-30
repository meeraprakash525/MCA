<html>
<head></head>
<body bgcolor="#c08bd6">
<div style=background-color:#b1e6c7>
<h2 align="center">***Login successfull***</h2></div>
<h3 align="center"><i>Student login details</i></h3>
</body>
</html>

<?php
$con=mysqli_connect('localhost','root','','login');
if($con)
{
//echo "connected to database";
}
$q="select * from student ";
$cq=mysqli_query($con,$q);
if(mysqli_num_rows($cq))
echo "<table border='1' bgcolor='#b1e6c7' align='center'><tr>";
echo "<th>Ktuid</th><th>Name</th><th>email</th><th>phone</th></tr>";
while($row=mysqli_fetch_assoc($cq))
{
echo "<tr><td>".$row["ktuid"]."</td>";
echo "<td>".$row["name"]."<td>";
echo $row["email"]."<td>";
echo $row["phone"]."</td></tr>";
}
?>
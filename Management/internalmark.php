<?php
$con=mysqli_connect('localhost','root','','login');
if($con)
{
//echo "connected to database";
}
?>

<html>
<head></head>
<body>
<form method="POST" action="internalmark.php">
<div style=background-color:#e8d290>
<h2 align="center"><i>Internal Marks</h2></i><br></div>
Ktu id<select name="ktuid"><option>select</option>
<?php
$q="select * from marks";
$cq=mysqli_query($con,$q);
if(mysqli_num_rows($cq))
while($row=mysqli_fetch_assoc($cq))
{
echo "<option>".$row['ktuid']."</option>";
}
?>
<input type="submit" name="search" value="view mark"></input><br><br>
</select>
</form>
</body>
</html>

<?php
if(isset($_POST['search']))
{
$ktuid=$_POST['ktuid'];
$s="select * from marks where ktuid='$ktuid'";
$cs=mysqli_query($con,$s);
if(mysqli_num_rows($cs))
{
echo "<table border='1'><tr>";
echo "<th>ID</th><th>Ktuid</th><th>Name</th><th>Semester</th><th>Subject</th><th>Internal</th><tr>";
$row=mysqli_fetch_assoc($cs);
echo "<tr><td>".$row['id']."</td>";
echo "<td>".$row['ktuid']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['semester']."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['internal']."</td>";

}
}
?>

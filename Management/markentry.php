<?php
$con=mysqli_connect('localhost','root','','login');
if($con)
{
//echo "connected to database";
}
?>

<html>
<head>
<title>Mark Entry</title>
</head>
<body>
<form method="post" action="markentry.php">
<div style=background-color:#e8d290>
<h2 align="center"><i>Mark Entry</i></h2><br></div>
<br><br>
<table border="1" align="center">
<tr>
<th>Id</th>
<td><input type="textbox" name="id"></input></td></tr>
<tr><th>Ktuid</th>
<td><select name="ktuid"><option>select</option>
<?php
$q="select * from student";
$cq=mysqli_query($con,$q);
if(mysqli_num_rows($cq))
{
while($row=mysqli_fetch_assoc($cq))
{
echo "<option>".$row['ktuid']."</option>";
}
}
?>
</select>
</td></tr>
<tr><th>Name</th>
<td><input type="textbox" name="name"></input</td></tr>
<tr>
<tr><th>Semester</th>
<td><input type="textbox" name="semester"></input</td></tr>
<tr>
<th>Subject</th>
<td><input type="textbox" name="subject"></input></td></tr>
<tr>
<th>Assignment 1</th>
<td><input type="textbox" name="assignment1"></input></td></tr>
<tr>
<th>Assignment 2</th>
<td><input type="textbox" name="assignment2"></input></td></tr>
<tr>
<th>Mark 1</th>
<td><input type="textbox" name="mark1"></input></td></tr>
<tr>
<th>Mark 2</th>
<td><input type="textbox" name="mark2"></input></td></tr>
<tr>
<th>Attendance</th>
<td><input type="textbox" name="attendance"></input></td></tr>
<tr>
<td colspan=2 align="center">
<input type="submit" name="submit" value="Enter" style=background-color:lightgreen></input>
<input type="reset" name="reset" value="Reset" style=background-color:skyblue></input></td></tr>
</table>
</form>
</body>
</html>



<!--PHP CODE-->

<?php
if(isset($_POST['submit']))
{
$id=$_POST['id'];
$ktuid=$_POST['ktuid'];
$name=$_POST['name'];
$semester=$_POST['semester'];
$subject=$_POST['subject'];
$assignment1=$_POST['assignment1'];
$assignment2=$_POST['assignment2'];
$mark1=$_POST['mark1'];
$mark2=$_POST['mark2'];
$attendance=$_POST['attendance'];
// $internal=($mark1+$mark2)*.2 + $assignment1 +$assignment2 +$attendance;
$i="insert into marks values('$id','$ktuid','$name','$semester','$subject','$assignment1','$assignment2','$mark1','$mark2','$attendance','$internal')";
$ci=mysqli_query($con,$i);
if($ci)
{
echo "1 row inserted successfully";
}
}
?>
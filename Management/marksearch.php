<!--SEARCH BUTTON IS CLICKED-->


<html>
<head></head>
<body>
<form method="POST" action="marksearch.php">
<?php
$con=mysqli_connect('localhost','root','','login');
if($con)
{
echo "connected to database";
}
if(isset($_POST['search']))
{
$ktuid=$_POST['ktuid'];
$q="select * from marks where ktuid='$ktuid'";
$cq=mysqli_query($con,$q);
if(mysqli_num_rows($cq))
$row=mysqli_fetch_assoc($cq);
echo "<br><br>ktuid<input type='textbox' name='ktuid' value=".$row['ktuid'].">";
echo "mark1<input type='textbox' name='mark1' value=".$row['mark1'].">";
echo "mark2<input type='textbox' name='mark2' value=".$row['mark2'].">";
echo "assignment1<input type='textbox' name='assignment1' value=".$row['assignment1'].">";
echo "assignment2<input type='textbox' name='assignment2' value=".$row['assignment2'].">";
}
?>
<input type="submit" name="update" value="update"></input>

<!--UPDATE BUTTON IS CLICKED-->


<?php
if(isset($_POST['update']))
{
$ktuid=$_POST['ktuid'];
$mark1=$_POST['mark1'];
$mark2=$_POST['mark2'];
$assignment1=$_POST['assignment1'];
$assignment2=$_POST['assignment2'];
$u="update marks set mark1='$mark1',mark2='$mark2',assignment1='$assignment1',assignment2='$assignment2'
where ktuid='$ktuid'";
$cu=mysqli_query($con,$u);
if($cu)
{
echo "mark updated successfully!!";
}
}
?>
</form>
</body>
</html>
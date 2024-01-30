<html>
    <head><title>Homepage</title></head>
    <body>
        <center><u><b><h1>WELCOME..</h1></b></u></center>
</body>
</html>

<?php
error_reporting(0);
session_start();
$conn=mysqli_connect('localhost','root','','manage');
if(!$conn)
{
    echo"connection failed";
}
else
{
  if(isset($_POST['login']))
  {
    $_ktuid=$_POST['ktuid'];
    $_password=$_POST['password'];
    $sql="SELECT * FROM cet WHERE ktuid='$ktuid' AND password='$password'";
    if($sql)
    {
        $_SESSION['ktuid']=$ktuid;
    }
    else
    {
          echo"User not Found!!";
    }
  }
}
?>

<?php
  
  if(isset($_POST['ktuid']))
  {
    $ktuid=$_SESSION['ktuid'];
    if($ktuid!='teacher')
    {
        $sql="SELECT * FROM cet WHERE ktuid='$ktuid'";
        $res=mysqli_connect($conn,$sql);

        $row=mysqli_fetch_assoc($res);
        echo"<h2>Student Details</h2>";

    echo"
       <table border= 1 align='center'>
       <tr>
       <td>KTU_ID</td>
       <td>{$row['ktuid']}</td>
       </tr>

       <tr>
       <td>Name</td>
       <td>{$row['name']}</td>
       </tr>

       <tr>
       <td>Age</td>
       <td>{$row['age']}</td>
       </tr>

       <tr>
       <td>gender</td>
       <td>{$row['gender']}</td>
       </tr>

       <tr>
       <td>sem</td>
       <td>{$row['sem']}</td>
       </tr>

       <tr>
       <td>email</td>
       <td>{$row['email']}</td>
       </tr>

       <tr>
       <td>Password</td>
       <td>{$row['password']}</td>
       </tr>

       <tr>
       <td>RE_password</td>
       <td>{$row['repassword']}</td>
       </tr>
       </table>";
}
else
{
   $sql="SELECT * FROM cet WHERE ktuid !='$ktuid'";
   $res=mysqli_connect($conn,$sql);
   echo"<h1>Student Details</h1>";
   echo "<table border=1 align='center' width='60%'>
					<tr>
						<th>KTU ID</th>
						<th>NAME</th>
						<th>AGE</th>
						<th>GENDER</th>
						<th>PHONE</th>
						<th>SEMESTER</th>
						<th>ROLL NO</th>
						<th>EMAIL</th>
					</tr>";
			while ($row = mysqli_fetch_assoc($result)) {
				echo "
					<tr>
						<td>{$row['ktu_id']}</td>
						<td>{$row['name']}</td>
						<td>{$row['age']}</td>
						<td>{$row['gender']}</td>
						<td>{$row['phone']}</td>
						<td>{$row['sem']}</td>
						<td>{$row['roll_no']}</td>
						<td>{$row['email']}</td>
					</tr>
				";
			}
			echo "</table>";
		}	

}
  mysqli_close($conn);
  ?>
<html>
	<head>
		<style>
			body {
				font-family: Arial, Helvetica, sans-serif;
				background-color: #F5F5F5;
				margin: 50px;
				display: flex;
				justify-content: center;
				text-align: center;
                 height: 200px;
  /* background-color: red;  */
                background: rgb(34,193,195);
            background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);
}
h1{
    font-family: 'Signika', sans-serif;
}
			
			h1 {
				background-color: #FC5185;
				color: #f5f5f5;
			}
			table {
				width: 100%;
				margin: auto;
				text-align: left;
			}
			td, th {
				padding: 5px;
			}
			form input[type="submit"] {
				margin: auto;
				text-align: center;
				background-color: #FC5185;
                border-radius: 5px;
                border-color: #364F6B;
				width: 100%;
				height: 30px;
			}
			form input[type="text"], input[type="password"] {
				width: 100%;
			}
			.container {
				width: 30%;
			}
		</style>
	</head>
	<body>
		<div class="container">
<form method="post" action="">
<div style=background-color:#859690>
<h1 align="center">LOGIN</h1></div>
<br><br>
<table border="1" align="center" cellpadding=20 bgcolor="#b0d4c8">
<tr><th>Ktu id</th>
<td><input type="textbox" name="ktuid"></input></td></tr>
<tr><th>Name</th>
<td><input type="textbox" name="name"></input></td></tr>
<tr><th>Password</th>
<td><input type="password" name="password"></input></td></tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="submit" style=background-color:lightgreen>
<input type="reset" name="reset" style=background-color:skyblue>
</table>
<div align="center">
<br><br>
Not a member? <a href="Register2.php" >Login here</a></div>
</form>
</body>
</html>

<?php
$con=mysqli_connect('localhost','root','','login');
if($con)
//echo "connected to database";
if(isset($_POST['submit']))
{
$ktuid=$_POST['ktuid'];
$name=$_POST['name'];
$password=$_POST['password'];
$q="select * from student where ktuid='$ktuid' and name='$name' and password='$password'";
$cq=mysqli_query($con,$q);
if(mysqli_num_rows($cq))
{
Header("Location:frameset.php");
}
}
?>
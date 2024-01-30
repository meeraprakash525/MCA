<html>
<head>
		<style>
			body {
				font-family: Arial, Helvetica, sans-serif;
				background-color: #F5F5F5;
				margin: 20px;
				display: flex;
				justify-content: center;
				text-align: center;
			}
			h1 {
				background-color: #FC5185;
				color: #f5f5f5;
			}
			table {
				width: 50%;
				margin: auto;
				text-align: left;
			}
			th, td {
				padding: 4px;
			}
			* form input[type="submit"] {
				margin: auto;
				text-align: center;
				background-color: #FC5185;
                border-radius: 5px;
                border-color: #364F6B;
				width: 100%;
				height: 30px;
			}
</style>
</head>
<body>
<form method="post" action="">
<div style=background-color:#e8d290>
<h2 align="center"><i>STUDENT REGISTRATION</i></h2><br>
</div><br><br>
<table border="1" align="center">
    <tr>
<th>Ktu id</th>
<td><input type="textbox" name="ktuid"></input></td></tr>
<tr>
<th>Name</th>
<td><input type="textbox" name="name"></input></td></tr>
<tr>
<th>Email id</th>
<td><input type="textbox" name="email"></input></td></tr>
<tr><th>Phone No</th>
<td><input type="textbox" name="phone"></input></td></tr>
<tr><th>Password</th>
<td><input type="password" name="password"></input></td></tr>
<tr><th>Re-type Password</th>
<td><input type="password" name="repassword"></input></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="submit" value="submit" style=background-color:lightgreen></input>
<input type="reset" name="reset" style=background-color:skyblue></input></td></tr>
</body>
</html>


<!--php code-->

<?php
if(isset($_POST['submit']))
{
$con=mysqli_connect('localhost','root','','login');
if($con)
{
echo "connected to database";
}
$ktuid=$_POST['ktuid'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$q="insert into student values('$ktuid','$name','$email','$phone','$password','$repassword')";
$q=mysqli_query($con,$q);
if($q)
{ 
//echo "1 row inserted successfully";
Header("location:success_login.php");
}
}
?>
<html>
<head>
<title>Form in Table</title>
</head>
<body background="img/02.jpg">
<form>

<h1 align="center"> <font color="white"> REGISTRATION FORM </font> </h1>

<table border="1" width="40%" height="600px" align="center" bgcolor="black">
<tr align="center" bgcolor="yellow">
<th colspan="2"><font size="10">Register </font></th>
</tr>

<tr>
<th><font color="yellow">
<label>Name</label></th>
<th><input type="text" name="name"></th>
</tr>

<tr>
<th><font color="yellow"><label>Age</label></th>
<th><input type="text" name="age"></th>
</tr>

<tr >
<th><font color="yellow">
<label>Mobile No.</label></th>
<th><input type="text" name="phone"></th>
</tr>

<tr >
<th><font color="yellow">
<label>Email</label></th>
<th><input type="email" name="email"></th>
</tr>

<tr >
<th><font color="yellow">
<label>Gender</label></th>
<th><font color="yellow">
<input type="radio" name="gender">Male 
<input type="radio" name="gender">Female
</th>
</tr>

<tr >
    <th><font color="yellow">
    <label>password</label></th>
    <th><input type="password" name="password"></th>
    </tr>

<tr >
    <th><font color="yellow">
    <label>Re-password</label></th>
    <th><input type="password" name="repassword"></th>
    </tr>


<!-- <tr >
<th><font color="yellow">
<label>Country</label></th>
<th>
<select name="city">
<option value="India">India</option>
<option value="South Africa">South Africa</option>
<option value="America">America</option>
<option value="Japan">Japan</option>
</th>
</tr> -->


<tr align="center" bgcolor="yellow">
<th colspan="2"><input type="Submit" name="submit">
<!-- <input type="reset"> -->
</th>
</tr>

</table>
</form>

</body>
</html>
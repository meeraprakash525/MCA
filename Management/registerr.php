<html>
    <head><title>Registerpage</title></head><br><br>
    <body bgcolor=" white">
        <center><u><b><h1>REGISTER</h1></u></b></center>
        <form action="register_connection.php " method="POST">
            <table border="1" align="center"><br><br>
                <tr>
                    <td>KTU_ID:</td>
                    <td><input type="text" name="ktuid" placeholder="Enter ID" size="40%"></td>
</tr>
<tr>
    <td>Name:</td>
    <td><input type="text" name="name" placeholder="Enter name" size="40%"></td>
</tr>
<tr>
    <td>Age:</td>
    <td><input type="text" name="age" placeholder="Enter Age" size="40%"></td>
</tr>
<tr>
    <td>Gender:</td>
    <td><input type="text" name="gender" placeholder="Enter gender" size="40%"></td>
</tr>
<tr>
    <td>Sem:</td>
    <td><input type="text" name="sem" placeholder="Enter current semester" size="40%"></td>
</tr>
<tr>
    <td>Email:</td>
    <td><input type="text" name="email" placeholder="Enter MailID" size="40%"></td>
</tr>
<tr>
    <td>Password:</td>
    <td><input type="password" name="password" placeholder="Enter Valid password" size="40%"></td>
</tr>
<tr>
    <td>RE-password:</td>
    <td><input type="password" name="repassword" placeholder="Confirm Pssword" size="40%"></td>
</tr>
<tr>
    <td colspan="2" align="center"><input type="submit" name="register" value="Register" size="40%"></td>
    </tr>
    </table>
<h2 align="right"> Have an Account? <a href="login.php">Login</a></h2>
</form>
</body>
</html>
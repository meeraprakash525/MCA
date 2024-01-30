<?php
if(isset($_POST['register']))
{
    $ktuid=$_POST['ktuid'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $sem=$_POST['sem'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];

    $conn=mysqli_connect('localhost','root','','manage');
    if(!$conn)
    {
        echo"connection failed";
    }
    else
    {
        $q="INSERT INTO cet(ktuid,name,age,gender,sem,email,password,repassword)VALUES('$ktuid','$name','$age','$gender','$sem','$email','$password','$repassword')";
        $result=mysqli_query($conn,$q);
        if($result)
        {
            echo"Inserted successfully";
        }
        else
        {
            echo"Not inserted";

        }
    }

mysqli_close($conn);
}
?>
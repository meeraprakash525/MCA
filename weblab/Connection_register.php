<?php
if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
    $age=$_POST["age"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $repassword=$_POST["repassword"];

    $conn=mysqli_connect("localhost","root"," "," web");
    if(!$conn)
    {
        echo"Connection failed";
    }
    else
    {
       $sql="INSERT INTO REGISTER(name,age,phone,email,password,repassword)VALUES('$name','$age','$phone',
       '$email','$password','$repassword')";
       $q="SELECT * FROM REGISTER WHERE password=".$POST["password"]."";
       if($result=mysqli_query($sql,$conn))
       {
        if(mysqli_num_rows($result)>0)
        {

            echo'password exist ';
            
            }
            else
            {
            
            echo'Doesn’t exist';
            
            }
            
        }
       }
    
    }


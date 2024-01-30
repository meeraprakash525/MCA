<html>
    <body>
        <center><u><b><h1>BOOK MANAGEMENT</center></h1></u></b><br><br>
        <?php
if(isset($_POST['submit']))
{
    $ano=$_POST["ano"];
    $title=$_POST["title"];
    $author=$_POST['author'];
    $edition=$_POST['edition'];
    $publish=$_POST['publish'];

    $conn=mysqli_connect('localhost','root','library');
    if(!$conn)
    {
        echo"connection failed";
    }
    else
    {
        $sql="INSERT INTO insertbook VALUES('$ano','$title','$author','$edition','$edition','$publish')";
        $res=mysqli_query($conn,$sql);
        if($res)
        {
            echo"Inserted successffully";
        }
        else
        {
            echo"Insertion failed";
        }
        mysqli_close($conn);
    }
}
    ?>
    <h3> Book information is inserted successfully </h3>
    <a href="searchbook.php"> To search for the Book information click here </a>
</body>
</html>

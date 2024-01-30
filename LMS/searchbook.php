<html>
<title>search books</title>
</head>
<body bgcolor="grey">
    <center><u><b><h1>SEARCH BOOK</center></h1></u></b><br><br>
    <form action=" searchbook.php" method="POST">
        <center>
        ENTER THE TITLE OF BOOK TO BE SEARCH:
        <input type ="text" name="title" placeholder="search book" size="55">
        <br><br>
        <input type="submit" value="submit" name="submit">
        <input type="reset" value="Reset">
</center>
    </form>
    </body>
    </html>

    <?php
    if(isset($_POST['submit']))
    {
        $conn=mysqli_connect('localhost','root',' ','library');
        $title=$_POST['title'];
        $sql="select * from insertbook where title='$title'";
        $data=mysqli_query($conn,$sql);
        echo"<table><tr><th>Book no</th><th>Title</th><th>Author</th><th>Publisher</th><th>Edition</th></tr>";
        if(mysqli_num_rows($data)>0)
        {
            while($row=mysqli_fetch_assoc($data))
            {
                echo"<tr><td>".$row['ano']."</td></tr>";
            }
        }
        else
        {
            echo"<tr><td> No data</td></tr>";
        }
    }

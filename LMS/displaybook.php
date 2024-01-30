
<!-- <html>
    <body bgcolor="87ceeb">
    <center><h2>Simple Library Management System</h2></center>
    <br> -->
    <!-- <?php
   $conn=mysqli_connect('localhost','root',' ',' library');
   if(!$conn)
   {
    echo"connection failed";
   }
   else
   {
    $search = $_REQUEST["search"];
 
    $query = "select * from insertbook where title like '%$search%'"; //search with a book name in the table book_info

    $result = mysqli_query($db,$query);
 
    if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)
 

    {
    ?>
    <table border="2" align="center" cellpadding="5" cellspacing="5">
        <tr>
            <th> Acceesion no </th>

            <th> Title </th>

            <th> Author </th>

            <th> Edition </th>

            <th> Publication </th>
        </tr>
 
        <?php while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <tr>

            <td><?php echo $row["ano"];?> </td>
            <td><?php echo $row["Title"];?> </td>
            <td><?php echo $row["Author"];?> </td>
            <td><?php echo $row["edition"];?> </td>
            <td><?php echo $row["publish"];?> </td>
        </tr>
        <?php
        }
        }
    } -->
        // else

        // echo "<center>No books found in the library by the name $search </center>" ;
        ?>  
    <!-- </table>
    </body>
</html> -->

<!-- <html>     Accession number, title, authors, edition and publisher from a web page -->
<head>
    <title>Library</title>
</head>
<body bgcolor="yellow">
    <center><u><b>BOOK MANAGEMENT</center></u></b>
    <form action="insertbook.php" method="POST">
        <table border="2" align="center">
            <tr>
                <td>Enter Accession number:</td>
                <td><input type ="text" name="ano" placeholder="Accession number"></td>
            </tr>
            <tr>
                <td>Enter the title:</td>
                <td><input type ="text" name="title" placeholder="Title"></td>
            </tr>
            <tr>
                <td>Enter the author:</td>
                <td><input type ="text" name="author" placeholder="Author name"></td>
            </tr>
            <tr>
                <td>Enter the Edition:</td>
                <td><input type ="text" name="edition" placeholder="Edition"></td>
            </tr>
            <tr>
                <td>Enter the publication:</td>
                <td><input type ="text" name="publish" placeholder="publication"></td>
            </tr>
            <tr>
            <td></td>
            <td><input type="submit" value="submit"></td>
            <td><input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
</body>
</html>
                
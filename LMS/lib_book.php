 
  <!-- Accession number, title, authors, edition and publisher from a web page --> -->
  <html>
<head>
<style>
body {
  height: 200px;
  /* background-color: red;  */
  background: rgb(34,193,195);
background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);
}
h1{
    font-family: 'Signika', sans-serif;
}
</style>
</head>
<body bgcolor="yellow">
    <center><u><b><h1>BOOK MANAGEMENT</center></h1></u></b><br><br>
    <form action="insertbook.php" method="POST">
        <h2>
        <table border="4" align="center">
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
            <td><input type="submit" value="submit"><input type="reset" value="Reset"></td>
            </tr>
        </table>
</h2>
    </form>
</body>
</html>
                
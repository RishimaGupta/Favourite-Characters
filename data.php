<!DOCTYPE html>
<html>
<head>
    <title>SQL Data Display</title>
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css.css">
</head>
<body background="background2.jpg" style="margin-top:50px; background-size:cover; background-attachment:fixed; background-repeat:no-repeat; text-align: center; font-size: 30px; font-family: Gabriola;">

<center>
    <h1 style="font-family: Vladimir Script">SQL Data</h1>
    <table>
        <tr>
            <th>Character Name</th>
            <th>Book/Series</th>
            <th>Age</th>
            <th>Dead/Alive</th>
        </tr>
        <?php
            $conn = mysqli_connect("localhost","root","","wad");
            $sql = "SELECT * FROM characters";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo"<tr><td>". $row["Character_Name"] ."</td><td>". $row["Book"] ."</td><td>". $row["Age"] ."</td><td>". $row["Dead_Or_Alive"]."</td></tr>";
                }
                echo"</table>";
            }
            else {
                echo "0 Result";
            }
            $conn-> close();
        ?>
    </table>
</center>
<br>
<form action="form.html" method="post">
    <input type="submit" value="Home">
</form>
</body>
</html>
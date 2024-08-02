<!DOCTYPE html>
<html>
<head>
    <title>Archive</title>
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
</head>
<body background="background1.jpg" style="margin-top:325px; background-size:cover; margin-left: 550px; font-size: 75px; font-family: Kunstler Script;">
<?php
session_start();
    if($_SERVER['REQUEST_METHOD']=='POST'){

        $charname = $_POST['charname'];
        $bookname = $_POST['bookname'];
        $age = $_POST['age'];
        $doa = $_POST['doa'];
    } 
    $con = new mysqli('localhost','root','','wad');
    if ($con) {
        $sql = "insert into characters(Character_Name,Book,Age,Dead_Or_Alive) values('$charname','$bookname','$age','$doa')";
        $result=mysqli_query($con,$sql);
        if ($result) {  
            echo "<b>Data Added Successfully!</b>";
        }
        else {
            die(mysqli_error($con));
        }
    }  
    else {
        die(mysqli_error($con));
    }
?>
<div style="padding-left:150px">
    <table>
        <tr>
            <td>
                <form action="form.html" method="post">
                    <input type="submit" value="Home" style="width:150%; border-radius: 7px; background-color:pink; height: 35px; font-family: Kunstler Script; font-size: 20px; font-weight: bold;">
                </form>
            </td>

            <td style="padding-left:40px">
                <form action="data.php" method="post">
                    <input type="submit" value="Show Data" style="width:150%; border-radius: 7px; background-color:pink; height: 35px; font-family: Kunstler Script; font-size: 20px; font-weight: bold;">
                </form>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
			
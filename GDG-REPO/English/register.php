<?php 
    include("connection.php");
    
    ?>
    
<html>
    <head>
        <title>Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <div id="form">
            <h1>Register Form</h1>
            <form method="POST">
                <label>Username: </label>
                <input type="text" id="user" name="user"></br></br>
                <label>Password: </label>
                <input type="password" id="pass" name="pass"></br></br>
                <input type="submit" id="btn" value="Register" name = "submit"/>
            </form>
        </div>
        <?php
            $con=mysqli_connect('localhost','root','','gdg-hackathon');
            if(isset($_POST['submit'])){
                $username=$_POST['user'];
                $password=$_POST['pass'];
                $query="INSERT INTO `list` (`username`, `password`) VALUES ('$username','$password')";
                $run=mysqli_query($con,$query);
            }

        ?>
    </body>
</html>
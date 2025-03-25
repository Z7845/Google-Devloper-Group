<?php 
    include("connection.php");
?>
    
<html>
    <head>
        <title>രജിസ്റ്റർ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style class="css">
            body{
    background-color: blueviolet;
}

#form{
    background-color: rgb(255, 255, 255);
    width:25%;
    border-radius: 4px;
    margin:120px auto;
    padding:50px;
    box-shadow: 10px 10px 5px rgb(82, 11, 77);
}

#btn{
    color:rgb(255, 255, 255);
    background-color: rgb(108, 22, 189);
    padding:10px;
    font-size: large;
    border-radius: 10px;
}

@media screen and (max-width: 570px) {
    #form {
      width: 65%;
      margin-left:none;
      padding:40px;
    }
  }
        </style>
    </head>
    <body>
        
        <div id="form">
            <h1>രജിസ്റ്റർ ഫോം</h1>
            <form method="POST">
                <label>ഉപയോക്തൃനാമം: </label>
                <input type="text" id="user" name="user"></br></br>
                <label>പാസ്വേഡ്: </label>
                <input type="password" id="pass" name="pass"></br></br>
                <input type="submit" id="btn" value="രജിസ്റ്റർ" name="submit"/>
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
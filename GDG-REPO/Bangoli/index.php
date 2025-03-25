<?php 
    include("connection.php");
    include("login.php");
    ?>
    
<html>
    <head>
        <title>লগইন</title>
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
            <h1>লগইন ফর্ম</h1>
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                <label>ব্যবহারকারীর নাম: </label>
                <input type="text" id="user" name="user"></br></br>
                <label>পাসওয়ার্ড: </label>
                <input type="password" id="pass" name="pass"></br></br>
                <input type="submit" id="btn" value="লগইন" name="submit"/>
            </form>
            <form action="register.php" method="POST">
    <input type="submit" value="নিবন্ধন করুন" id="btn" name="btn">
    <h2>
        নোট:
        যদি নতুন ব্যবহারকারী হন তবে প্রথমে নিবন্ধন করুন
    </h2>
</form>
        </div>
        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert("ব্যবহারকারীর নাম এবং পাসওয়ার্ড ক্ষেত্র খালি!!!");
                    return false;
                }
                else if(user.length==""){
                    alert("ব্যবহারকারীর নাম ক্ষেত্র খালি!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert("পাসওয়ার্ড ক্ষেত্র খালি!!!");
                    return false;
                }
                
            }
        </script>
    </body>
</html>
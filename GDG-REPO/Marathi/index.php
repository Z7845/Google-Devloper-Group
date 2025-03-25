<?php 
    include("connection.php");
    include("login.php");
    ?>
    
<html>
    <head>
        <title>लॉगिन</title>
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
            <h1>लॉगिन फॉर्म</h1>
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                <label>युजरनेम: </label>
                <input type="text" id="user" name="user"></br></br>
                <label>पासवर्ड: </label>
                <input type="password" id="pass" name="pass"></br></br>
                <input type="submit" id="btn" value="लॉगिन" name="submit"/>
            </form>
            <form action="register.php" method="POST">
    <input type="submit" value="नोंदणी करा" id="btn" name="btn">
    <h2>
        नोट:
        जर तुम्ही नवीन वापरकर्ता असाल तर प्रथम नोंदणी करा
    </h2>
</form>
        </div>
        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert("युजरनेम आणि पासवर्ड क्षेत्र रिक्त आहे!!!");
                    return false;
                }
                else if(user.length==""){
                    alert("युजरनेम क्षेत्र रिक्त आहे!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert("पासवर्ड क्षेत्र रिक्त आहे!!!");
                    return false;
                }
                
            }
        </script>
    </body>
</html>

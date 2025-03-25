<?php 
    include("connection.php");
    include("login.php");
    ?>
    
<html>
    <head>
        <title>લોગિન</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
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
            <h1>લોગિન ફોર્મ</h1>
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                <label>યુઝરનામ: </label>
                <input type="text" id="user" name="user"></br></br>
                <label>પાસવર્ડ: </label>
                <input type="password" id="pass" name="pass"></br></br>
                <input type="submit" id="btn" value="લોગિન" name="submit"/>
            </form>
            <form action="register.php" method="POST">
    <input type="submit" value="રજીસ્ટર કરો" id="btn" name="btn">
    <h2>
        નોંધ:
        જો નવા વપરાશકર્તા છો તો પહેલા નોંધણી કરો
    </h2>
</form>
        </div>
        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert("યુઝરનામ અને પાસવર્ડનું ક્ષેત્ર ખાલી છે!!!");
                    return false;
                }
                else if(user.length==""){
                    alert("યુઝરનામનું ક્ષેત્ર ખાલી છે!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert("પાસવર્ડનું ક્ષેત્ર ખાલી છે!!!");
                    return false;
                }
                
            }
        </script>
    </body>
</html>
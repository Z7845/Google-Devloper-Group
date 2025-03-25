<?php 
    include("connection.php");
    include("login.php");
    ?>
    
<html>
    <head>
        <title>ലോഗിൻ</title>
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
            <h1>ലോഗിൻ ഫോം</h1>
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                <label>ഉപയോക്തൃനാമം: </label>
                <input type="text" id="user" name="user"></br></br>
                <label>പാസ്വേഡ്: </label>
                <input type="password" id="pass" name="pass"></br></br>
                <input type="submit" id="btn" value="ലോഗിൻ" name="submit"/>
            </form>
            <form action="register.php" method="POST">
    <input type="submit" value="രജിസ്റ്റർ ചെയ്യുക" id="btn" name="btn">
    <h2>
        കുറിപ്പ്:
        നിങ്ങൾ പുതിയ ഉപയോക്താവാണെങ്കിൽ, ആദ്യം രജിസ്റ്റർ ചെയ്യുക
    </h2>
</form>
        </div>
        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert("ഉപയോക്തൃനാമവും പാസ്വേഡും ശൂന്യമാണ്!!!");
                    return false;
                }
                else if(user.length==""){
                    alert("ഉപയോക്തൃനാമം ശൂന്യമാണ്!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert("പാസ്വേഡ് ശൂന്യമാണ്!!!");
                    return false;
                }
                
            }
        </script>
    </body>
</html>
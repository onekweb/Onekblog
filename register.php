<?php include_once("connection/db.php");?>
<!DOCTYPE html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <title>Registration</title>
        <meta charset="utf-8">
    </head>

    <body>
       <div id="loginCOntent">
            <form action="register-success.php" method="POST" id="myForm">
                <h3>Registration</h3>
                    <hr/>
                        <label for="username">Username</label><br/>
                        <input type="text" name="username"    class="inputField"><br/>
                        <label for="password">Password</label><br/>
                        <input type="password" name="password" class="inputField"><br/>
                        <label for="username">E-mail</label><br/>
                        <input type="text" name="email"    class="inputField"><br/><br/>
                        <input type="submit" value="Register" class="submit-text"><br/>                   
                        <hr/ class="lineBttom">
                        
            </form>      
        </div>
    </body>
</html>
<?php
mysqli_close($connection);
?>
<?php include_once("connection/db.php");?>
<!DOCTYPE html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <title>Welcome to my login page</title>
        <meta charset="utf-8">
    </head>

    <body>
       <div id="loginCOntent">
            <form action="index.php" method="POST" id="myForm">
                <h3>Sign in</h3>
                    <hr/>
                        <label for="username">Username</label><br/>
                        <input type="text" name="username"    class="inputField"><br/>
                        <label for="password">Password</label><br/>
                        <input type="password" name="password" class="inputField"><br/><br/>   
                        <input type="submit" value="Login" class="submit-text"><br/>                   
                        <hr/ class="lineBttom">
                         <!--   
                        <label class="registerTxt1">New register?</label><label class="registerTxt2"> Register now</label>
                        -->
            </form>      
        </div>
    </body>
</html>
<?php
mysqli_close($connection);
?>
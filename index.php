<?php include_once("connection/db.php");?>
<?php include_once("includes/head.php");?>

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
                           
                        <label class="registerTxt1"><a href="register.php">New register?</a></label><label class="registerTxt2"><a href="register.php"> Register now</a></label>
                        
            </form>      
        </div>
    </body>
</html>
<?php
mysqli_close($connection);
?>
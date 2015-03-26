<?php include_once("connection/db.php");?>
<?php include_once("includes/head.php");?>
<?php 
if(isset($_POST['username']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$mail = $_POST['email'];			
$query = "INSERT INTO users (username, password, mail) VALUES ('$username', '$password', '$mail')";
$connection->query($query);
echo "Welcome". $username;
}
?>
    <body>
       <div id="loginCOntent">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="myForm">
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
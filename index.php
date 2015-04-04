<?php 
session_start();
include_once("connection/db.php");
include_once("includes/head.php");
if(isset($_POST['username']))
{
$username = mysqli_real_escape_string($connection, $_POST['username']);
$password = md5($_POST['password']); 
$query =    "SELECT * FROM users WHERE username ='$username' AND password ='$password'";
$result = mysqli_query($connection, $query);
$count = mysqli_num_rows($result);
if($count == 0)
{
	echo "<p style='color:red; text-align:center;'>Incorrect password</p>";
}
elseif($count == 1)
{
	$_SESSION['username'] = $username;
	header("Location:login.php");
} 
}
?>
    <body>
       <div id="loginCOntent">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" id="myForm">
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
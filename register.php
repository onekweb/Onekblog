<?php include_once("connection/db.php");?>
<?php include_once("includes/head.php");?>
<?php 
if(isset($_POST['username']))
{
	if(!empty($_POST['username']) && ($_POST['password']) && ($_POST['username']) )
	{
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$password = md5($_POST['password'])	;
	$mail = mysqli_real_escape_string($connection, $_POST['email']);			
	$queryselect = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($connection, $queryselect);
		if(mysqli_num_rows($result)==0)
		{
		$queryinsert = "INSERT INTO users (username, password, mail) VALUES ('$username', '$password', '$mail')";
		$connection->query($queryinsert);
		header("Location: register-success.php");									
		}else
		{
		echo "Usename ".$username." is alreday exists";	
		} 	 
	}
}
?>
    <body>
       <div id="loginCOntent">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" id="myForm">
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
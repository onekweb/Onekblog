<?php include_once("connection/db.php");?>
<?php include_once("includes/head.php");?>
    <body>
       <div id="loginCOntent">
            <form action="#" method="POST" id="myForm1">
                <h3 style="color:'#000'">Welcome to our register</h3>
                    <hr/>
                     	<h5 style="color:#000; text-align:'center;'">The list of our member</h5>
                     	<table>
                     		<?php 
							$query = "SELECT * FROM users";
							$result = mysqli_query($connection, $query);
							if($result->num_rows > 0)
							{	while($row = $result->fetch_assoc())
								{
							?>
                     		<tr>
                     			<td style="color:#000;"><?php echo"	". $row['username']."";}}?></td>
                     		</tr>
                     	</table>
                     	                  
                     <hr/ class="lineBttom">
                     <h4 style="color:#000;"><a href="index.php">Go to login page</a></h4>
                        
            </form>      
        </div>
    </body>
</html>
<?php
mysqli_close($connection);
?>
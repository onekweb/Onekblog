<?php include_once("connection/db.php");?>
<?php include_once("includes/head.php");?>
    <body>
       <div id="loginCOntent">
            <form action="#" method="POST" id="myForm">
                <h3>Yeahhhhhhhhhhh!</h3>
                    <hr/>
                     	<h4 style="color:#000;">The list of our member..</h4>
                     	<table>
                     		<tr>
                     			<td style="color:#000;">The member will appear here...</td>
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
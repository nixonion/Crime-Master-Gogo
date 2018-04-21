
<!DOCTYPE html>
	    <html>
	    	<head>
	    		<title>Search</title>
	    		<style>
	    			body{
    					font-family: arial; 
    					font-size: 80%; 
    					line-height: 1.2em; 
    					width: 100%; 
    					margin: 0; 
    					background: #eee;
					}
					fieldset{
						background: white;
						margin: 10% 20%;
					;
					}
	    		</style>
	    	</head>
	    	<body>
	    		<center>
	    			<fieldset>
	    				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
	    					<p>Are you sure you want to log out of this site?</p>
	    				  <input type="hidden" value="1" name="user" id="user">
	    				  <input type="submit" class="btn btn-primary" name="submit" value="Log Out">
	    				  <br><br>
	    				
	    				</form> 
	    				</fieldset>
	    				</center>			
	    	</body>
	    </html>

<?php
include "cd.php";

if(isset($_POST['user']))
{
session_start();
unset($_SESSION['user']);
header('Location: http://localhost/Crime%20master%20gogo/index.php');
}

?>
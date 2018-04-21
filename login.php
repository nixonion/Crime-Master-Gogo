
<!DOCTYPE html>
	    <html>
	    	<head>
	    		<meta charset="utf-8">
	    		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	    		<link rel="stylesheet" type="text/css" href="assets/css/boot.css">
	    		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	    		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	    		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	    		<link rel="stylesheet" type="text/css" href="assets/css/style_common.css">
	    		<link rel="stylesheet" type="text/css" href="assets/css/style1.css">
	    		<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic'>
	    		<script src="assets/js/modernizr.custom.69142.js"></script>
	    		<script src="assets/js/jquery-1.10.1.min.js"></script>
	    		<script src="assets/js/bootstrap.min.js" ></script>
	    		<title>Login</title>
	    		<style>
	    			body{
    					font-family: arial; 
    					font-size: ; 
    					line-height: 1.2em; 
    					width: 100%; 
    					margin: 0; 
    					background: #eee;
					}
					fieldset{
						width: 30%;
						background: ;
						margin: 10% 20%;
					;
					}
	    		</style>
	    	</head>
	    	<body>
	    		<nav class="navbar navbar-inverse navbar-fixed-top">
	    		  <div class="container-fluid">
	    		    <div class="navbar-header">
	    		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
	    		      <a class="navbar-brand page-scroll" href="#page-top">Crime Master Gogo</a></div>
	    		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    		      <ul class="nav navbar-nav navbar-right">
	    		        <li><a class="page-scroll" href="index.php#page-top">Home</a></li>          
	    		        <li><a class="page-scroll" href="index.php#about">Features</a></li>
	    		        <li><a class="page-scroll" href="index.php#team">Team</a></li>
	    		        <li><a class="page-scroll" href="index.php#contact">Contact</a></li>
	    		        <?php
	    		        session_start();

	    		        if(!isset($_SESSION['user']))
	    		        {
	    		        	echo "<li><a class='page-scroll' href='Login.php'>Log in</a></li>";
	    		        }
	    		        else
	    		        {
	    		        	//echo "<form action='' method='post'>";
	    		        	echo "<li><a class='page-scroll' href='Logout.php'>Log out</a></li>";
	    		        	//echo "<button type='submit' class='btn btn-primary'>Send Message</button>";
	    		        	//echo "</form>";
	    		        }
	    		        ?>
	    		        
	    		      </ul>
	    		    </div>
	    		  </div><!-- /.container-fluid -->
	    		</nav>
	    		<center>
	    			<fieldset>
	    				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
	    				  Username : <input type="text" value="" class="form-control"  name="user" id="user">
	    				  <br><br>
	    				  Password : <input type="password" class="form-control" value="" name="pswd" id="pswd">
	    				  <br><br>
	    				  <input type="submit" name="submit" class='btn btn-primary' value="Log In">
	    				  <br><br>
	    				  <a href="signup.php">Sign Up</a>
	    				</form> 
	    				</fieldset>
	    				</center>			
	    	</body>
	    </html>

<?php
include "cd.php";

if(isset($_POST['user']))
{
$u=$_POST['user'];
$p=$_POST['pswd'];

$sql="SELECT * FROM user where username='$u' AND password='$p';";
$result = $conn1->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
   	session_start();
   	$_SESSION['user']['name'] =$row['username'];
   	$_SESSION['user']['contact'] =$row['contact'];
   	$_SESSION['user']['email'] =$row['email'];
   	$_SESSION['user']['type'] =$row['type'];
   	$_SESSION['user']['actualname'] =$row['name'];
   	//print_r($_SESSION['user']);
   	header('Location: http://localhost/Crime%20master%20gogo/index.php');
   	 
    }
}
else
{
	echo "Invalid User";
}
}
?>
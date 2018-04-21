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
	    		<title>Search</title>
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
						background: ;
						width: 30%;
						margin: 10% 20%;
					;
					}
	    		</style>
	    	</head>
	    	<body>
	    		<center>
	    			<fieldset>
	    				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
	    					Name : <input type="text" class="form-control" value="" name="name" id="name">
	    					<br><br>
	    				  Username : <input type="text" class="form-control" value="" name="user" id="user">
	    				  <br><br>
	    				  Password : <input type="password" class="form-control" value="" name="pswd" id="pswd">
	    				  <br><br>
	    				  Email : <input type="email" class="form-control" value="" name="email" id="email">
	    				  <br><br>
	    				  contact : <input type="text" class="form-control" value="" name="contact" id="contact">
	    				  <br><br>
	    				  <input type="radio" name="type" value="0" checked> Normal User
	    				  <input type="radio" name="type" value="1"> Lawyer<br>
	    				  <br>  
	    				  <a>If you are a lawyer, Enter your Registration Number*</a><br>
	    				  <input type="number" class="form-control" value="" name="rno" id="rno">
	    				  <br><br><input type="submit" class='btn btn-primary' name="submit" value="Submit">
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

$user=$_POST['user'];
$pswd=$_POST['pswd'];
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$type=$_POST['type'];
$rno=$_POST['rno'];

$sql = "INSERT INTO user(username,password,email,contact,type,rno,name) VALUES ('$user','$pswd','$email','$contact',$type,'$rno','$name');";


if ($conn1->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Location: http://localhost/Crime%20master%20gogo/login.php');
} else {
	echo "Username or email or contact number is already used";
    //echo "Error: " . $sql . "<br>" . $conn1->error;
}
}
?>
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
						margin: ;
						color:#cccccc;
					;
					}
	    		</style>
	    	</head>
<?php
include "cd.php";
echo "<br><br><br><br><br>";
session_start();
if (isset($_SESSION['user'])) {
echo "<center><h3 class='section-heading' style='color:#3680C1'><a href='offer.php'>Your Offers</a></h3></center>";
}

$sql="SELECT * FROM contract;";
$result = $conn1->query($sql);
echo "<center>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	 echo "<br><h2>".$row['name']."</h2>";
    	 echo "<h5>".$row['description']."</h5>";
    	// echo "<h3>".$row['amount']."</h3>";
    	 if (isset($_SESSION['user'])) {
    	 	if ($_SESSION['user']['type']=='1') {
    	 		
    	 	
    	 echo "<form action='accept_contract.php' method='post'><input type='hidden' name='accept' id='accept' value='".$row['cid']."'><input type='submit' name='submit' class='btn btn-primary' value='Accept Contract'></form><br>";}}

    }
}
echo "</center>";

if(isset($_POST['subject']))
{

$name=$_POST['subject'];
$desc=$_POST['desc'];
//$amount=$_POST['amount'];
$owner=$_POST['owner'];

$sql = "INSERT INTO contract(name,description,owner) VALUES ('$name','$desc','$owner');";


if ($conn1->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Location: http://localhost/Crime%20master%20gogo/contract.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn1->error;
}
}

?>



	    	
	    		
	    	
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
	    	<?php if(isset($_SESSION['user'])){ ?>
	    	<fieldset>
	    	<section id="contact">
	    		<center>
	    			<div style='width: 60%;margin-left:;'>
	   				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
	    				  <p>Subject : </p><input type="text" class="form-control" name="subject" id="subject">
	    				  <br>
	    				  <p>Description : </p><textarea name="desc" id="desc" class="form-control" rows="4" columns="50"></textarea>
	    				  <br><br><br>
	    				  <?php
	    				  echo "<input type='hidden' name='owner' id='owner' value='".$_SESSION['user']['name']."'>";
	    				  ?>
	    				  <input type="submit" name="submit" class="btn btn-primary" value="Put a Contract">

	    				</form> 
	    				</div>
	    				</center>
	    				</fieldset>
	    	</section>

	    		
	    	</body>
	    </html>
<?php
		}
	    $conn1->close();
?>
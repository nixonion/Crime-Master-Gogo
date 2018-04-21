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
						background: white;
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

<?php
include "cd.php";
echo "<br><br><br><br><br>";
session_start();
echo "<div style='margin-left:20%;width:60%;'>";
$name=$_SESSION['user']['name'];
$sql="SELECT * FROM contract WHERE owner='$name';";
$result = $conn1->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
    	echo "<form action='accept_offer.php' method=post>";
    	echo "<br><h2>".$row['name']."</h2>";
    	 echo "<h5>".$row['description']."</h5>";
    	 $cid=$row['cid'];
    	 $sql1="SELECT * FROM offers WHERE cid=$cid ORDER BY amount;";
    	 $result1 = $conn1->query($sql1);
    	 if ($result1->num_rows > 0) {
    	     // output data of each row
    	     while($row1 = $result1->fetch_assoc()) 
    	     {
    	     	$id=$row1['oid'];
    	     	$cash=$row1['amount'];
    	     	echo "<input type='radio' name='oid' value='$id'> $cash<br>";
    	     }
    	 }
    	 echo "<br><input type='submit' name='submit' class='btn btn-primary' value='Accept Offer'>";
    	 echo "</form>";


    }
}
echo "</div>";

?>
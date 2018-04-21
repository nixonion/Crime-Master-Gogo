<?php include "cd.php"; ?>
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
	    		<title>Accept Contract</title>
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
						background: #fff;
						margin: 10% 20%;
						color:#cccccc;
					;
					}
	    		</style>
	    	</head>
	    	<body>
	    		<center>
	    			<fieldset>
	    				<section id="contact">
	   				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
	    				  <h2></h2>
	    				  <br><br><br>
	    				  <?php
	    				  if(isset($_POST['accept'])){
	    				  
	    				  $c=$_POST['accept'];
	    				  $sql="SELECT * FROM contract where cid=$c;";
	    				  $result = $conn1->query($sql);
	    				  if ($result->num_rows > 0) {
	    				      // output data of each row
	    				      while($row = $result->fetch_assoc()) {
	    				      	$cname=$row['name'];
	    				      	 echo "<br><h2>".$row['name']."</h2>";
	    				      	 echo "<h4>".$row['description']."</h4>";
	    				      	 //echo "<h3>".$row['amount']."</h3>";
	    				      	 $owner=$row['owner'];

	    				      }
	    				  }

	    				  
	    				  echo "<input type='number' name='amount' id='amount' placeholder='Your bid'>";
	    				  echo "<input type='hidden' name='confirm' id='confirm' value='$owner'><br>";
	    				  echo "<input type='hidden' name='cname' id='cname' value='$cname'><br>";
	    				  echo "<input type='hidden' name='cid' id='cid' value='$c'>";
	    					}
	    				  ?>
	    				  
	    				  <input type="submit" name="submit" class="btn btn-primary" value="Bid">
	    				  <p>If you click on bid, your offer will be sent to the owner of the contract. </p>

	    				</form> 
	    				</section>
	    				</fieldset>
	    				</center>

	    		
	    	</body>
	    </html>

<?php
if(isset($_POST['confirm']))
{
session_start();

$confirm=$_POST['confirm'];
$cname=$_POST['cname'];
$cid=$_POST['cid'];
$amount=$_POST['amount'];
$biduser=$_SESSION['user']['name'];

$acceptemail=$_SESSION['user']['email'];
$acceptcontact=$_SESSION['user']['contact'];

$sql="SELECT * FROM user where username='$confirm';";
$result = $conn1->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	 $givercontact=$row['contact'];
    	 $giveremail=$row['email'];


    }
}



$to = $giveremail;
$subject = "Offer for Your Contract : $cname!";
$txt = "An offer of Rs. $amount has been given for your contract '$cname'";
$headers = "From: snmahdi97@gmail.com";

mail($to,$subject,$txt,$headers);



$sql = "INSERT INTO offers(cid,amount,bidder) VALUES ($cid,$amount,'$biduser');";
if ($conn1->query($sql) === TRUE) {
   // echo "New record created successfully";
	header('Location: http://localhost/Crime%20master%20gogo/contract.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn1->error;
}

/*
$sql = "DELETE FROM contract WHERE cid=$cid;";

if ($conn1->query($sql) === TRUE) {
   // echo "New record created successfully";
	header('Location: http://localhost/Crime%20master%20gogo/index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn1->error;
}
*/
}

?>
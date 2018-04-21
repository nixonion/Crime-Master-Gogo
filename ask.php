
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
    					background:#eee;
					}
					fieldset{
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
	    	<?php
	    	session_start();
	    	if(isset($_SESSION['user']))
	    	{
	    	?>
	    	
	    		<center>
	    			<fieldset>
	    				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
	    				  <input type="text" class="form-control" name="question" id="question" placeholder="Ask Question eg. What is IPC?">
	    				  <br>
	    				  <br><br>
	    				  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
	    				</form> 
	    				</fieldset>
	    				</center>
	    				<div style='width: 80%;margin-left: 10%; color:#cccccc;margin-bottom: 10%;'>
	    				<section id="contact">
	    				<div style='width: 60%;margin-left: 20%;'>

	    		
	    	
<?php
}

	    				$servername = "localhost";
	    				$username = "root";
	    				$password = "";
	    				$db="cmg";

	    				// Create connection
	    				$conn = new mysqli($servername, $username, $password,$db);

	    				// Check connection
	    				if ($conn->connect_error) 
	    				{
	    				   die("Connection failed: " . $conn->connect_error);
	    				} 
	    				//echo "Connected successfully<br>";

	    					if(isset($_POST['question']))
	    					{
	    						$q=$_POST["question"];
	    						$sql = "INSERT INTO questions(question) VALUES ('$q');";

	    						if ($conn->query($sql) === TRUE) {
	    						    echo "New record created successfully";
	    							header('Location: http://localhost/Crime%20master%20gogo/ask.php');
	    						} else {
	    						    echo "Error: " . $sql . "<br>" . $conn->error;
	    						}

	    						


	    					}
	    					$sql1 = "SELECT * FROM questions;";
	    					$result = $conn->query($sql1);
	    					if ($result->num_rows > 0) {
	    					    // output data of each row
	    					    while($row = $result->fetch_assoc()) {

	    					    	echo "<br><h3>Q. ".$row["question"]."</h3><br>";

	    							$sql2="SELECT * FROM answers WHERE qid=".$row["id"].";";
	    							$result1 = $conn->query($sql2);
	    							if ($result1->num_rows > 0) {
	    							    // output data of each row
	    							    while($row1 = $result1->fetch_assoc()) {
	    							    	 echo "A. ".$row1['answer']."<br><br>";
	    							    }
	    							}
	    					        if(isset($_SESSION['user']))

	    					        {
	    					        	if ($_SESSION['user']['type']=='1') {
	    					        		

	    					        	
	    					        echo "<form action='answer.php' method='post'>
	    					        		<input type='hidden' name='que' value='".$row["id"]."'>
	    				  					<input type='text' class='form-control' name='answer' id='answer'>
	    				  					<br>
	    				  					<input type='submit' class='btn btn-primary' name='submit' value='Answer'>
	    									</form> ";
	    								}}
	    					    }
	    					}

	    					$conn->close();
?>
	</div>
	</section>
	</div>


	</body>
</html>
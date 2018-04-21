<?php
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



	$s=$_POST["crime"];
	$p=explode(" ",$s);
	//echo "$p[0]<br>";

	$n=count($p);
	if($p[0]=="")
	{
		echo "<br> 0 results";
	}
	else{
	//echo $n."<br>";
	$sql = "SELECT * FROM codes WHERE";
	$sql = $sql." CODE LIKE '%".$p[0]."%'";
	for($i=1;$i<$n;$i++)
	{
		$sql = $sql." AND CODE LIKE '%".$p[$i]."%'";
		//$result = $conn->query($sql);
		
	}
	//echo $sql;
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) 
	    {
		echo "<br>";
		$r=$row["IPC"];
		echo "<h1>";
		highlight_string($r);
		echo "</h1  >";
		echo "<br>";
		//echo $row["CODE"];
		$m=$row["CODE"];
		$m1=explode(" ",$m);
		$s=count($m1);
		highlight_string($m);
		}
	} else {
	    //echo "<br> 0 results";
	    echo "<br> 0 results";
	}
}
	$conn->close();


?>

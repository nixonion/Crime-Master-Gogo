<?php
include "cd.php";
//echo "<br><br><br><br><br>";
session_start();
if (isset($_POST['oid'])) {

$oid=$_POST['oid'];
//echo $oid;
$sql="SELECT * FROM offers where oid=$oid;";
$result = $conn1->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$cid=$row['cid'];
		$amount=$row['amount'];
		$bidder=$row['bidder'];
	}
}

$sql="SELECT * FROM contract where cid=$cid;";
$result = $conn1->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$cname=$row['name'];
		$cdesc=$row['description'];
		
	}
}


$sql="SELECT * FROM user where username='$bidder';";
$result = $conn1->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	 $givercontact=$row['contact'];
    	 $giveremail=$row['email'];
    	 $bidname=$row['name'];


    }
}

$acceptemail=$_SESSION['user']['email'];
$acceptcontact=$_SESSION['user']['contact'];
$acceptname=$_SESSION['user']['actualname'];

$to = $giveremail;
$subject = "Your bid for contact '$cname' is accepted!";
$txt = "Dear Mr. $bidname \n\n Your offer For the contact :\n $cname \n $cdesc \n\n of $amount has been accepted by Mr. $acceptname . \n\n Contact The contract Owner through given details\n\n number : $acceptcontact \n email : $acceptemail ";
$headers = "From: snmahdi97@gmail.com";

mail($to,$subject,$txt,$headers);

$to = $acceptemail;
$subject = "Details of your contractor";
$txt = "Dear Mr. $acceptname \n\n Your Contract :\n $cname \n $cdesc \n\n will be taken care by Mr. $bidname for the amount Rs. $amount . \n\n Contact The contractractor through given details\n\n number : $givercontact \n email : $giveremail ";
$headers = "From: snmahdi97@gmail.com";

mail($to,$subject,$txt,$headers);

$sql = "DELETE FROM contract WHERE cid=$cid;";

if ($conn1->query($sql) === TRUE) {
   // echo "New record created successfully";
	//header('Location: http://localhost/Crime%20master%20gogo/index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn1->error;
}
$sql = "DELETE FROM offers WHERE cid=$cid;";

if ($conn1->query($sql) === TRUE) {
   // echo "New record created successfully";
	header('Location: http://localhost/Crime%20master%20gogo/offer.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn1->error;
}

}
else
{
	header('Location: http://localhost/Crime%20master%20gogo/offer.php');
}
?>
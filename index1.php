<?php
include "cd.php";

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$to = $email;
$subject = "Thanks For Your Feedback";
$txt = "We have received your feedback. It will be processed and you will be contacted accordingly.";
$headers = "From: snmahdi97@gmail.com" . "\r\n" .
"CC: issue.kissue000@gmail.com";

mail($to,$subject,$txt,$headers);

$to = "issue.kissue000@gmail.com";
$subject = "Feedback";
$txt = $message."\n\n".$name."\n".$phone."\n".$email;
$headers = "From: snmahdi97@gmail.com";

mail($to,$subject,$txt,$headers);

$sql = "INSERT INTO feedback VALUES ('$name','$email','$phone','$message')";

if ($conn1->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Location: http://localhost/Crime%20master%20gogo/index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn1->error;
}

$conn1->close();
?>
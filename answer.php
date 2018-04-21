<?php
include "cd.php";

$qid=$_POST['que'];
$ans=$_POST['answer'];




$sql = "INSERT INTO answers(answer,qid) VALUES ('$ans','$qid');";

if ($conn1->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Location: http://localhost/Crime%20master%20gogo/ask.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn1->error;
}

$conn1->close();
?>
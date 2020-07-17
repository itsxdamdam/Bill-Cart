<?php

  // include db connection
	include('index.html');
	
// get value of email on submit
  $email = $_POST['email'];

  $conn = mysqli_connect('zpfp07ebhm2zgmrm.chr7pe7iynqr.eu-west-1.rds.amazonaws.com', 'px95pxfd63yfdjye', 'dkmew86h2sgetdst', 'qpzmhnk76qjjjgf9');
	// Check connection
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
	echo "Connection was successfully established!";
	
		$stmt = $conn->prepare("insert into form(email) values(?)");
		// $stmt->bind_param("s", $email);
		// $execval = $stmt->execute();
		echo "Registration successfully...";
		// $stmt->close();
		$conn->close();

?>
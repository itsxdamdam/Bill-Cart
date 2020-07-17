<?php

// get value of email on submit
  $email = $_POST['email'];

  $conn = new mysqli('localhost','root','','final');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into form(email) values(?)");
		$stmt->bind_param("s", $email);
		$execval = $stmt->execute();
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}

	  // connect to database
  	$conn = mysqli_connect('ijj1btjwrd3b7932.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'belt5wag26sxy7ks', 'rsuri7ug67fj7eua', 'mc5rvzvpp1im6ely');

	  // check connection
	  if(!$conn) {
	    echo 'connection error: ' . mysqli_connect_error();
  }

?>

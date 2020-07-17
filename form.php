<?php

 // include db connection
  include('config/db_connect.php');

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

	// create sql
      $sql = "INSERT INTO users(email) VALUES('$email')";

      if(mysqli_query($conn, $sql)) {
        // success
        echo "<script>alert('email saved successfully');</script>";
        $email = '';
      } else {
        // error
        echo 'query error: ' . mysqli_error($conn);
      }
    

?>

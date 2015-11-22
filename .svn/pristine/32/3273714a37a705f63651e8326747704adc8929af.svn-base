<?php
	
	//database
	
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db = "event";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $db);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 


	// Form handling
	 $firstName = $_POST['firstName'];
	 $lastName = $_POST['lastName'];
	 $name  = $firstName." ".$lastName ;
     $code= md5(uniqid('5'));
	 $email = $_POST['email'];
	 $phone = $_POST['phone'];
	 $address = $_POST['address'];
    if (($firstName == "") or
        ($lastName == "") or
        ($email == "") or
        ($phone == "") or
        ($address == "")){
        echo "Please fill all the form correctly!";
    }
else{
	 if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		$sql = "INSERT INTO guest (event_id, track_code, email, name, address, phone) VALUES ('5','".$code."', '".$email."','".$name."','".$address."','".$phone."')";
		if (mysqli_query($conn, $sql)) {
		    echo "New user has registered successfully.";
		} else {
		    echo "Some thing error.<br>Please contact the administrator.";
		}
}
		mysqli_close($conn);
	
	 
	
?>
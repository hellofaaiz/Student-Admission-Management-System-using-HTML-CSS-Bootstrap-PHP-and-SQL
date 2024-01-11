<?php
	$Full_name = $_POST['Full_name'];
	$Email = $_POST['Email'];
	$User_name = $_POST['User_name'];
	$Password = $_POST['Password'];
    $C_Password = $_POST['C_Password'];
	$Acc_Type = $_POST['Acc_Type'];

	// Database connection
	$conn = new mysqli('localhost','root','','admission_system');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration_details(Full_name, Email, User_name, Password,C_Password, Acc_Type) values( ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssss", $Full_name, $Email, $User_name, $Password,$C_Password, $Acc_Type);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
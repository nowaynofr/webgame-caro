<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	$conn = new mysqli('localhost','root', '','btlphp');
	$sql = "SELECT * FROM member WHERE username = '$username'";
	$result = $conn->query($sql)->fetch_assoc();
	
	if($result['password'] == $password){
		header('Location: http://localhost/BTL/loading.html');
	} else{
		echo "Dang nhap that bai";
	}
	$conn->close();
 ?>
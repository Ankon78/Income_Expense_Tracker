<?php
    
	function getConnection(){
		$host = "localhost";
		$dbname= "demo";
		$dbuser = "root";
		$dbpass = "";

		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}


	function login($username, $password){
		$conn = getConnection();
		$sql = "select * from users where name='{$username}' and password='{$password}'";

		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result)){
			return true;
		}else{
			return false;
		}
	}

	
	function signup($username, $password, $email,$phone, $address){
		$conn = getConnection();
		$sql = "insert into users values('', '{$username}', '{$password}', '{$email}', '{$phone}', '{$address}')";

		echo $sql;

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>
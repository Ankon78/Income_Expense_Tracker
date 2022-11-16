<?php
    function getConnection(){
		$host = "localhost";
		$dbname= "demo";
		$dbuser = "root";
		$dbpass = "";

		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}
    // function getConnection2(){
	// 	$host = "localhost";
	// 	$dbname= "demo";
	// 	$dbuser = "root";
	// 	$dbpass = "";

	// 	$conn2 = mysqli_connect($host, $dbuser, $dbpass, $dbname);
	// 	return $conn2;
	// }

    function getDetails(){
		$conn = getConnection();
		$userData = array(); 
		$sql="select * from incomes where income={$income}";
	    $result = mysqli_query($conn, $sql);
	    $user_result = mysqli_fetch_assoc($result);
		return $userData; 
	}
?>
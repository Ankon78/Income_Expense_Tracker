<?php
    
	function getConnection(){
		$host = "localhost";
		$dbname= "demo";
		$dbuser = "root";
		$dbpass = "";

		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}

	
	function addValue($income, $expense){
		$conn = getConnection();
		$sql = "insert into incomes values('','{$income}', '{$expense}')";

		echo $sql;

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>
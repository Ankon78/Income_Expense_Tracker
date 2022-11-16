<?php 
$con = mysqli_connect('localhost', 'root', '', 'demo');

	if($con){
		echo "Done";
	}else{
		echo "error";
	}

	
?>
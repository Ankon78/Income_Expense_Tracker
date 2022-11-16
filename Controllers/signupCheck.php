<?php
    
    session_start();
    require('../Models/userModel.php');

   

    if(isset($_REQUEST['submit'])){
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        $email=$_REQUEST['email'];
        $phone=$_REQUEST['phone'];
        $address=$_REQUEST['address'];

    	if($username !=null && $password !=null && $email !=null && $phone !=null && $address != null){

    		$status=signup($username, $password, $email, $phone, $address);

    		

    		if($status){
    			header('location: ../Views/login.html');
    		}
    		else{
    			echo("Form not submitted");
    		}
    	}
    	else{
    		header('location: ../Views/signup.html?msg=error');
    	}
    }

   




?> 
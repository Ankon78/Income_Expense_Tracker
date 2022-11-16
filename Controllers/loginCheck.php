<?php
     session_start();
     require('../Models/userModel.php');
  
      if(isset($_REQUEST['submit'])){
          
          $username=$_REQUEST['username'];
          $password=$_REQUEST['password'];
  
  
  
        if($username != null && $password != null){
  
          $status = login($username, $password);
            
         if($status){
                  $_SESSION['status'] = 'true';
                  header('location: ../Views/home.php');
              }else{
                  header('location: ../Views/login.html?msg=error');
              }
         }
      }
?>
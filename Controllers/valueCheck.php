<?php
    require('../Models/valueModel.php');

   
    if(isset($_REQUEST['submit'])){
        $income=$_REQUEST['income'];
        $expense=$_REQUEST['expense']; 

    	if($income !=null && $expense !=null){

                if($expense > $income){
                    header('location: ../Views/addValue.php?msg=error');
                }
                else{
                    $status=addValue($income, $expense);
                    if($status){
                        header('location: ../Views/home.php');
                    }
                    else{
                        echo("Form not submitted");
                    }
                }
            }
    	else{
    		header('location: ../Views/addValue.php?msg=error');
    	}
    }

?>
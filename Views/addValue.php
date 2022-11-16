<?php
    if(isset($_GET['msg'])){
        if($_GET['msg'] == 'error'){
            echo "Expense is more than your income";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add value</title>
</head>
<body>

<div class="pt-5">
     <div class="container">
        <form action="../Controllers/valueCheck.php" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Income</label>
              <input name="income" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Expense</label>
              <input name="expense" type="text" class="form-control" id="exampleInputPassword1">
            </div>
           
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            <a href="home.php">Back</a>
          </form>
    </div>
</div>
</body>
</html>
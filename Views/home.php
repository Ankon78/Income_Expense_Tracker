<?php
   session_start();
   if(!isset($_SESSION['status'])){
       header('location: login.php?msg=error');
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>

  <div class="text-end m-5">
          <a class="btn btn-danger" href="../Controllers/logout">Log-out</a>
      </div>
    <div class="container pt-5">
        <form>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Day</th>
                    <th scope="col">Income</th>
                    <th scope="col">Expense</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  require "../Models/homeModel.php";
            
            
                  $conn=getConnection();
                  $sql="select * from incomes";
                  $query = mysqli_query($conn, $sql);
                  $sumIncome =0;
                  $sumExpense = 0;
                  while($result = mysqli_fetch_array($query)){

                    ?>
                   
                    <tr>
                      
                      <td><?php echo $result['day']; ?></td>
                      <td><?php echo $result['income'] ;?></td>
                      <td><?php echo $result['expense'];?></td>
                    </tr>
                      <?php $sumIncome = intval($result['income'] + $sumIncome)?>
                      <?php $sumExpense = intval($result['expense'] + $sumExpense)?>
                      
                	<?php 
                      $totalBalance = $sumIncome - $sumExpense;
                      }
                	?>
                  
                </tbody>
              </table>

              <table class="table">
                <thead>
              
                  <th>Total Income</th>
                  <th>Total Expense</th>
                  <th>Total Balance</th>
                </thead>
                <tr>
                  <td><?php echo $sumIncome; ?></td>
                  <td><?php echo $sumExpense; ?></td>
                  <td><?php echo $totalBalance; ?></td>
                </tr>
              </table>
        </form>
    </div>
    <br>
    <div>
      <hr>
    </div>

    <div class="text-center">
        <a class="btn btn-info" href="addValue.php">Add Income & Expense</a>
    </div>
    
</body>
</html>
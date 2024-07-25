<?php
include('includes/connect.php');
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: admin_login.php");
  exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
   <!--  bootstap CSS link -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  
 <!--   font awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet" href="style.css">
 
</head>
<body>
  <!--  navbar -->
<div class="container-fluid p-0">
<!--   first child -->
  <nav class="navbar navbar-expand-lg navbar-light bg-info ">
    <div class="container-fluid">
      <img src="img/cart.png" alt="Cart" class="logo">
      <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <ul class="navbar-nav">
          <li class="nav-items">
            <a href="" class="nav-link">Welcome- <?php echo $_SESSION['username']?></a>
          </li>

        </ul>
</nav>
    </div>
  </nav>
<!--   second child -->
<div class="bg-light">
  <h3 class="text-center p-2">Manage Details</h3>
</div>
<!-- third child -->
<div class="row">
  <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
    <div>
      <p class="text-light text-center" style="padding-right: 20px;  width: 200px;"><?php echo $_SESSION['username']?></p>
    </div>
   <!--  buttons -->
    <div class="button text-center">

      <button><a href="insert_product.php" class="nav-link text-dark bg-blue my-1 p-1">Insert Products</a></button>

      <button><a href="index1.php?view_products" class="nav-link text-dark bg-blue my-1 p-1">View Products</a></button>

      <button><a href="index1.php?insert_category" class="nav-link text-dark bg-blue my-1 p-1">Insert Categories</a></button>

      <button><a href="index1.php?view_categories" class="nav-link text-dark bg-blue my-1 p-1">View Categories</a></button>
    
      <button><a href="index1.php?list_orders" class="nav-link text-dark bg-blue my-1 p-1">All orders</a></button>

      <button><a href="" class="nav-link text-dark bg-blue my-1 p-1">All payments</a></button><br>

      <button><a href="" class="nav-link text-dark bg-blue my-1 p-1">List users</a></button>

      <button><a href="admin_logout.php" class="nav-link text-dark bg-blue my-1 p-1">Logout</a></button>
    </div>
  </div>
</div>
<!-- fourth child -->
<div class="container my-5">
  <?php
  if(isset($_GET['insert_category'])){
    include('insert_categories.php');
  }
  if(isset($_GET['view_products'])){
    include('view_products.php');
  }
  if(isset($_GET['delete_product'])){
    include('delete_product.php');
  }
  if(isset($_GET['view_categories'])){
    include('view_categories.php');
  }
  if(isset($_GET['delete_category'])){
    include('delete_category.php');
  }
  if(isset($_GET['list_orders'])){
    include('list_orders.php');
  }

  ?>
</div>
<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


<?php 
include('includes/connect.php');
/* if($conn){
    echo "connection is successful";
}else{
    die(mysqli_error($conn));
}  */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
     <!--  bootstap CSS link -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  
<!--   font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.css">
<style>
    body{
        overflow:hidden;
    }
</style>
</head>
<body>
    <div class="container-fluid m-3">
<h2 class="text-center mb-5">
Admin Registration
</h2>
<div class="row d-flex justify-content-center ">
    <div class="col-lg-4 col-xl-5">
        <img src="img/reg.png" alt="Admin Registration" class="img-fluid">
    </div>
    
    <div class="col-lg-6 col-xl-4 ">
       <form action="" method=post>
        <div class="form-outline mb-4">
            <label for="username" lass="form-label">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required="required" autocomplete="off" class="form-control">
        </div>
        <div class="form-outline mb-4">
            <label for="email" class="form-label">Email</label>
            <input type="text" id="email" name="email" placeholder="Enter your email" required="required" autocomplete="off" class="form-control">
        </div>
        <div class="form-outline mb-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required="required" autocomplete="off"class="form-control">
        </div>
        <div class="form-outline mb-4">
            <label for="confirm_password" class="form-label">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password" required="required" autocomplete="off" class="form-control">
        </div>
        <div>
          <input type="submit" class="bg-info py-2 px-3 border-0" name="admin_registration" value="Register"> 
          <p class="small fw-bold mt-2 pt-1">Already have an account?<a href="admin_login.php" class="link-danger">Log In</a></p> 
        </div>
       </form>
    </div>

</div>
    </div>
</body>
</html>

<?php
if(isset($_POST['admin_registration'])){
    $admin_username=$_POST['username'];
    $admin_email=$_POST['email'];
    $admin_password=$_POST['password'];
   
    $admin_cpassword=$_POST['confirm_password'];
   
//select query
$select_query = "SELECT * FROM `admin_table` WHERE admin_name='$admin_username' OR admin_email='$admin_email'";

$result=mysqli_query($conn,$select_query);
$rows_count=mysqli_num_rows($result);
if($rows_count>0){
    echo "<script>alert('Admin name or E-mail already exist')</script>";
}

else if ($admin_password != $admin_cpassword) {
    echo "<script>alert('Password does not match!')</script>";
}


else{

    //insert query

    $insert_query="insert into `admin_table` (admin_name,admin_email, admin_password) values ( '$admin_username','$admin_email','  $admin_password')";
    $sql_execute=mysqli_query($conn,$insert_query);
    echo "<script>alert('Successfully Loged In!')</script>";
} 
}
?>
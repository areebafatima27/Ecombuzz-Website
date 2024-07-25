
<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sign";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<h3 class="text-center text-success">All Users</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">

    <?php
$get_users= "Select * from `signup`";
$result=mysqli_query($conn,$get_users);
$row_count=mysqli_num_rows($result);

if($row_count==0){
    echo "<h2 class='text-danger text-center mt-5'>No users yet</h2>";
}else{
       echo " <tr>
            <th>Sr No.</th>
            <th>Username</th>
            <th>User email</th>
           
        </tr>
    </thead>
    <tbody class='bg-secondary text-dark'>";
    $number=0;
    while($row_data=mysqli_fetch_assoc($result)){
        $user_id=$row_data['user_id'];
        $username=$row_data['Firstname'];
        $user_email=$row_data['email'];
        $number++;
    }
}
?>
 <tr class="text-center">
            <td><?php echo  $number;?></td>
            <td><?php echo $username;?></td>
            <td><?php echo $user_email;?></td>
          
        </tr>
<!-- echo "
<tr>
<td> $number</td>
<td>$username</td>
<td>$user_email</td>
<td> <a href='index1.php?delete_user =  --><!-- <i class ='fa-solid fa-trash'></i></a></td -->




 </tbody>   
      
</table>

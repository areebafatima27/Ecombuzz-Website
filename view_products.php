<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!--  bootstap CSS link -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

   <link rel="stylesheet" href="style.css">
   <style>
    .product_img {
  width: 20%;
  object-fit:contain;
}

   </style>
</head>
<body>
    <h3 class="text-center text-success">All products</h3>
    <table class="table table-bordered mt-5">
    <thead class="bg-info" style="background-color: blue; color: white; font-weight: bold;">
            <tr>
                <th>Products ID</th>
                <th>Products Title</th>
                <th>Products Price</th>
                <th>Total Sold</th>
                <th>Status</th>
              
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="bg-secondary text-light">
<?php
$get_products= "Select * from  `products`";
$result=mysqli_query($conn,$get_products);
$number=0;
while($row=mysqli_fetch_assoc($result)){
$product_id=$row['product_id'];
$product_title=$row['product_title'];
$product_price=$row['product_price'];
$product_status=$row['status'];
$number++;
?>
<tr class='text-center'>
<td><?php echo $number;?></td>
<td><?php echo $product_title;?></td>
<td><?php echo $product_price;?>/-</td>
<td>0</td>
<td><?php echo $product_status;?></td>
<td><a href='index1.php?delete_product=<?php echo $product_id?>' class='text-dark'> <i class='fa-solid fa-trash'></i></a></td>
</tr>
<?php
}
?>


        </tbody>
    </table>
</body>
</html>
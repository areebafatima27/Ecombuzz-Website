<?php
include('includes/connect.php');

if(isset($_POST['insert_product'])){
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_keywords=$_POST['product_keywords'];
    $product_category=$_POST['product_category'];
    $product_status=$_POST['product_status'];
    $product_price=$_POST['product_price'];
//accessing images
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    
    //accessing image temp name
    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];

    //chacking empty condition
    if($product_title=='' or $product_description=='' or  $product_keywords=='' or  $product_category==''or  $product_status=='' or $product_price=='' or $product_image1=='' or $product_image2==''){
        echo "<script>alert('Please fill all the available fields')</script>";
        exit();

    }
    else{
        move_uploaded_file( $temp_image1,"./product_images/ $product_image1");
        move_uploaded_file( $temp_image2,"./product_images/ $product_image2");

        //insert query
        $insert_products = "INSERT INTO `products` (product_title, product_description, product_keywords, cat_id, product_image1, product_image2,status, product_price) VALUES ('$product_title', '$product_description', '$product_keywords', '$product_category', '$product_image1', '$product_image2',' $product_status', '$product_price')";
        $result_query = mysqli_query($conn, $insert_products);
        
        if ($result_query) {
            echo "<script>alert('Successfully inserted the product')</script>";
        } else {
            echo "<script>alert('Error inserting the product: " . mysqli_error($conn) . "')</script>";
        }
        
    }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products-Admin Dashboard</title>
    <!--  bootstap CSS link -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <!--   font awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <div class="container mt-3 w-50 m-auto">
        <h1 class="text-center">Insert Products</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <!-- product title -->
            <div class="form-outline mb-4">
                <label for="product_title" class="form-label">Product_Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product title" autocomplete="off" required="required">
            </div>
            <!-- product description -->
            <div class="form-outline mb-4">
                <label for="product_description" class="form-label">Product_Description</label>
                <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Enter Product description" autocomplete="off" required="required">
            </div>
            <!-- product keywords -->
            <div class="form-outline mb-4">
                <label for="product_keywords" class="form-label">product_keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter Product keywords" autocomplete="off" required="required">
            </div>
            <!-- product category -->
            <div class="form-outline mb-4">
                <select name="product_category" id="" class="form-select">
                    <option value="">Select Category</option>
                    <?php

                    $select_query="Select * from `categories`";
                    $result_query= mysqli_query($conn, $select_query);
           while($row=mysqli_fetch_assoc($result_query)){
    $category_title=$row['cat_title'];
    $category_id=$row['cat_id'];
    echo "<option value='$category_id'>$category_title</option> ";
}
                    ?>
                </select>
            </div>
            <!-- product image1 -->
            <div class="form-outline mb-4">
                <label for="product_image1" class="form-label">Product Image1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" placeholder="Enter Product Image1" autocomplete="off" required="required">
            </div>
          <!-- product image2 -->
            <div class="form-outline mb-4">
                <label for="product_image2" class="form-label">Product Image2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" placeholder="Enter Product Image2" autocomplete="off" required="required">
            </div>
          <!-- product status -->
            <div class="form-outline mb-4">
                <label for="product_status" class="form-label">Product status</label>
                <input type="text" name="product_status" id="product_status" class="form-control" placeholder="Enter Product status" autocomplete="off" required="required">
            </div>
            <!-- product price -->
            <div class="form-outline mb-4">
                <label for="product_price" class="form-label">product_price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Product price" autocomplete="off" required="required">
            </div>
            <!-- submit button-->
            <div class="form-outline mb-4">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Product">
            </div>

        </form>
    </div>
</body>
</html>
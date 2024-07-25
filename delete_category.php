<?php
if (isset($_GET['delete_category'])){
    $delete_category=$_GET['delete_category'];
    //echo $delete_category;

    $delete_query= "Delete from `categories` where cat_id=$delete_category";
    $result=mysqli_query($conn,$delete_query);
    if($result){
        echo "<script>alert('Category is deleted succesfully')</script>";
        echo "<script>window.open('./index1.php?view_categories','_self')</script>";
    }
}
?>
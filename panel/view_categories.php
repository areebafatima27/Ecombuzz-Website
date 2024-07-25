<h3 class="text-center text-success">All Categories</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr class="text-center">
            <th>Sr No.</th>
            <th>Category title</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-dark">

    <?php

$select_cat="Select * from `categories`";
$result=mysqli_query($conn,$select_cat);
$number=0;
while($row=mysqli_fetch_assoc($result)){
    $category_id=$row['cat_id'];
    $category_tilte=$row['cat_title'];
    $number++;
    ?>
        <tr class="text-center">
            <td><?php echo  $number;?></td>
            <td><?php echo $category_tilte;?></td>
            <td><a href='index1.php?delete_category=<?php echo $category_id?>'  type="button" class=" text-dark" data-toggle="modal" data-target="#exampleModal"> <i class='fa-solid fa-trash'></i></a></td>
        </tr>
      <?php
      }
      ?>  
    </tbody>
</table>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
        <h4>Are you sure you want to delete this category?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="/.index1.php?view_categories" class='text-light text-decoration-none'>NO</a></button>
        <button type="button" class="btn btn-primary"><a href='index1.php?delete_category=<?php echo $category_id?>'   class=" text-dark text-decoration-none ">YES</a></button>
      </div>
    </div>
  </div>
</div>
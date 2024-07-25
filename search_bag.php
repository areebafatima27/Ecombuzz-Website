<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ShopFlow</title>
    <!-- connect css -->
    <link rel="stylesheet" href="style.css" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Outfit:wght@300;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@500&display=swap"
      rel="stylesheet"
    />
    <!-- bootstrap -->
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
</head>
<body>
   <!-- navbar -->
   <div class="main-navbar shadow-sm sticky-top">
    <div class="top-navbar">
      <div class="container-fluid">
        <div class="row">
          <div
            class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block"
          >
            <h5 class="brand-name">Ecombuzz</h5>
          </div>
          <div class="col-md-5 my-auto">
           <!--  <form role="search">
              <div class="input-group">
                <input
                  type="search"
                  placeholder="Search your product"
                  class="form-control"
                />
                <button class="btn bg-white" type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </form> -->
            <form role="search" action="search_bag.php" method="get" >
              <div class="input-group">
                <input
                  type="search"
                  placeholder="Search your product"
                  class="form-control"
                  class="btn btn-outline-dark"
                  name="search_data"
                  autocomplete="off"
                />
               <!--  <button class="btn bg-white" type="submit"> -->
                  <input
                    type="submit"
                    value="Search"
                    class="btn btn-outline-dark"
                    name="search_data_product"
                  />
                  <!-- <i class="fa fa-search"></i> -->
                </button>
                
              </div>
              
            </form>
            
          </div>
          
          <div class="col-md-5 my-auto">
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="nav-link" href="cart.php">
                  <i class="fa fa-shopping-cart"></i> My Cart
                </a>
              </li>
              
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="fa fa-user"></i> Username
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="#"
                      ><i class="fa fa-user"></i> Profile</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="payment_details.php"
                      ><i class="fa fa-list"></i> My Orders</a
                    >
                  </li>
               
                  <li>
                    <a class="dropdown-item" href="cart.php"
                      ><i class="fa fa-shopping-cart"></i> My Cart</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="login.php.html"
                      ><i class="fa fa-sign-out"></i> Logout</a
                    >
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a
          class="navbar-brand d-block d-sm-block d-md-none d-lg-none"
          href="#"
        >
          Ecombuzz
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#About">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#About">About Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="watches.php.html">Apple Watches</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shoes.php.html">Shoes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="bags.php.html">Bags</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="abaya.php.html">Abaya</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Contact">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
 
  <!-- bags section  -->
    <br />
    <br />
    <div id="bags" class="main5">
      <div class="main5-text">
        <h1>New Bags Collection 2023</h1>
        <p>
          There's Nothing Like Trend."Discover the perfect blend of style and
          practicality with our exquisite collection of premium quality bags.
          Each piece is meticulously crafted to complement your unique taste
          while catering to your everyday needs."
        </p>
        <br /><br />
        <button class="button5">shop now</button>
      </div>
      <div class="pic5">
        <img src="Imgs/main pic.png" />
      </div>
    </div>
    <section class="shop" id="shop">
      <div class="container5">
        <div class="box5">
          <img src="Imgs/bag1.png" />
          <h3>Mobile wallet</h3>
          <h4>PKR 1,999</h4>
          <form method="post" action="cart.php">
            <input type="hidden" name="product_id" value="9">
            <input type="hidden" name="product_name" value="Mobile wallet">
            <input type="hidden" name="product_price" value="1,999">
            <button type="submit" class="CartBtn" name="add_to_cart">
            <span class="IconContainer">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                height="1em"
                viewBox="0 0 576 512"
                fill="rgb(17, 17, 17)"
                class="cart"
              >
                <path
                  d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"
                ></path>
              </svg>
            </span>
            <h3 class="text1">Add to Cart</h3>
          </button>
          </form>
        </div>
        <div class="box5">
          <img src="Imgs/bag2.png" />
          <h3>Lotus handbag</h3>
          <h4>PKR 15,400</h4>
          <form method="post" action="cart.php">
            <input type="hidden" name="product_id" value="10">
            <input type="hidden" name="product_name" value="Lotus handbag">
            <input type="hidden" name="product_price" value="15,400">
            <button type="submit" class="CartBtn" name="add_to_cart">
            <span class="IconContainer">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                height="1em"
                viewBox="0 0 576 512"
                fill="rgb(17, 17, 17)"
                class="cart"
              >
                <path
                  d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"
                ></path>
              </svg>
            </span>
            <h3 class="text1">Add to Cart</h3>
          </button>
          </form>
        </div>
        <div class="box5">
          <img src="Imgs/bag3.png" />
          <h3>Shoulder bag</h3>
          <h4>PKR 15,500</h4>
          <form method="post" action="cart.php">
            <input type="hidden" name="product_id" value="11">
            <input type="hidden" name="product_name" value="Shoulder bag">
            <input type="hidden" name="product_price" value="15,500">
            <button type="submit" class="CartBtn" name="add_to_cart">
            <span class="IconContainer">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                height="1em"
                viewBox="0 0 576 512"
                fill="rgb(17, 17, 17)"
                class="cart"
              >
                <path
                  d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"
                ></path>
              </svg>
            </span>
            <h3 class="text1">Add to Cart</h3>
          </button>
          </form>
        </div>
        <div class="box5">
          <img src="Imgs/bag4.png" />
          <h3>Five piece hand bags</h3>
          <h4>PKR 17,400</h4>
          <form method="post" action="cart.php">
            <input type="hidden" name="product_id" value="12">
            <input type="hidden" name="product_name" value="Five piece hand bags">
            <input type="hidden" name="product_price" value="17,400">
            <button type="submit" class="CartBtn" name="add_to_cart">
            <span class="IconContainer">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                height="1em"
                viewBox="0 0 576 512"
                fill="rgb(17, 17, 17)"
                class="cart"
              >
                <path
                  d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"
                ></path>
              </svg>
            </span>
            <h3 class="text1">Add to Cart</h3>
          </button>
          </form>
        </div>
        <div class="box5">
          <img src="Imgs/bag5.png" />
          <h3>Stylish bag</h3>
          <h4>PKR 1,7400</h4>
          <form method="post" action="cart.php">
            <input type="hidden" name="product_id" value="13">
            <input type="hidden" name="product_name" value="Stylish bag">
            <input type="hidden" name="product_price" value="1,7400">
            <button type="submit" class="CartBtn" name="add_to_cart">
            <span class="IconContainer">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                height="1em"
                viewBox="0 0 576 512"
                fill="rgb(17, 17, 17)"
                class="cart"
              >
                <path
                  d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"
                ></path>
              </svg>
            </span>
            <h3 class="text1">Add to Cart</h3>
          </button>
          </form>
        </div>
        <div class="box5">
          <img src="Imgs/bag6.png" />
          <h3>Hand carry</h3>
          <h4>PKR 21,999</h4>
          <form method="post" action="cart.php">
            <input type="hidden" name="product_id" value="14">
            <input type="hidden" name="product_name" value="Hand carry">
            <input type="hidden" name="product_price" value=" 21,999">
            <button type="submit" class="CartBtn" name="add_to_cart">
            <span class="IconContainer">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                height="1em"
                viewBox="0 0 576 512"
                fill="rgb(17, 17, 17)"
                class="cart"
              >
                <path
                  d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"
                ></path>
              </svg>
            </span>
            <h3 class="text1">Add to Cart</h3>
          </button>
          </form>
        </div>
        <div class="box5">
          <img src="Imgs/bag7.png" />
          <h3>Bucket bag</h3>
          <h4>PKR 37,500</h4>
          <form method="post" action="cart.php">
            <input type="hidden" name="product_id" value="15">
            <input type="hidden" name="product_name" value="Bucket bag">
            <input type="hidden" name="product_price" value="37,500">
            <button type="submit" class="CartBtn" name="add_to_cart">
            <span class="IconContainer">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                height="1em"
                viewBox="0 0 576 512"
                fill="rgb(17, 17, 17)"
                class="cart"
              >
                <path
                  d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"
                ></path>
              </svg>
            </span>
            <h3 class="text1">Add to Cart</h3>
          </button>
          </form>
        </div>
        <div class="box5">
          <img src="Imgs/bag8.png" />
          <h3>Flap bag</h3>
          <h4>PKR 4,700</h4>
          <form method="post" action="cart.php">
            <input type="hidden" name="product_id" value="16">
            <input type="hidden" name="product_name" value="Flap bag">
            <input type="hidden" name="product_price" value="4,700">
            <button type="submit" class="CartBtn" name="add_to_cart">

            <span class="IconContainer">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                height="1em"
                viewBox="0 0 576 512"
                fill="rgb(17, 17, 17)"
                class="cart"
              >
                <path
                  d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"
                ></path>
              </svg>
            </span>
            <h3 class="text1">Add to Cart</h3>
          </button>
          </form>
        </div>
      </div>
    </section></body>
</html>

<?php
include('includes/connect.php');
function search_product(){
  global $conn;
  if(isset($_GET['search_product_data'])){
    $search_data_value=$_GET['search_data'];
  
  $search_query="Select * from `product` where product_keywords like '% $search_data_value%'";
  $result_query=mysqli_query($conn, $search_query);
  while($row=mysqli_fetch_assoc($result_query)){
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_keywords=$_POST['product_keywords'];
    $product_category=$_POST['product_category'];
    $product_status=$_POST['product_status'];
    $product_price=$_POST['product_price'];
    echo "<div class='col-md-4 mb-2>
      <div class='card-body'>
        <h5 class='card-title'>$product_title</h5>
        <p class='card-text'> $product_description</p>
        <a href='#' class='btn btn-info'>Add to cart</a>
        <a href='#' class='btn btn-secondary'>View more</a>
      </div>
     </div>
    ";
  }
}
}

?>
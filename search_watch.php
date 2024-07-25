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
              <form role="search"
              action="" method="get" >
                <div class="input-group">
                  <input
                    type="search"
                    placeholder="Search your product"
                    class="form-control"
                    class="btn btn-outline-dark"
                    name="search_data"
                  />
                 <!--  <button class="btn bg-white" type="submit"> -->
                    <input
                      type="submit"
                      value="Search"
                      class="btn btn-outline-dark"
                      name="search_data_product"
                      autocomplete="off"
                    />
                    <!-- <i class="fa fa-search"></i> -->
                  </button>
                </div>
                <?php
                
                search_product()
                ?>
                <!-- <div class="input-group">
                  <input
                    type="search"
                    placeholder="Search your product"
                    class="form-control"
                  />
                  <button class="btn bg-white" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </div> -->
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

    <!-- main part  -->
    <div id="Watches" class="main">
      <div class="text">
        <h2>The future of health</h2>
        <h2>is on your wrist.</h2>
        <p>
          Measure your blood oxygen level. Keep an eye on your heart. See your
          fitness metrics on the enhanced Always-On Retina display. Live a
          healthier, more active, more connected life.
        </p>
        <div class="main2">
          <img class="pic1" src="images/pinkmain.png" />

          <h2 class="main2h2">From PKR 110,000</h2>
          <button class="button1">BUY NOW</button>
        </div>
      </div>
    </div>
    <!-- items -->
    <div class="grid-container">
      <div class="menu aboutitems">
        <img class="aboutpic" src="images/watch1.png" />
        <div class="price">
          <h3>Sport Smartwatch</h3>
          <h3>PKR 110,000</h3>
          <form method="post" action="cart.php">
            <input type="hidden" name="product_id" value="1" />
            <input type="hidden" name="product_name" value="Sport Smartwatch" />
            <input type="hidden" name="product_price" value="110,000" />

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
              <p class="text1">Add to Cart</p>
            </button>
          </form>
        </div>
      </div>
      <div class="menu aboutitems">
        <img class="aboutpic" src="images/watch2.png" />
        <div class="price">
          <h3>Apple Series 7</h3>
          <h3>PKR 165,000</h3>
          <form method="post" action="cart.php">
            <input type="hidden" name="product_id" value="2" />
            <input type="hidden" name="product_name" value="Apple Series 7" />
            <input type="hidden" name="product_price" value="165,000" />

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
              <p class="text1">Add to Cart</p>
            </button>
          </form>
        </div>
      </div>
      <div class="menu aboutitems">
        <img class="aboutpic" src="images/watch3.png" />
        <div class="price">
          <h3>Apple Series 3</h3>
          <h3>PKR 82,000</h3>
          <form method="post" action="cart.php">
            <input type="hidden" name="product_id" value="3" />
            <input type="hidden" name="product_name" value="Apple Series 3" />
            <input type="hidden" name="product_price" value="82,000" />

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
              <p class="text1">Add to Cart</p>
            </button>
          </form>
        </div>
      </div>
      <div class="menu aboutitems">
        <img class="aboutpic" src="images/watch4.png" />
        <div class="price">
          <h3>Apple Series 5</h3>
          <h3>PKR 138,000</h3>
          <form method="post" action="cart.php">
            <input type="hidden" name="product_id" value="4" />
            <input type="hidden" name="product_name" value="Apple Series 5" />
            <input type="hidden" name="product_price" value="138,000" />

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
              <p class="text1">Add to Cart</p>
            </button>
          </form>
        </div>
      </div>

      <div class="menu aboutitems">
        <img class="aboutpic" src="images/watch5.png" />
        <div class="price">
          <h3>Apple Series 4</h3>
          <h3>PKR 110,000</h3>
          <form method="post" action="cart.php">
            <input type="hidden" name="product_id" value="5" />
            <input type="hidden" name="product_name" value="Apple Series 4" />
            <input type="hidden" name="product_price" value="110,000" />

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
              <p class="text1">Add to Cart</p>
            </button>
          </form>
        </div>
      </div>
      <div class="menu aboutitems">
        <img class="aboutpic" src="images/watch6.png" />
        <div class="price">
          <h3>Apple Rose Gold</h3>
          <h3>PKR 165,000</h3>
          <form method="post" action="cart.php">
            <input type="hidden" name="product_id" value="6" />
            <input type="hidden" name="product_name" value="Apple Rose Gold" />
            <input type="hidden" name="product_price" value="165,000" />

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
              <p class="text1">Add to Cart</p>
            </button>
          </form>
        </div>
      </div>

      <div class="menu aboutitems">
        <img class="aboutpic" src="images/watch7.png" />
        <div class="price">
          <h3>Apple Series 6</h3>
          <h3>PKR 165,000</h3>
          <form method="post" action="cart.php">
            <input type="hidden" name="product_id" value="7" />
            <input type="hidden" name="product_name" value="Apple Series 6" />
            <input type="hidden" name="product_price" value="165,000" />

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
              <p class="text1">Add to Cart</p>
            </button>
          </form>
        </div>
      </div>

      <div class="menu aboutitems">
        <img class="aboutpic" src="images/watch8.png" />
        <div class="price">
          <h3>Apple Series 2</h3>
          <h3>PKR 110,000</h3>
          <form method="post" action="cart.php">
            <input type="hidden" name="product_id" value="8" />
            <input type="hidden" name="product_name" value="Apple Series 2" />
            <input type="hidden" name="product_price" value="110,000" />

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
              <p class="text1">Add to Cart</p>
            </button>
          </form>
        </div>
      </div>
    </div>
  </body>
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

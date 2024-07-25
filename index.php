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
              <form role="search">
                <!-- <div class="input-group">
                  <input
                    type="search"
                    placeholder="Search your product"
                    class="form-control" class="btn btn-outline-dark" name="search_data"
                  />
                   <button class="btn bg-white" type="submit">
                    <input type="submit" value="Search" class="btn btn-outline-dark" name="search_data_product">
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
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">About Us</a>
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
    <!-- about us  -->
    <section id="About" class="about-us">
      <div class="about-content">
        <div class="about-image">
          <img
            src="images/about us image.png"
            alt="Company Logo or Team Photo"
          />
        </div>
        <div class="about-text">
          <p>
            Welcome to our online store! We are a passionate team dedicated to
            providing high-quality products and excellent service to our
            customers.
          </p>
          <p>
            Our mission is to make online shopping a seamless experience, and we
            are committed to offering a wide range of products to meet your
            needs.
          </p>
          <p>
            At Ecombuzz , we value customer satisfaction and strive to exceed
            your expectations. Thank you for choosing us!
          </p>
        </div>
      </div>
    </section>
    <br />
    <br />

    <!-- links  -->
    <div class="t1image">
      <a href="watches.php.html"
        ><img class="t1image" src="images/watch4.png" alt=""
      /></a>
      <a href="shoes.php.html"
        ><img class="t1image" src="images/heels.png" alt=""
      /></a>
      <a href="bags.php.html"
        ><img class="t1image" src="Imgs/bag2.png" alt=""
      /></a>
      <a href="abaya.php.html"
        ><img class="t1image" src="img/ab2.png" alt=""
      /></a>
    </div>
    <div class="t1name">
      <a class="t1name" href="watches.php.html">Watches</a>
      <a class="t1name" href="shoes.php.html">Shoes</a>
      <a class="t1name" href="bags.php.html">Bags</a>
      <a class="t1name" href="abaya.php.html">Abaya</a>
    </div>

    <!-- Contact us  -->
    <div id="Contact" class="container">
      <div class="content">
        <div class="left-side">
          <div class="address details">
            <div class="topic">Address</div>
            <div class="text-one">MughalPura, NP12</div>
            <div class="text-two">Lahore 06</div>
          </div>
          <div class="phone details">
            <div class="topic">Phone</div>
            <div class="text-one">+92 322 5689745</div>
            <div class="text-two">+92 332 5789744</div>
          </div>
          <div class="email details">
            <div class="topic">Email</div>
            <div class="text-one">Ecombuzz 123@gmail.com</div>
            <div class="text-two">info.Ecombuzz123@gmail.com</div>
          </div>
        </div>
        <div class="right-side">
          <div class="topic-text"><h1>Send us a message</h1></div>
          <p class="contactp">
            If you have any work from me or any types of quries related to my
            tutorial, you can send me message from here. It's my pleasure to
            help you.
          </p>
       
          <form action="contact.php" method="post">
            <div class="input-box">
              <input type="text" placeholder="Enter your name" name="Uname" />
            </div>
            <div class="input-box">
              <input type="text" placeholder="Enter your email" name="Email" />
            </div>
            <div class="input-box input-box message-box">
              <input type="text" placeholder="Enter your message" name="msg" />
            </div>
            <div class="input-box message-box"></div>
            <div class="button2">
              <!--  <input type="button" value="Send Now" /> -->
              <button
                class="btn btn-success"
                name="btn-send"
                style="background: #000"
              >
                Send
              </button>
            </div>
          </form>
          <?php
    // Display the success or error message if it's set
    if (!empty($msg)) {
        echo '<p>' . $msg . '</p>';
    }
    ?>
        </div>
      </div>
    </div>
  </body>
</html>



          
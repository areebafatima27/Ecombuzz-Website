<?php
session_start();

function getProductById($productId, $cart) {
    // Check if the cart is not empty
    if (!empty($cart)) {
        foreach ($cart as $item) {
            if ($item['id'] == $productId) {
                return $item;
            }
        }
    }

    return false; // Product not found in the cart
}

$productId = $_GET['product_id'];

// Check if the cart is set and not empty
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

// Retrieve product details based on the product ID
$productInCart = getProductById($productId, $cart);

if (!$productInCart) {
    // Redirect or handle the case where the product is not found
    header('Location: index.php'); // Redirect to the index page for now
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(to right, #ffcccb, white, #ffcccb);
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1, h2 {
            color: #333;
        }

        h1 {
            margin-top: 20px;
        }

        h2 {
            margin-top: 30px;
        }

        p {
            color: #555;
            margin: 10px 0;
        }

        .slip-container {
            max-width: 600px;
            margin: 25px auto; /* Added margin */
            background-image: linear-gradient(to right, #cccc, white,#cccc);
            padding: 20px;
           
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .back-to-shop {
            margin-top: 20px;
        }

        .back-to-shop a {
            display: inline-block;
            padding: 10px 20px;
            background-color: black;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .back-to-shop a:hover {
            background-image: linear-gradient(to right, grey, black, grey);
        }
    </style>
</head>
<body>
    <div class="slip-container">
        <h1>Payment Details</h1>
        
        <h2>Product Information</h2>
        <p>Name: <?php echo isset($productInCart['name']) ? $productInCart['name'] : 'Product Not Found'; ?></p>
        <p>Price: PKR <?php echo isset($productInCart['price']) ? $productInCart['price'] : 'N/A'; ?></p>
        <p>Quantity: <?php echo isset($productInCart['quantity']) ? $productInCart['quantity'] : 'N/A'; ?></p>
        
        <h2>Total Amount</h2>
        <p>Total: <?php echo isset($productInCart['price']) && isset($productInCart['quantity']) ? ('PKR ' . (floatval(str_replace(',', '', $productInCart['price'])) * intval($productInCart['quantity']))) : 'Invalid Price or Quantity'; ?></p>
        
        <h2>Payment Options</h2>
        <!-- Include your payment options or form here -->

        <div class="back-to-shop">
            <p><a href="index.php">Back to Shop</a></p>
        </div>
        <div class="pay">
            <p><a href="pay.php">Pay Now.</a></p>
        </div>
    </div>
</body>
</html>

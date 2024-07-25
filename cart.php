<?php
session_start();

// Check if the cart is set in the session
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

// Handle adding item to cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    $productId = $_POST['product_id'];
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];

    // You can add additional validation if needed

    // Check if the product is already in the cart
    $productExists = false;
    foreach ($cart as $key => $item) {
        if ($item['id'] == $productId) {
            // Product exists in the cart, update quantity
            $cart[$key]['quantity'] += 1;
            $productExists = true;
            break;
        }
    }

    // If the product is not in the cart, add it
    if (!$productExists) {
        $cart[] = [
            'id' => $productId,
            'name' => $productName,
            'price' => $productPrice,
            'quantity' => 1, // Set the default quantity to 1 or adjust as needed
        ];
    }

    $_SESSION['cart'] = $cart;
}

// Handle removing item from cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remove_from_cart'])) {
    $productId = $_POST['remove_from_cart'];

    // Find the product in the cart and remove it
    foreach ($cart as $key => $item) {
        if ($item['id'] == $productId) {
            unset($cart[$key]);
            break;
        }
    }

    $_SESSION['cart'] = $cart;
}

// Handle updating quantity in cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_cart'])) {
    foreach ($_POST['quantity'] as $productId => $newQuantity) {
        // Find the product in the cart and update the quantity
        foreach ($cart as $key => $item) {
            if ($item['id'] == $productId) {
                $cart[$key]['quantity'] = $newQuantity;
                break;
            }
        }
    }

    $_SESSION['cart'] = $cart;
}

// Handle generating the payment slip
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pay_now'])) {
    // Redirect to the payment details page with the product ID
    header('Location: payment_details.php?product_id=' . $_POST['pay_now']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-image: linear-gradient(to right, pink, white, pink);
        margin: 0;
        padding: 0;
    }

    h1 {
        color: #333;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 10px;
        text-align: left;
        border: 1px solid #ddd;
    }

    th {
        background-image: linear-gradient(to right, grey, pink, grey);
    }

    input[type="number"] {
        width: 60px;
        padding: 5px;
        box-sizing: border-box;
    }

    button {
        background-color: black;
        color: white;
        padding: 8px 15px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    button:hover {
        background-image: linear-gradient(to right, grey, black, grey);
    }

    a {
        color: black;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>

<!-- main part -->
<h1>Cart</h1>

<form method="post" action="">
    <table border="1">
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Action</th>
            <th>Pay Now</th>
        </tr>
        <?php foreach ($cart as $item): ?>
            <tr>
                <td><?php echo $item['name']; ?></td>
                <td>PKR <?php echo $item['price']; ?></td>
                <td>
                    <!-- Change the input field to use the correct name attribute -->
                    <input type="number" name="quantity[<?php echo $item['id']; ?>]" value="<?php echo $item['quantity']; ?>" min="0">
                </td>
                <td>
                    <?php
                    $price = floatval(str_replace(',', '', $item['price']));
                    $quantity = intval($item['quantity']);

                    if (is_numeric($price) && is_numeric($quantity)) {
                        echo 'PKR ' . ($price * $quantity);
                    } else {
                        echo 'Invalid Price or Quantity';
                    }
                    ?>
                </td>
                <td>
                    <button type="submit" name="remove_from_cart" value="<?php echo $item['id']; ?>">Remove</button>
                </td>
                <td>
                    <button type="submit" name="pay_now" value="<?php echo $item['id']; ?>">Pay Now</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <!-- Change the update button to use the correct name attribute -->
    <button type="submit" name="update_cart">Update Cart</button>
</form>

<p><a href="index.php">Back to Shop</a></p>
<!-- Your HTML content remains unchanged -->

</body>
</html>

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

if (isset($_POST['email'], $_POST['password'])) {
    // Form data
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM `signup` WHERE email=? AND password=?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        

        // Check if the entered password matches the stored password in the database
        if ($password === $row['password']) {
           include 'index.php';
            // You can redirect the user to another page here if needed
            // header("Location: welcome.php");
            // exit();
        } else {
            echo "Wrong password! Input: $password / Stored: " . $row['password'];
        }
    } else {
        echo "User not found!";
    }

    $stmt->close();
    $conn->close();
}
?>

<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sign"; // Replace with your actual database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['Firstname'],$_POST['Lastname'], $_POST['email'], $_POST['password'] )) {

// Form data
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

// SQL query to insert data into the database
$sql = "INSERT INTO `signup` (`Firstname`, `Lastname`, `email`, `password`) VALUES ('$Firstname', '$Lastname', '$email', '$password')
";

if ($conn->query($sql) === TRUE) {
    // echo "User registered successfully!";
    include 'login.php.html';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();}
?>

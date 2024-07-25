
 

<?php
// Assuming this is at the top of your file, and it includes the necessary configurations
$conn = new mysqli('localhost', 'root', '', 'contact');

// Check the connection
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

// Initialize variables
$name = "";
$email = "";
$message = "";
$msg = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btn-send"])) {
    // Assuming your form fields are named Uname, Email, and msg
    $name = mysqli_real_escape_string($conn, $_POST['Uname']);
    $email = mysqli_real_escape_string($conn, $_POST['Email']);
    $message = mysqli_real_escape_string($conn, $_POST['msg']);

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("INSERT INTO form(Name, Email, Message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        $msg = "Your message has been sent.";
    } else {
        $msg = "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Close the database connection
$conn->close();
?>





















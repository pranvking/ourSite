<?php
// Database connection parameters
$host = "localhost";
$user = "root";        // Change if your DB user is different
$password = "";        // Change if your DB has a password
$database = "bakeryuserdata"; // Change to your database name

// Create connection
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect & sanitize input
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Prepare the INSERT query
    $sql = "INSERT INTO userinfodata (User, Email, Password, Mobile ) 
            VALUES ('$username', '$email', '$password', '$mobile')";

    // Execute query
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Registration successful!'); window.location.href='login.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);
?>

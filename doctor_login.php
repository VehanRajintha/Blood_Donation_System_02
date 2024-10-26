<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'donation');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM doctor WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;
        header("Location: doctor_dashboard.php");
    } else {
        echo "Invalid credentials";
    }
}

$conn->close();
?>
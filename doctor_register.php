<?php
$conn = new mysqli('localhost', 'root', '', 'donation');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $nic = $_POST['nic'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password == $confirm_password) {
        $sql = "INSERT INTO doctor (name, dofbirth, gender, nic, address, pnumber, email, password) VALUES ('$name', '$dob', '$gender', '$nic', '$address', '$phone', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "Registration successful";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Passwords do not match";
    }
}

$conn->close();
?>
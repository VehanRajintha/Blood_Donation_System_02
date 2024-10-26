<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.html");
    exit();
}

$conn = new mysqli('localhost', 'root', '', 'donation');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$notification = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $nic = $_POST['nic'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "UPDATE doctor SET name=?, dofbirth=?, nic=?, address=?, pnumber=?, password=? WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $name, $dob, $nic, $address, $phone, $password, $email);

    if ($stmt->execute()) {
        $notification = "Profile updated successfully";
    } else {
        $notification = "Error updating profile: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Update</title>
    <style>
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #4caf50;
            color: white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transform: translateY(-20px);
            transition: opacity 0.5s, transform 0.5s;
        }

        .notification.show {
            opacity: 1;
            transform: translateY(0);
        }

        .notification.error {
            background-color: #f44336;
        }
    </style>
</head>
<body>
    <div id="notification" class="notification <?php echo $notification ? 'show' : ''; ?> <?php echo strpos($notification, 'Error') !== false ? 'error' : ''; ?>">
        <?php echo $notification; ?>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var notification = document.getElementById('notification');
            if (notification.classList.contains('show')) {
                setTimeout(function() {
                    notification.classList.remove('show');
                }, 3000);
            }
        });
    </script>
</body>
</html>

<?php
header("refresh:3;url=doctor_dashboard.php");
exit();
?>
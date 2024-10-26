<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.html");
    exit();
}

// Fetch doctor details from the database
$conn = new mysqli('localhost', 'root', '', 'donation');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_SESSION['email'];
$sql = "SELECT * FROM doctor WHERE email='$email'";
$result = $conn->query($sql);
$doctor = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="#dashboard">Dashboard</a></li>
            <li><a href="#add-donor">Add Donor</a></li>
            <li><a href="#profile">Profile</a></li>
            <li><a href="#contact-us">Contact Us</a></li>
        </ul>
    </nav>

    <section id="dashboard">
        <h1>Welcome to the Doctor Dashboard, <?php echo $doctor['name']; ?></h1>
    </section>

    <section id="add-donor">
        <h1>Add Donor</h1>
        <!-- Add Donor form goes here -->
    </section>

    <section id="profile">
        <h1>Profile</h1>
        <p><strong>Name:</strong> <?php echo $doctor['name']; ?></p>
        <p><strong>Date of Birth:</strong> <?php echo $doctor['dofbirth']; ?></p>
        <p><strong>Gender:</strong> <?php echo $doctor['gender']; ?></p>
        <p><strong>NIC:</strong> <?php echo $doctor['nic']; ?></p>
        <p><strong>Address:</strong> <?php echo $doctor['address']; ?></p>
        <p><strong>Phone Number:</strong> <?php echo $doctor['pnumber']; ?></p>
        <p><strong>Email:</strong> <?php echo $doctor['email']; ?></p>
        <p><strong>Password:</strong> <?php echo $doctor['password']; ?></p>
        <button id="edit-profile">Edit</button>
    </section>

    <section id="contact-us">
        <h1>Contact Us</h1>
        <!-- Contact Us form goes here -->
    </section>

    <div id="edit-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Edit Profile</h2>
            <form action="update_profile.php" method="POST">
                <input type="hidden" name="email" value="<?php echo $doctor['email']; ?>">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $doctor['name']; ?>" required>
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" value="<?php echo $doctor['dofbirth']; ?>" required readonly>
                <label for="nic">NIC:</label>
                <input type="text" id="nic" name="nic" value="<?php echo $doctor['nic']; ?>" required readonly>
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="<?php echo $doctor['address']; ?>" required>
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" value="<?php echo $doctor['pnumber']; ?>" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="<?php echo $doctor['password']; ?>" required>
                <button type="submit">Save Changes</button>
            </form>
        </div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("edit-modal");

        // Get the button that opens the modal
        var btn = document.getElementById("edit-profile");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
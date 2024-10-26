<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Register</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-back">
                    <h2>Doctor Register</h2>
                    <form action="doctor_register.php" method="POST">
                        <input type="text" name="name" placeholder="Full Name" required>
                        <input type="date" name="dob" placeholder="Date of Birth" required>
                        <select name="gender" required>
                            <option value="" disabled selected>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <input type="text" name="nic" placeholder="NIC" required>
                        <input type="text" name="address" placeholder="Address" required>
                        <input type="text" name="phone" placeholder="Phone Number" required>
                        <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>" readonly required>
                        <input type="password" name="password" placeholder="Password" required>
                        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                        <input type="text" name="medical_number" placeholder="Medical License Number" required>
                        <input type="text" name="work_place" placeholder="Work Place (Hospital)" required>
                        <input type="text" name="experience" placeholder="Experience" required>
                        <input type="text" name="other_qualification" placeholder="Other Qualification" required>
                        <h3>Availability</h3>
                        <select name="available_hours" required>
                            <option value="" disabled selected>Select Available Hours</option>
                            <option value="morning">Morning</option>
                            <option value="afternoon">Afternoon</option>
                            <option value="evening">Evening</option>
                        </select>
                        <select name="preferred_location" required>
                            <option value="" disabled selected>Select Preferred Location</option>
                            <option value="location1">Location 1</option>
                            <option value="location2">Location 2</option>
                            <option value="location3">Location 3</option>
                        </select>
                        <button type="submit">Register</button>
                    </form>
                    <button id="open-login">Login</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/scripts.js"></script>
</body>
</html>
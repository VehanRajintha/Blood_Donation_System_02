<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Login/Register</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: url('images/bg.jpg') no-repeat center center fixed;
            background-size: cover;
        }
       

        .container {
            perspective: 1000px;
            color: transparent;
        }

        .card {
            width: 500px;
            height: 700px;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.8s;
            
        }

        .inner-box {
            position: absolute;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
        }

        .card-front, .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 10px;
        }
        .card-front h2, .card-back h2 {
            color: black;
        }

        .card-back {
            transform: rotateY(180deg);
        }

        input ,select{
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card" id="card">
            <div class="inner-box">
                <div class="card-front">
                    <h2>Doctor Login</h2>
                    <form action="doctor_login.php" method="POST">
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="password" name="password" placeholder="Password" required>
                        <button type="submit">Login</button>
                    </form>
                    <button id="open-register">Register</button>
                </div>
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
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="password" name="password" placeholder="Password" required>
                        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                        <button type="submit">Register</button>
                    </form>
                    <button id="open-login">Login</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('open-register').addEventListener('click', function() {
            document.getElementById('card').style.transform = 'rotateY(180deg)';
        });

        document.getElementById('open-login').addEventListener('click', function() {
            document.getElementById('card').style.transform = 'rotateY(0deg)';
        });
    </script>
</body>
</html>
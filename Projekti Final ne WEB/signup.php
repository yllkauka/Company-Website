<!DOCTYPE html>
<html land="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="CSS/signupStyle.css">
    <link rel="icon" href="Image/signup.png">
    <script src="JS/signup.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <main>
        <div class="container">
            <div class="signup-form">

                <form action="" autocomplete="off">
                <h2>Sign Up</h2>
                <div class="user-box">
                    <input type="text" name="" id="fullname" required>
                    <label>Full Name</label>
                </div>
                <div class="user-box">
                    <input type="text" name="" id="username" required>
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type="text" name="" id="email" required>
                    <label>Email</label>
                </div>
                <div class="user-box">
                    <input type="password" name="" id="password" required>
                    <label>Password</label>
                </div>
                <div class="user-box">
                    <input type="text" name="" id="address" required>
                    <label>Address</label>
                </div>
                <div class="user-box">
                    <input type="number" name="" id="number" required>
                    <label>Phone Number</label>
                </div>
            </form>

            <a>
                <button type="submit" onclick="register()">Sign up</button>
            </a>

            <br><br>
            <p>You have an account? <a href="login.php"> Log in</a></p>


            </div>
        </div>
    </main>
</body>
</html>

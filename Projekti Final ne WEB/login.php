<!DOCTYPE html>
<html land="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <link rel="stylesheet" href="CSS/loginStyle.css">
    <link rel="icon" href="Image/login.png">
    <script src="JS/login.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <main>
        <div id="container">
            <div class="login-form">
                <form action="" method="POST" autocomplete="off">
                    <h2>Log In</h2>
                <div class="user-box">
                    <input type="text" name="username" id="username" required>
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type="password" name="password" id="password" required>
                    <label>Password</label>
                </div>
            </form>
                <a>
                <button type="submit" onclick="validate()">Log in</button>
                </a>
                <br> <br>
                <p>You don't have an account?
                    <a href="signup.php">Sign Up</a>
                </p>
                </form>
            </div>
        </div>
    </main>
</body>
</html>

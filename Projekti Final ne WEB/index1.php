<!DOCTYPE html>
<html land="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <link rel="stylesheet" href="CSS/ls.css">
    <link rel="icon" href="Image/login.png">
    <script src="JS/login.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" ><br>

     	<label>Password</label>
     	<input type="password" name="password" ><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account!</a>
     </form>
</body>
</html>
<!DOCTYPE html>

<html lang="en" dir="ltr">

    <head>
    
        <meta charset="UTF-8">
        <title> Finance & Management </title>
        <link rel="stylesheet" href="CSS/stylei.css">
        <link rel="shortcut icon" href="CSS/Image/foto1.png"> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      </head>
  <body>
<header>
  <nav>
    <ul>
      <li class="logo">F&M</li>
      <li class="items"><a href="index.php">Home</a></li>
      <li class="items"><a href="industries.php">Industries</a></li>
      <li class="items"><a href="service.php">Services</a></li>
      <li class="items"><a href="contact.php">Contact</a></li>
      <li class="items"><a href="about.php">About Us</a></li>
      <li class="items"><a href="login.php">Log Out</a></li>
      <li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
    </ul>
  </nav>

  <script>
    $(document).ready(function(){
      $('.btn').click(function(){
        $('.items').toggleClass("show");
        $('ul li').toggleClass("hide");
      });
    });
  </script>

  <div id="showcase">
    <div class="container">
    <div class="showcase-content">
      <h1>Welcome</h1>
      <p class="lead">Follow your passion; it will lead you to your purpose.</p>
      <a class="button" href="industries.php"> Our Work</a>
    </div>
    </div>
    </div>
</header>
  
<section id="home-info" class="bg-dark">
  <div class="info-img"></div>
  <div class="info-content">
    <h2><class class="text-primary">About Our Company</h2>
    <p>We are a team of professionals reflecting integrity 
      and confidence we are enthusiastic and energetic, 
      well-prepared to organize. </p>
    <a href="about.php" class="button button-light">Read More</a>
  </div>
</section>
  <section>
 
<footer id="main-footer">
  <p>Finance & Management &copy; 2021, All Rights Reserved</p>
</footer>
</section>
</body>
</html>
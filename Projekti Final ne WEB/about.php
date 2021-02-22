<!DOCTYPE html>

<html lang="en" dir="ltr">

<head> 

  <meta charset="UTF-8">
  <title>About Us</title>
    <link rel="stylesheet" href="CSS/aboutStyle.css">
    <link rel="icon" href="CSS/Image/aboutl.png">
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
</header>

  <section id="about-info" class="y-1">
    <div class="container">
      <div class="info-left">
        <h1 class="titulli">About Our Company</h1>
        <p>FM was created by a team of colleagues who 
          have long experience in working with biggest financial 
          companies, and are guided by a vision to create a new 
          functioning standard for local companies in the field 
          of financial services. FM Group was created in 
          November 2012 aiming to become biggest local company.</p>
          
        <p>We have managed to develop a network of successful people, 
          dedicated to offering quality services in audition, taxes, 
          financial consulting, and trainings.We build our relationship 
          with others based on proper execution of our responsibilities. 
          We are distinguished by values we nurture which, at the same time, 
          represent our company’s foundations.</p>
      </div>
      <div class="info-right">
        <img src="CSS/Image/aboutus.jpg" alt="AboutUs">
      </div>
    </div>
  </section>

  <section id="komentet" class="y-1">
    <div class="container">
      <h2 class="titulli">What Our Guest Say</h2>
      <div class="opinione">
        <p>“The service I’ve received from so many people 
          at F&M has been excellent, their 
          knowledge and advice have been instrumental in 
          turning around the fortunes of my company. 
          Always professional and friendly in equal 
          measure – even with deadlines looming!”.  - Nadia Solskjaer</p>
      </div>
      <div class="opinione">
        <p>“F&M have always been helpful and understanding.
          I am in the Equine industry which is extremely busy 
          most of the time and my accounts are the one thing 
          that I don’t have to worry about … lovely!”.  - Jesse Parni</p>
      </div>
    </div>
  </section>

  <footer id="main-footer">
    <p>Finance & Management &copy; 2021, All Rights Reserved</p>
  </footer>
  
</body>
</html> 
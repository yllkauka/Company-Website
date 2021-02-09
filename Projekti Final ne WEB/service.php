<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title> Service </title>
        <link rel="stylesheet" href="serviceStyle.css">
        <link rel="shortcut icon" href="Image/services.png"> 
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
  <section>
    <div class="services">
      <h1>Our Services</h1>
      <div class="content">
      <div class="service">
        <h2>Audit and Assurance</h2>
        <p>Our ability in offering high 
          quality services in the field 
          of audition and security is
          supported by deep knowledge 
          our team have concerning business 
          processes, accounting policies,
          interior control, and relevant issues
          of financial reporting which are 
          specific to each business and industry.</p>
      </div>
      <div class="service">
        <h2>New Investment Consulting</h2>
        <p>Our specialized staff in this field assists clients
          in offering their capital in a smarter way. 
          We help them in evaluating investment projects, 
          in order to find best capital structure, as well 
          as in evaluating and sharing the risk.</p>
      </div>
      <div class="service">
        <h2>Business Reorganization</h2>
        <p>We offer professional help in structural setup 
            and reorganization of companies. We enable 
            construction of a stable organizational structure,
            department building and systematization, 
            duties and responsibilities assignment,
            control and procedure design,
            and accounting system implementation.</p>
      </div>
     
      <div class="service">
        <h2>Training</h2>
        <p>Having had a proper education and professional formation,
          our staff offers effective possibilities of training for
          professional capacity enhancement, business activity 
          adjustment, and strategic developments. Our training includes:
          Public finance, Budgeting, International Financial Reporting Standards, 
          Local governmental administration.</p>
      </div>
    </div>
  </section>
  
  <section>
    <footer id="main-footer">
      <p>Finance & Management &copy; 2021, All Rights Reserved</p>
    </footer>
  </section> 
</body>
</html>
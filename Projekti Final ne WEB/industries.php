<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title> Industries </title>
        <link rel="stylesheet" href="CSS/industries.css">
        <link rel="shortcut icon" href="CSS/Image/industry.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      </head>
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
    <div class="slider">
        <input type="radio" name="slide" id="slide-1" checked>
        <input type="radio" name="slide" id="slide-2">
        <input type="radio" name="slide" id="slide-3">

        <div class="slides">
            <div class="slide slide-1">
                <div class="slide-data">
                <h1>Education</h1>
                <p>
                    Our team of field experts will be at your disposal to counsel you in finding a proper 
                    solution in the field of oil, gas, bioderivates, mines and water research. Our knowledge 
                    of this sector is enormous; therefore we invite you to take advantage from our experience 
                    with local and global market conditions.
                </p>
                    
                </div>
            </div>
            <div class="slide slide-2">
                <div class="slide-data">
                    <h1>Medicine and Health</h1>
                    <p>
                      Service and insurance of clients are the main principles of functioning as a business,
                      which is in full accordance with our values. We are the only local company with an
                      impressive experience in this field. We have been main counselors to biggest medical 
                      clinics in the country. Our knowledge of market and its specifics makes us very effective
                      in businesses that currently operate in this industry or are considering becoming part of it.
                    </p>
                </div>
            </div>
            <div class="slide slide-3">
                <div class="slide-data">
                    <h1>Energy</h1>
                    <p>Our team of field experts will be at your disposal to counsel you in finding a proper 
                       solution in the field of oil, gas, bioderivates, mines and water research. Our knowledge 
                       of this sector is enormous; therefore we invite you to take advantage from our experience 
                       with local and global market conditions.</p>
                   
                </div>
            </div>
        </div>

        <div class="arrows arrow-left">
            <label for="slide-3">
                <span><i class="fas fa-angle-left"></i></span>
            </label>
            <label for="slide-1">
                <span><i class="fas fa-angle-left"></i></span>
            </label>
            <label for="slide-2">
                <span><i class="fas fa-angle-left"></i></span>
            </label>
        </div>

        <div class="arrows arrow-right">
            <label for="slide-2">
                <span><i class="fas fa-angle-right"></i></span>
            </label>
            <label for="slide-3">
                <span><i class="fas fa-angle-right"></i></span>
            </label>
            <label for="slide-1">
                <span><i class="fas fa-angle-right"></i></span>
            </label>
        </div>

        <div class="dots">
            <label for="slide-1"></label>
            <label for="slide-2"></label>
            <label for="slide-3"></label>
        </div>
    </div>
</header>
<section>
    <div class="clr"></div>
    <footer id="main-footer">
        <p>Finance & Management &copy; 2021, All Rights Reserved</p>
    </footer>
  </section>
  </body>
</html>
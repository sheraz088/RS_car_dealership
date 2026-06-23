<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/home.css">
    <title>RS</title>
</head>
<body>

  <header class = "header">
    <a href = "Home.php" class = "logo"> <span>RS</span>-DEALERS </a>
    <nav class = "navbar">
        <a href="Home.php">HOME</a>
        <a href="vehicles.php">VEHICLES</a>
        <a href="registration.php">REGISTER </a>
        <a href="Home.php">CONTACT US</a>
    </nav>


    <div id="login-btn">
        <button class="btn">
            <a href="login.php">LOGIN</a>
        </button>
    </div>
  </header>

  <section class="home" id="home">
  <h1> EXPLORE YOUR CHOICE<h1>
              <img src="../assets/images/h.png">
          <button class="btn">
              <a href="vehicles.php">EXPLORE</a>
          </button>
  </section>

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-home"></i>
        <div class="content">
            <h3> 5+ </h3>
            <p>Branches</p>
        </div>
    </div>
    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3> 50+ </h3>
            <p>Cars Sold</p>
        </div>
    </div>
    <div class="icons">
        <i class="fas fa-user"></i>
        <div class="content">
            <h3> 50+ </h3>
            <p>Satisfied Clients</p>
        </div>
    </div>
    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3> 90+ </h3>
            <p>New Cars</p>
        </div>
    </div>

</section>

<section>
    <div class="vehicles" id="vehicles">
        <br>
        <h1 class="heading">FEATURED <span> CARS </span></h1>

    </div>

  <!-- Slideshow container -->
  <div class="slideshow-container">

      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>

          <img src="../assets/images/h17.png" alt=" " style="width:50% " >

          <div class="text">Honda Civic </div>
          <a href="vehicles.php" class="button">Check Out</a>
      </div>

      <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="../assets/images/f.png" style="width:50%">
          <div class="text">Toyota Fortuner</div>
          <a href="vehicles.php" class="button">Check Out</a>
      </div>

      <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="../assets/images/s-swift.png" style="width:50%">
          <div class="text">Suzuki Swift</div>
          <a href="vehicles.php" class="button">Check Out</a>
      </div>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <!-- The dots/circles -->
  <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
  </div>
</section>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>

<section class="services" id="services">
    <br>
    <h1 class="heading"> OUR <span> SERVICES</span></h1>

<div class="box-container">

    <div class="box">
    <i class="fas fa-car"></i>
            <h3>Car Selling </h3>
            <p>Get Most Popular Cars</p>
            <a href="vehicles.php"  class="btn">GET SERVICE</a>
    </div>

    <div class="box">
        <i class="fas fa-tools"></i>
                <h3>Spear Parts </h3>
                <p>Get The Best Quality Parts for your Car</p>
                <a href="maintainance.php" class="btn">GET SERVICE</a>
    </div>


    <div class="box">
        <i class="fas fa-car-crash"></i>
                <h3>Car INSURANCE </h3>
                <p>Keep Your Car Safe For Safe Use</p>
                <a href="maintainance.php" class="btn">GET SERVICE</a>
    </div>


    <div class="box">
        <i class="fas fa-car-battery"></i>
                <h3>Battery Replacement</h3>
                <p>We Deal With Best Quality Replacement Of cars Battery  </p>
                <a href="maintainance.php" class="btn">GET SERVICE</a>
    </div>
    <div class="box">
        <i class="fas fa-gas-pump"></i>
                <h3>OIL SELLING</h3>
                <p>Get the Best Quality Engine Oil For your Car</p>
                <a href="maintainance.php" class="btn">GET SERVICE</a>
    </div>
    <div class="box">
        <i class="fas fa-headset"></i>
                <h3>24/7 SUPPORT</h3>
                <p>We Are 24/7 Available for your Help  </p>
                <a href="maintainance.php" class="btn">GET SERVICE</a>
    </div>

</div>

</section>

<section class="footer">
    <div class="box-container">


        <div class="box">
            <h3>QUICK LINKS</h3>
            <a href="Home.php"><i class="fas fa-map-arrow-right"> </i>HOME </a>
            <a href="vehicles.php"><i class="fas fa-map-arrow-right"> </i>VEHICLES </a>
            <a href="registration.php"><i class="fas fa-map-arrow-right"> </i>REGISTER</a>
            <a href="maintainance.php"><i class="fas fa-map-arrow-right"> </i>MAINTAINANCE </a>
            <a href="contact-us"><i class="fas fa-map-arrow-right"> </i>CONTACT US </a>
        </div>

        <div class="box">
            <h3>OUR BRANCHES</h3>
            <a href="#"><i class="fas fa-map-marker-alt"> </i>ISLAMABAD </a>
            <a href="#"><i class="fas fa-map-marker-alt"> </i>RAWALPINDI </a>
            <a href="#"><i class="fas fa-map-marker-alt"> </i>LAHORE </a>
            <a href="#"><i class="fas fa-map-marker-alt"> </i>KARACHI </a>
        </div>

        <div class="box">
            <h3>QUICK LINKS</h3>
            <a href=""><i class="fab fa-facebook-f"> </i>FACEBOOK </a>
            <a href=""><i class="fab fa-twitter"> </i>TWITTER </a>
            <a href=""><i class="fab fa-instagram"> </i>INSTAGRAM</a>
            <a href=""><i class="fab fa-linkedin"> </i>LINKED-IN </a>
            <a href=""><i class="fab fa-pinterest"> </i>PINTEREST </a>
        </div>


    </div>

</section>

</body>
</html>

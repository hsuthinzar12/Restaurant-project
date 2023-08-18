<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallery</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/gallery.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald|Ubuntu">
    <script src="https://kit.fontawesome.com/d0e61acce7.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
  <script>
    $(document).ready(function () {
      $('#bar').click(function () {
        $('.navlist').toggleClass('show');
      })
    });
  </script>
</head>

<body>
<header>
        <div class="header">
            <div class="logo">
                <a href="../html/index.php"><img src="../image/logo_red_version.png" alt="logo" id="logo"></a>
            </div>
            <div class="navlist">
                <ul class="nav-ul-list">
                    <li>
                        <a class="nav-list-item" href="../html/location.php">Location</a>
                    </li>
                    <li>
                        <a class="nav-list-item" href="../html/Menu.php">Menu</a>
                    </li>
                    <li>
                        <a class="nav-list-item" href="../html/contact.php">Contact</a>
                    </li>
                    <li>
                        <a class="nav-list-item" href="../html/gallery.php">Gallery</a>
                    </li>
                    <li>
                        <a class="nav-list-item" href="../html/Login.php">Reservation</a>
                    </li>
                </ul>
            </div>
            <div class="signin-div">
                <a href="../html/Login.php" id="signup">Sign In</a>
            </div>
            <span class="bar-icon">
                <i class="fa-solid fa-bars" id="bar"></i>
            </span>
        </div>
    </header>

    <div class="container">
         <!-- Slideshow container -->
    <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="../image/sushi1.jpg" style="width:100%">
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="../image/sushi3.jpg" style="width:100%">
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="../image/sushi0.jpg" style="width:100%">
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
        <h1 id="mt">Plates</h1>
        <div class="image-container">
                <div class="image"><img src="../image/salmon sashimi.jpg" alt=""></div>
                <div class="image"><img src="../image/shrimp soup.jpg" alt=""></div>
                <div class="image"><img src="https://img.freepik.com/free-photo/clams-fried-curry-powder-black-plate_1150-23770.jpg?w=1060&t=st=1674454173~exp=1674454773~hmac=df2ca0bab4a44aed35f78db7047edd176a1495bce3184c001570067c983a163a" alt=""></div>
                <div class="image"><img src="../image/Seafood Platter Grilled.jpg" alt=""></div>
                <div class="image"><img src="../image/Tamago sushi.jpg" alt=""></div>
                <div class="image"><img src="../image/Ebiko Sushi.jpg" alt=""></div>
        </div>

        <div class="popup-image">
            <span>&times;</span>
            <img src="../image/salmon sashimi.jpg" alt="">
        </div>

        <h1>Decoratation</h1>
        <div class="image-container">
            <div class="image"><img src="../image/r1.png" alt=""></div>
            <div class="image"><img src="../image/r2.png" alt=""></div>
            <div class="image"><img src="../image/r3.png" alt=""></div>
            <div class="image"><img src="../image/r0.png" alt=""></div>
            <div class="image"><img src="../image/r5.png" alt=""></div>
            <div class="image"><img src="../image/r6.png" alt=""></div>
        </div>

    </div>
    <footer>
        <section class="footer-section">
            <div class="flogo-div">
                <img src="../image/logo_white_version.png" alt="">
            </div>
            <div class="footer-link">
                <ul class="flink-ul">
                    <li id="flink-list-item"><a href="../html/index.php">Home</a></li>
                    <li id="flink-list-item"><a href="../html/Menu.php">Menu</a></li>
                    <li id="flink-list-item"><a href="../html/location.php">Location</a></li>
                    <li id="flink-list-item"><a href="../html/Login.php">Reservation</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <a href="../html/contact.php">Contact</a>
                <p>09-xxx-xxx-xxx</p>
                <p>contact@gmail.com</p>
                <a href="#">
                    <i class="fa-brands fa-square-facebook"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-square-instagram"></i>
                </a>
            </div>
        </section>
        <span id="copy">&copy;うみのあじ All Rights Reserved</span>
    </footer>

    <script>
        document.querySelectorAll('.image-container img').forEach(image => {
            image.onclick = () => {
                document.querySelector('.popup-image').style.display = 'block';
                document.querySelector('.popup-image img').src = image.getAttribute('src');
            }
        });
        document.querySelector('.popup-image span').onclick = () => {
            document.querySelector('.popup-image').style.display = 'none';
        }
    </script>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
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
</body>

</html>
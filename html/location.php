<!DOCTYPE html>
<html lang="en">

<head>
  <title>Gallery</title>
  <meta charset="UTF-8">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.css"
    integrity="sha512-YFENbnqHbCRmJt5d+9lHimyEMt8LKSNTMLSaHjvsclnZGICeY/0KYEeiHwD1Ux4Tcao0h60tdcMv+0GljvWyHg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style_black.css" type="text/css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald|Ubuntu">
  <link href="../css/location.css" rel="stylesheet">
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

<body class=" bg-black">

  <section class="container-fluid">
    <div class="row">
      <div class="header">
        <div class="logo">
          <a href="../html/index.php"><img src="../image/red version logo.png" alt="logo" id="logo"></a>
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
          <a href="#" id="signup">Sign In</a>
        </div>
        <span class="bar-icon">
          <i class="fa-solid fa-bars" id="bar"></i>
        </span>
      </div>
    </div>
  </section>

  <div class="container">
    <div class="row my-5 py-5">
      <div class=" col-12 d-flex gap-3 my-3 flex-column flex-md-row">
        <div class=" flex-grow-1">
          <iframe class=" w-100 h-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1441.7536428124345!2d139.71007410292228!3d35.529626343177625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601860b8d139e07b%3A0x45ae7b924c2fc2d6!2zSmFwYW4sIOOAkjIxMC0wMDExIEthbmFnYXdhLCBLYXdhc2FraSwgS2F3YXNha2kgV2FyZCwgRnVqaW1pLCAxLWNoxY1tZeKIkjHiiJI0IOW3neW0juW4guS9k-iCsumkqA!5e0!3m2!1sen!2smm!4v1671250330102!5m2!1sen!2smm"></iframe>
        </div>
        <div class=" text-white my-3 flex-grow-1 d-flex justify-content-center align-items-center">
          <div class=" mx-auto my-auto">
            <h1>Location</h1>
            <p>Located just 200m from the Kawasaki City you can easily reach us.</p>
            <ul>
              <li>Beside Fujimi Station</li>
              <li>Public Bus & Taxi stop near Tuhochi Hotel</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <footer>
      <section class="footer-section">
        <div class="flogo-div">
          <img src="../image/logo_white_version.png" alt="">
        </div>
        <div class="footer-link">
          <ul class="flink-ul">
            <li id="flink-list-item"><a href="../html/index.php">Home</a></li>
            <li id=" flink-list-item"><a href="../html/Menu.php">Menu</a></li>
            <li id="flink-list-item"><a href="../html/location.php">Location</a></li>
            <li id="flink-list-item"><a href="../html/Login.php">Reservation</a></li>
          </ul>
        </div>

        <div class="footer-contact">
          <a href="../html/contact.php">Contact</a>
          <p>09-xxx-xxx-xxx</p>
          <p>contact@gmail.com</p>
          <a href="https://www.facebook.com/">
            <i class="fa-brands fa-square-facebook"></i>
          </a>
          <a href="https://twitter.com/">
            <i class="fa-brands fa-twitter"></i>
          </a>
          <a href="https://www.instagram.com/">
            <i class="fa-brands fa-square-instagram"></i>
          </a>
        </div>
      </section>
      <span id="copy">&copy;うみのあじ All Rights Reserved</span>
    </footer>

  </div>
  <script src="../js/bootstrap.bundle.js"></script>
</body>

</html>
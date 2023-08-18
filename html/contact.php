<?php
require_once('restaurant_database.php');
 
if(array_key_exists('send',$_POST)){
    contact();
}
function contact()
{
    $conn = new mysqli('localhost', 'root', '', 'restaurant');
    $name = mysqli_real_escape_string($conn, @$_POST['name']);
    $email = mysqli_real_escape_string($conn, @$_POST['email']);
    $ph_no = mysqli_real_escape_string($conn, @$_POST['ph_no']);
    $message = mysqli_real_escape_string($conn, @$_POST['txtarea']);

    // $sql = "INSERT INTO contact(name, email, ph_no, message) VALUES ($name, $email, $ph_no, $message)";
    $sql = $conn->prepare("INSERT INTO contact (name, email, ph_no, message) VALUES (?,?,?,?)");

    if ($conn->connect_error) {

        die();
    } else {
        $slmt = $conn->prepare("insert into contact (name, email, ph_no, message) values(?,?,?,?)");
        $slmt->bind_param(
            "ssis",
            $name,
            $email,
            $ph_no,
            $message
        );
        $slmt->execute();
        $slmt->close();
        $conn->close();
    }

    if(empty($errors)){
        echo '<script>alert("Thank You!")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald|Ubuntu">
    <link rel="stylesheet" href="../css/style_black.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="../js/index.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/d0e61acce7.js" crossorigin="anonymous"></script>
    <title>Contact</title>
    <script type="text/javascript">
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
                <a href="../html/index  "><img src="../image/logo_red_version.png" alt="logo" id="logo"></a>
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
    
    <div class="contact-article">
        <span class="contact-head-span">
            <h2 id="contact-head">Contact Us</h2>
        </span>
        <p id="contact-article-txt1">
            We would love to help with any questions, feedback or issues you are having with our restaurant.
        </p>
        <p id="contact-article-txt2">
            If you are reporting a bug, it's super helpful to provide screenshots and videos of the issue (and console logs if you know how!).
        </p>
    </div>

    <div class="form-div">
        <form name="contact_form" onsubmit="return validation()" method="post">
            <div class="form-sub-div">
                <span id="nameerr"></span> <br>
                <input type="text" placeholder="Name" id="name" name="name" minlength="8" maxlength="12">
            </div>
            <div class="form-sub-div">
                <span id="emailerr"></span> <br>
                <input type="text" placeholder="Email" name="email" id="email_check">
            </div>
            <div class="form-sub-div">
                <span id="numerr"></span> <br>
                <input type="number" name="ph_no" placeholder="Phone Number">
            </div>
            <div class="form-sub-div">
                <span></span> <br>
                <textarea name="txtarea" placeholder="Your Message" id="" cols="23" rows="10"></textarea>
            </div>
            <div class="send_btn">
               <input type="submit" name="send" value="Send">
            </div>
        </form>
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
</body>
</html>
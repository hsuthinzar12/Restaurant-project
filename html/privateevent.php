<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private Event</title>
    <link rel="stylesheet" href="../css/privateevent.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald|Ubuntu|Josefin Sans|Anek Devanagari">
    <link rel="stylesheet" href="htttps://cdjs.cloudfare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <script src="https://kit.fontawesome.com/d0e61acce7.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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
    <!--=================Private Event Section Start Here==================-->
    <section>
        <div class="eventheader">
            <h1 class="eventheadertxt">Events</h1>
            <img src="../image/eventheader.jpg" id="eventheader-img" alt="">
        </div>

        <div class="eventtxt">
            <h1>HOST YOUR NEXT PARTY OR WORK EVENT</h1>
            <h1>AT</h1>
            <h1>- うみのあじ -</h1>
            <p>Whether you're looking for a Karaoke Night on our Front Porch, a cocktail party on our Pool Patio, a team
                dinner around the Big Wood Table, or a full takeover of the Hojoko for larger scale events...our team of
                events professionals can turn your vision into a reality!</p>
        </div>
        <hr class="line">
        <div class="eventtxt2">
            <img src="../image/sushidining.jpg" alt="" class="sushidining">
            <div class="eventtxt">
                <h1>Private Dining</h1>
                <p>Located inside an historic fire house in Boston's Leather District, the dining room at うみのあじ is the
                    perfect setting for your next intimate celebration.</p>
            </div>
        </div>

        <!--=================dining room====================-->
        <div class="maindining">
            <div class="diningtab">
                <img src="../image/diningroom1.jpg" alt="">
                <h3>Private Dining Room</h3>
                <p>
                    Perfect for holiday parties, lunch meetings, bridal shower brunches, rehearsal dinners, and more!
                    The Starlight Private Dining Room can accommodate up to 32 guests for a seated meal or for a
                    standing cocktail style reception. It features full a/v capability, and retractable windows for
                    open-air. It also has a private entrance to the seasonal Oasis Patio, which can be booked as a
                    supplement to the Starlight private dining room.
                </p>
                <h4>Capacity: 32</h4>
            </div>
            <div class="diningtab">
                <img src="../image/diningroom2.jpg" alt="">
                <h3>Bar</h3>
                <p>
                    Take in the energy of the Bianca Bar for your next cocktail style reception! Our spacious bar is the
                    perfect destination for office happy hours, parent socials, and pre-dinner cocktails before a seated
                    meal. The bar features four TVs (perfect for Game Day gatherings!) and access to the Polaris Patio.
                    The long drink rails and bar top are designed for buffet stations or stationary displays
                </p>
                <h4>Capacity: 32 seated, 50 standing</h4>
            </div>
        </div>

        <!--=======================Booking======================-->
        <div class="booking">
            <h1>Book an Event With Us</h1>

            <p>
                Our versatile and welcoming space will have you daydreaming of vacation while enjoying a taste of home
                at
                the same time. The globally-inspired menu has something for everyone. Whether you're celebrating a
                milestone
                or entertaining clients, we'll help you throw an event your guests are sure to remember
            </p>
            <p>
                Our event professionals will work with you to make plans so that you can provide your guests with a
                memorable event in one of our beautiful spaces.
            </p>
            <a href="#">Book Now</a>
        </div>
        <hr class="line">
        <!--==========================Upcoming Event===============================-->
        <div class="upcomingeventheader"><h1>Upcoming Events</h1>
        </div>
        <div class="card-container">
            <div class="photo-container">
                <div class="date">
                    <div class="day">15</div>
                    <div class="month">MAY</div>
                </div>
                <div class="image"></div>
            </div>
            <div class="info-container">
                <div class="event-name">
                    Twice <br>
                    'Our Youth' Pre-Release English Single
                </div>
                <div class="event-location">
                    Early celebration in the Corner Pocket
                </div>
            </div>
        </div>
        <div class="card-container">
            <div class="photo-container">
                <div class="date">
                    <div class="day">16</div>
                    <div class="month">MAY</div>
                </div>
                <div class="image"></div>
            </div>
            <div class="info-container">
                <div class="event-name">
                    New Jeans <br>
                    'OMG' single album
                </div>
                <div class="event-location">
                    See headlining artist: Soulja Boy
                </div>
            </div>
        </div>
        <div class="card-container">
            <div class="photo-container">
                <div class="date">
                    <div class="day">22</div>
                    <div class="month">MAY</div>
                </div>
                <div class="image"></div>
            </div>
            <div class="info-container">
                <div class="event-name">
                    IVE <br>
                    'After Like' new single album
                </div>
                <div class="event-location">
                    De-stress before finals with puppies!
                </div>
            </div>
        </div>
        <hr class="line">
        <!--=========================================================-->
        <div class="eventfooter">
            <div class="eftabs">
                <img src="../image/icons8-email-64.png" alt="icon" class="footericon">
                <h2>Email Us</h2>
                <p>customerservice@uminoaji.com</p>
            </div>

            <div class="eftabs">
                <img src="../image/icons8-ringing-phone-50.png" alt="icon" class="footericon">
                <h2>Contact Us</h2>
                <p><a href="#">Find your local Restaurant</a></p>
            </div>


            <div class="eftabs">
                <img src="../image/icons8-newsletter-60.png" alt="icon" class="footericon">
                <h2>Subscribe Newsletter</h2>
                <p><input type="email" placeholder="Enter your email"><button><i
                            class="fa-regular fa-paper-plane"></i></button></p>
            </div>

            <div class="eftabs">
                <img src="../image/icons8-delivery-man-64.png" alt="icon" class="footericon">
                <h2>Offers</h2>
                <p><a href="#">discounts and specials.</a></p>
            </div>
        </div>
    </section>

    <!--=============this is footer=============-->
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="../css/style_black.css" type="text/css">
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


    <div class="maintopic">
        <div class="lefttopic">
            <p id="txthead">Best Food For Your Taste</p>
            <p id="topictxt">Synergistically network frictionless interfaces via timely
                functionalities. Holistickly pursue e-business methods of emprovement.
            </p>

            <div class="left-topic-button">
                <div><a href="../html/Menu.php">Menu</a></div>
            </div>
        </div>
        <div class="righttopic">
            <p><img src="https://images.pexels.com/photos/6249518/pexels-photo-6249518.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    id="prawn" alt="">
            </p>
        </div>
    </div>

    <section class="about-section">
        <div class="about">
            <div class="leftabout">
                <img id="aboutphoto"
                    src="https://images.pexels.com/photos/12971913/pexels-photo-12971913.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
            </div>
            <div class="rightabout">
                <p id="txthead2">Our Story</p>
                <p id="abouttxt">
                    Seafood is any form of sea life regarded as food by humans, prominently including fish and
                    shellfish.
                    Shellfish include various species of molluscs (e.g. bivalve molluscs such as clams, oysters and
                    mussels,
                    and cephalopods such as octopus and squid), crustaceans (e.g. shrimp, crabs, and lobster), and
                    echinoderms (e.g. sea cucumbers and sea urchins).
                </p>
            </div>
        </div>
    </section>

    <section class="special-menu-section">
        <p id="special-menu-title">Special Menu</p>
        <div class="special-menu">

            <div class="special-menu-item">
                <div class="smenu-photo-div">
                    <img id="special-menu-photo"
                        src="https://img.freepik.com/free-photo/side-view-sushi-set-with-soy-sauce-chopsticks-wooden-serving-board_176474-3234.jpg?w=1060&t=st=1674108904~exp=1674109504~hmac=ce116b13d6317703e7ddd14ff6344e4f3052dd73f26a688fa0b4f55b6fb0b54b" alt="sushi">
                </div>
                <div class="smenu-txt">
                    <h2>Sushi</h2>
                    <p>
                        Sushi (pronounced is a Japanese dish of prepared vinegared
                        rice (sushi-meshi), usually with some sugar and salt, accompanied by a variety of
                        ingredients (neta), such as seafood, often raw, and vegetables. Styles of sushi and its
                        presentation vary widely, but the one key ingredient is "sushi rice", also referred to as shari
                        or sumeshi.
                    </p>
                </div>
            </div>

            <div class="special-menu-item">
                <div class="smenu-txt smenu2-div">
                    <h2>Sashimi</h2>
                    <p>
                        Sashimi is a Japanese delicacy consisting of fresh raw fish or meat sliced into thin pieces and
                        often eaten with soy sauce.
                    </p>
                </div>
                <div class="smenu-photo-div">
                    <img id="special-menu-photo"
                        src="https://img.freepik.com/free-photo/salmon-raw-sashimi_1339-3830.jpg?w=1060&t=st=1674108999~exp=1674109599~hmac=faff794da2052aa77a7421b92d7bb5a1077561f9798fde74bf0181f80665ea6c" alt="crab">
                </div>
            </div>

            <div class="special-menu-item">
                <div class="smenu-photo-div">   
                    <img id="special-menu-photo"
                        src="https://cdn.pixabay.com/photo/2014/09/11/11/17/prawn-441623_960_720.jpg" alt="prawn">
                </div>
                <div class="smenu-txt">
                    <h2>Prawn</h2>
                    <p>
                        The term "prawn"is used particularly in the United Kingdom, Ireland, and Commonwealth
                        nations, for large swimming crustaceans or shrimp, especially those with commercial
                        significance in the fishing industry.
                    </p>
                </div>
            </div>
    </section>


    <div class="preview">
        <div class="previewitem">
            <img id="previewitem"
                src="https://images.pexels.com/photos/679454/pexels-photo-679454.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
            <a href="#">
                <div class="textoverlay">
                    <div class="content">MENU</div>
                </div>
            </a>
        </div>
        <div class="previewitem">
            <img id="previewitem"
                src="https://images.pexels.com/photos/1683545/pexels-photo-1683545.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
            <a href="../html/gallery.php">
                <div class="textoverlay">
                    <div class="content">GALLERY</div>
                </div>
            </a>
        </div>
        <div class="previewitem">
            <img id="previewitem"
                src="https://images.pexels.com/photos/10732451/pexels-photo-10732451.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
            <a href="../html/location.php">
                <div class="textoverlay">
                    <div class="content">LOCATION</div>
                </div>
            </a>
        </div>
    </div>

    <section class="article1-section">
        <div class="article1-div">
            <div class="article1-left-div">
                <img src="https://img.freepik.com/free-photo/catering-food-meal-canape_624325-812.jpg?w=1060&t=st=1670309986~exp=1670310586~hmac=45d9400324c0c8671637f900418b3f16449d4ee42c8fbdd747b975ffa0e8bd0f" alt="photo">
            </div>
            <div class="article1-right-div">
                <p id="article1-title">Catering Service</p>
                <p id="article1-text">
                    A voyage in the tastes and perfumes of the Silk Road…
                    Persia on a platter.Reinventing Persian family recipes with subtle
                    and varied flavours for an exotic Persian taste.
                    Whatever your special occasion, from family dinners to corporate
                    events and galleries to weddings,
                    we can cater to make a memorable experience for everyone involved.
                    Just call us and we can discuss your needs to create a playful and
                    elegant Persian feast.
                    We can also bake a speciality cake for your occasion.
                    Let us know if you need a chef to assemble the canapes or if you need servers.
                    Everything is possible.
                </p>
            </div>
        </div>
    </section>

    <fieldset class="hours-location-field">
        <legend>Hours & Locations</legend>
        <div>
            <p>Close Sunday and Monday</p>
            <p>Tuesday Thursday Friday 11:30 AM till 8:30 PM</p>
            <p>Saturday 12:00 PM till 2:30 PM</p>
            <p>Saturday closed between 2:30 PM & 4:00 PM</p>
            <p>Saturday Open 4:00 PM till 9:00 PM</p>
            <p>Friday and Saturday take out avaliable until 2:00 PM</p>
            <p id="address">43 Pelham RoadSalem, NH</p>
        </div>
    </fieldset>

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
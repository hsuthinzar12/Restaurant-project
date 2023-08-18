<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Menu</title>
    <link rel="stylesheet" href="../css/Menu.css" type="text/css">
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
                    <li>
                        <div class="shopping_container">
                            <i class="fa-solid fa-cart-shopping" id="cart-icon"></i>
                        </div>
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

    <section>
        <!--============Menu Overlay============-->
        <!--<div class="mvdbox">
            <video autoplay muted loop src="../image/sushi/Sony Sushi 4K Demo.mkv"></video>
            <h2>text</h2>
        </div>-->
        <div class="main">
            <div class="main_content">
                <div class="main_text">
                    <h1>Always Fresh and Delicious</h1>
                    <p>Sushi consisting of a small ball of rice with a touch of wasabi and topped with raw fresh fish or
                        other seafood.</p>
                    <a href="../html/reservation.php">Reserve a Table</a>
                </div>
                <div class="main_img">
                    <img src="../image/sushi flip.jpg" alt="">
                </div>
            </div>
        </div>
        <!--=============================Best selling menus========================-->

        <div class="chefheader">
            <h1>Our Menu</h1>
        </div>

        <!--======shopping cart======-->


        <div class="cart-table" id="shopping_cart">
            <h2 class="cart-title">Your Cart</h2>
            <div class="cart-content">
            </div>
            <div class="buy-box">
                <div class="total">
                    <div class="total-title">Total</div>
                    <div class="total-price">$0</div>
                </div>

                <div class="btn-div">
                    <button class="btn-buy">
                        <a href="../html/Menu_login.php" id="btn-buy">
                            Buy Now
                        </a>
                    </button>
                </div>
            </div>
            <i class="fa-regular fa-rectangle-xmark" name="close-outline" id="close-cart"></i>
        </div>

        <!--content-->
        ============Menu Card=============
        <div class="menuicon">
            <div><a href="#sushi"><img src="../image/sushiicn.png" class="micn" /></a>
            </div>
            <div><a href="#sides"><img src="../image/sides.png" class="micn" /></a>
            </div>
            <div><a href="#soup"><img src="../image/soup-noodles.png" class="micn" /></a>
            </div>
            <div><a href="#dessert"><img src="../image/dessert.png" class="micn" /></a>
            </div>

        </div>



        <div class="menucontainer">
            <!--============================Sushi=============================-->

            <div class="menuh1">
                <h1 id="sushi">Sushi</h1>
            </div>
            <!--===================Popup View==================-->
            <script type="text/javascript">
                var popupViews = document.querySelectorAll('.popup-view');
                var popupBtns = document.querySelectorAll('.popup-btn');
                var closeBtns = document.querySelectorAll('.close-btn')

                //for view details button
                var popup = function (popupClick) {
                    popupViews[popupClick].classList.add('active');
                }

                popupBtns.forEach((popupBtn, i) => {
                    popupBtn.addEventListener("click", () => {
                        popup(i);
                    });
                });

                //for close btn
                closeBtns.forEach((closeBtn) => {
                    closeBtn.addEventListener("click", () => {
                        popupViews.forEach((popupViews) => {
                            popupView.classList.remove('active');
                        })
                    });
                }
                )
            </script>
            <!--===========================================================-->

            <!--============================Menu Boxes=============================-->
            <div class="sushi">
                <div class="menubox" data-name="m-1">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Albacore Otoro</h6>
                        <a href="">
                            <img src="../image/sushi/Albacore.jpeg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>

                        <div class="box">
                            <a class="button" href="#popup1">See Details</a>
                        </div>

                    </div>

                    <div id="popup1" class="overlay">
                        <div class="popup">
                            <h2>Albacore Tuna Bintoro <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/Albacore.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/Albacore.jpeg" alt="">
                            </div>
                            <p>Juicy tender albacore tuna belly from Japan on specialty sushi rice</p>
                        </div>
                    </div>
                </div>


                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Aburi Eel</h6>
                        <a href="">
                            <img src="../image/sushi/aburi.jpeg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>

                        <div class="box">
                            <a class="button" href="#popup2">See Details</a>
                        </div>

                    </div>

                    <div id="popup2" class="overlay">
                        <div class="popup">
                            <h2>Aburi Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/aburi.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/aburi.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">

                    <div class="menuimgbox">
                        <h6 class="pro-title">Aburi Salmon</h6>
                        <a href="">
                            <img src="../image/sushi/aburisalmon.jpeg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup3">See Details</a>
                        </div>
                    </div>
                    <div id="popup3" class="overlay">
                        <div class="popup">
                            <h2>Aburi Salmon <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/aburisalmon.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/aburisalmon.jpeg" alt="">
                            </div>
                            <p>Juicy tender albacore tuna belly from Japan on specialty sushi rice</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Conch</h6>
                        <a href="">
                            <img src="../image/sushi/conch.jpeg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup4">See Details</a>
                        </div>
                    </div>

                    <div id="popup4" class="overlay">
                        <div class="popup">
                            <h2>Conch <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/conch.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/conch.jpeg" alt="">
                            </div>
                            <p>Conch on specialty sushi rice</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Eel</h6>
                        <a href="">
                            <img src="../image/sushi/eel.jpeg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>

                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/eel.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/eel.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Garlic Ponzu Salmone</h6>
                        <a href="">
                            <img src="../image/sushi/garlic salmon.jpeg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup6">See Details</a>
                        </div>
                    </div>


                    <div id="popup6" class="overlay">
                        <div class="popup">
                            <h2>Garlic Ponzu Salmon <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/garlic salmon.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/garlic salmon.jpeg" alt="">
                            </div>
                            <p>Salmon on specialty sushi rice drizzled in a garlic and citrus-based oil topped with
                                green onion and sesame</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Dashi Olive Salmon</h6>
                        <a href="">
                            <img src="../image/sushi/olivesalmon.jpeg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup6">See Details</a>
                        </div>
                    </div>


                    <div id="popup6" class="overlay">
                        <div class="popup">
                            <h2>Dashi Olive Salmon <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/olivesalmon.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/olivesalmon.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Sweet Shrimp</h6>
                        <a href="">
                            <img src="../image/sushi/sweetshrimp.jpeg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup6">See Details</a>
                        </div>
                    </div>

                    <div id="popup6" class="overlay">
                        <div class="popup">
                            <h2>Sweet Shrimp <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/sweetshrimp.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/sweetshrimp.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Salmon Toro</h6>
                        <a href="">
                            <img src="../image/sushi/salmon toro.jpeg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Salmon Toro <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/salmon toro.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/salmon toro.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Hamachi Tataki</h6>
                        <a href="">
                            <img src="../image/sushi/hamachi tataki.jpeg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>


                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Hamachi Tataki <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/hamachi tataki.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/hamachi tataki.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Octopus</h6>
                        <a href="">
                            <img src="../image/sushi/octopus.jpeg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>


                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Octopus <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/octopus.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/octopus.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Umami Oil Salmon</h6>
                        <a href="">
                            <img src="../image/sushi/umami oil salmon.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>


                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Umami Oil Salmon <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/umami oil salmon.jpg"></a>
                            <div class="content">
                                <img src="../image/sushi/umami oil salmon.jpg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>
            </div>

            <!--===========================Sides============================-->
            <div class="menuh1">
                <h1 id="sides">Sides</h1>
            </div>
            <div class="sides">
                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Chicken Gyoza</h6>
                        <a href="">
                            <img src="../image/sushi/chicken-gyoza.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Chicken Gyoza <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/chicken-gyoza.jpg"></a>
                            <div class="content">
                                <img src="../image/sushi/chicken-gyoza.jpg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Cripsy Squid</h6>
                        <a href="">
                            <img src="../image/sushi/crispy-squid.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>


                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/crispy-squid.jpg"></a>
                            <div class="content">
                                <img src="../image/sushi/crispy-squid.jpg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Shishito Salmon Skin</h6>
                        <a href="">
                            <img src="../image/sushi/shishito-salmon-skin.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/shishito-salmon-skin.jpg"></a>
                            <div class="content">
                                <img src="../image/sushi/shishito-salmon-skin.jpg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Shrimp Tempura</h6>
                        <a href="">
                            <img src="../image/sushi/shrimp-tempura.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/shrimp-tempura.jpg"></a>
                            <div class="content">
                                <img src="../image/sushi/shrimp-tempura.jpg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Ten Jyu</h6>
                        <a href="">
                            <img src="../image/sushi/ten-jyu.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/eel.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/eel.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Fried Takoyaki</h6>
                        <a href="">
                            <img src="../image/sushi/fried-takoyaki.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/eel.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/eel.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Tonkotsu Yakisoba</h6>
                        <a href="">
                            <img src="../image/sushi/tonkotsu-yakisoba.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/eel.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/eel.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Garlic Beef Steak</h6>
                        <a href="">
                            <img src="../image/sushi/garlic-beef-steak.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/eel.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/eel.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--============soup and noodles==============-->
            <div class="menuh1">
                <h1 id="soup">Soup and Noodles</h1>
            </div>
            <div class="soup">
                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Miso Soup</h6>
                        <a href="">
                            <img src="../image/sushi/miso-soup.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/eel.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/eel.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Shoyu Ramen</h6>
                        <a href="">
                            <img src="../image/sushi/shoyu-ramen.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/eel.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/eel.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Tonkotsu Ramen</h6>
                        <a href="">
                            <img src="../image/sushi/tonkotsu-ramen.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/eel.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/eel.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Tantanmen</h6>
                        <a href="">
                            <img src="../image/sushi/tantanmen.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/eel.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/eel.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Shrimp Tempura Udon</h6>
                        <a href="">
                            <img src="../image/sushi/shrimp-tempura-udon.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/eel.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/eel.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Shoyu Ramen</h6>
                        <a href="">
                            <img src="../image/sushi/shoyu-ramen.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/eel.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/eel.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Miso Ramen</h6>
                        <a href="">
                            <img src="../image/sushi/miso-ramen.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/eel.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/eel.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Beef Udon</h6>
                        <a href="">
                            <img src="../image/sushi/beef-udon.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/eel.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/eel.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--===============Dessert===============-->
            <div class="menuh1">
                <h1 id="dessert">Dessert</h1>
            </div>
            <div class="dessert">
                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Matcha Mochi</h6>
                        <a href="">
                            <img src="../image/sushi/desserts-web10.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#dessert"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/desserts-web10.jpg"></a>
                            <div class="content">
                                <img src="../image/sushi/desserts-web10.jpg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Assorted Mochi</h6>
                        <a href="">
                            <img src="../image/sushi/desserts-web14.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/desserts-web14.jpg"></a>
                            <div class="content">
                                <img src="../image/sushi/desserts-web14.jpg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Strawberry Mochi</h6>
                        <a href="">
                            <img src="../image/sushi/strawberry-mochi-ice-cream.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/eel.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/eel.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Warabimochi</h6>
                        <a href="">
                            <img src="../image/sushi/warabimochi.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/eel.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/eel.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Black Sesame Mochi</h6>
                        <a href="../image/sushi/black-sesame-mochi-ice-cream.jpg" target="_blank">
                            <img src="../image/sushi/black-sesame-mochi-ice-cream.jpg" alt="" id="boxes"
                                class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/eel.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/eel.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Taiyaki ice-cream</h6>
                        <a href="../image/sushi/taiyaki-ice-cream.jpg" target="_blank">
                            <img src="../image/sushi/taiyaki-ice-cream.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/eel.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/eel.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Watermelon</h6>
                        <a href="../image/sushi/watermelon.jpg" target="_blank">
                            <img src="../image/sushi/watermelon.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>

                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/eel.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/eel.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>

                <div class="menubox">
                    <div class="menuimgbox">
                        <h6 class="pro-title">Ny-Cheesecake</h6>
                        <a href="../image/sushi/ny-cheesecake.jpg" target="_blank">
                            <img src="../image/sushi/ny-cheesecake.jpg" alt="" id="boxes" class="img-ovl">
                        </a>
                        <h3 class="product_price">10$</h3>
                        <button class="add-cart fa-solid fa-cart-shopping" id="bag"></button>
                        <div class="box">
                            <a class="button" href="#popup5">See Details</a>
                        </div>
                    </div>


                    <div id="popup5" class="overlay">
                        <div class="popup">
                            <h2>Eel <a href="#sushi"><img
                                        src="https://img.icons8.com/ios-glyphs/30/null/delete-sign.png"
                                        class="close-btn" /></a></h2>
                            <h1>10$</h1>
                            <a class="close" href="../image/sushi/eel.jpeg"></a>
                            <div class="content">
                                <img src="../image/sushi/eel.jpeg" alt="">
                            </div>
                            <p>Flame seared eel on Kura specialty sushi rice drizzled in miso sauce and topped with
                                cream cheese</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--==============================Fresh Ingredient====================================-->
        <div class="freshheader">
            <h2>Carefully Selected & Prepared</h2>
            <h1>- Always Fresh Ingredient - </h1>
        </div>
        <div class="freshtabs">
            <div class="freshbox">
                <img src="../image/icons8-shrimp-50.png" alt="" class="freshicn">
                <h2>Fresh Shrimp</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, atque dignissimos quo quia vero iure.
                    Voluptatum labore esse quasi officia unde perspiciatis non ab a beatae quam architecto, itaque
                    fugit!</p>
            </div>

            <div class="freshbox">
                <img src="../image/icons8-squid-99.png" alt="" class="freshicn">
                <h2>Fresh Squid</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, atque dignissimos quo quia vero iure.
                    Voluptatum labore esse quasi officia unde perspiciatis non ab a beatae quam architecto, itaque
                    fugit!</p>
            </div>


            <div class="freshbox">
                <img src="../image/icons8-soy-sauce-50.png" alt="" class="freshicn">
                <h2>Soy Sauce</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, atque dignissimos quo quia vero iure.
                    Voluptatum labore esse quasi officia unde perspiciatis non ab a beatae quam architecto, itaque
                    fugit!</p>
            </div>

            <div class="freshbox">
                <img src="../image/icons8-sushi-64 (1).png" alt="" class="freshicn">
                <h2>Sushi-Meshi</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, atque dignissimos quo quia vero iure.
                    Voluptatum labore esse quasi officia unde perspiciatis non ab a beatae quam architecto, itaque
                    fugit!</p>
            </div>
        </div>
        <!--=========<===============Chef Card Sliders===========================-->
        <div class="chefheader">
            <h1>Our Chef</h1>
        </div>

        <div class="chef_container">
            <div class="chef_box">
                <img src="../image/chef 1.jpg" />
                <h3>坂井 宏行</h3>
                <p>
                    Sushi at his time was made from freshly captured fish from the nearby Tokyo Bay. This ruled out many
                    of today's popular materials such as salmon roe (ikura; イクラ).
                </p>
            </div>
            <div class="chef_box">
                <img src="../image/chef.jpg" />
                <h3>森本 正治</h3>
                <p>
                    森本 正治 is known for his unique fusion cuisine. His cuisine takes advantage of Japanese color
                    combinations
                    and aromas and uses Chinese spices and simple Italian ingredients.
                </p>
            </div>
            <div class="chef_box">
                <img src="../image/chef 2.jpg" />
                <h3>松久 信幸</h3>
                <p>
                    "Nobu" Matsuhisa (松久 信幸) is known for his fusion cuisine blending traditional Japanese dishes with
                    Peruvian ingredients. His signature dish
                    is black cod in miso.
                </p>
            </div>
        </div>
        <!--==============================Upcoming Menu==============================-->
        <div class="hotmenu">
            <h1>Upcoming Menu</h1>
        </div>

        <div class="hotmenutabs">
            <div class="hotmenurows">
                <a href="../image/special1.jpg"><img src="../image/special1.jpg" alt=""></a>
                <div class="hotmenutxt">
                    <h5>Salmon Grilled Sushi</h5>
                </div>
            </div>

            <div class="hotmenurows">
                <a href="../image/special4.jpg"><img src="../image/special4.jpg" alt=""></a>
                <div class="hotmenutxt">
                    <h5>Grilld Eel Sushi</h5>
                </div>
            </div>

            <div class="hotmenurows">
                <a href="../image/special2.jpg"><img src="../image/special2.jpg" alt=""></a>
                <div class="hotmenutxt">
                    <h5>Salmon Crab Sushi</h5>
                </div>
            </div>
        </div>


        <!--==========================Experience Boxes=========================-->
        <div class="experienceheader">
            <h1>Our experiences</h1>
        </div>

        <div class="experience">
            <div class="experiencebox">
                <h3>AUTHENTIC JAPANESE</h3>
                <p>
                    Our dishes adhere to the Japanese virtue of <br>
                    serving natural and healthy meals. We use only <br>
                    fresh,premium ingredients for a taste that will <br>
                    have you coming back for more.
                </p>
            </div>

            <div class="experiencebox">
                <h3>ALWAYS FRESH</h3>
                <p>
                    Our patented Mr. Fresh™ ventilated sushi lid <br>
                    with plate-tracking technology ensures your <br>
                    food is always fresh and delicious.
                </p>
            </div>

            <div class="experiencebox">
                <h3>PREMIER INGREDIENTS</h3>
                <p>
                    From sushi to broths and even desserts, all of our <br>
                    dishes are free of artificial sweeteners, <br>
                    seasonings, preservatives and colorings.
                </p>
            </div>

            <div class="experiencebox">
                <h3>CREATIVE MENU</h3>
                <p>
                    We are continuously coming up with delicious and <br>
                    delightful menu items. Enjoy new seasonal dishes <br>
                    every month!
                </p>
            </div>
        </div>
        <!--==========================Service==================================-->
        <div class="servicetxt">
            <h1>Our Services</h1>
        </div>
        <section class="servicemain">
            <div class="services-grid">
                <div class="service service1">
                    <i class="fa-solid fa-leaf"></i>
                    <h4>100% Organic</h4>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    <a href="#" class="cta">Read More <span class="ti-angle-right"></a>
                </div>

                <div class="service service2">
                    <i class="fa-solid fa-hand-holding-hand"></i>
                    <h4>Reduce</h4>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    <a href="#" class="cta">Read More <span class="ti-angle-right"></a>
                </div>

                <div class="service service3">
                    <i class="fa-solid fa-utensils"></i>
                    <h4>Products</h4>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    <a href="#" class="cta">Read more <span class="ti-angle-right"></span></a>
                </div>
            </div>
        </section>

        <!--=================================review=================================-->
        <div class="review" id="review">
            <div class="cusreview">
                <h1>Customer Reviews</h1>
            </div>
            <div class="box-container">
                <div class="box">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repellat rerum similique fuga.
                        Dicta
                        porro doloribus voluptatibus, cum libero illo cumque delectus, quia incidunt, aliquam iusto
                        dolor
                        iste nulla nemo.</p>
                    <div class="user">
                        <img src="../image/customer.jpg" alt="">
                        <div class="user-info">
                            <h3>Momo</h3>
                            <span>happy cus</span>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repellat rerum similique fuga.
                        Dicta
                        porro doloribus voluptatibus, cum libero illo cumque delectus, quia incidunt, aliquam iusto
                        dolor
                        iste nulla nemo.</p>
                    <div class="user">
                        <img src="../image/customer2.jpg" alt="">
                        <div class="user-info">
                            <h3>Sana</h3>
                            <span>happy cus</span>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repellat rerum similique fuga.
                        Dicta
                        porro doloribus voluptatibus, cum libero illo cumque delectus, quia incidunt, aliquam iusto
                        dolor
                        iste nulla nemo.</p>
                    <div class="user">
                        <img src="../image/customer3.jpg" alt="">
                        <div class="user-info">
                            <h3>Mina</h3>
                            <span>happy cus</span>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repellat rerum similique fuga.
                        Dicta
                        porro doloribus voluptatibus, cum libero illo cumque delectus, quia incidunt, aliquam iusto
                        dolor
                        iste nulla nemo.</p>
                    <div class="user">
                        <img src="../image/customer4.jpg" alt="">
                        <div class="user-info">
                            <h3>IU</h3>
                            <span>happy cus</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================================Footer==============================-->
        <div class="blog">
            <h1>-Our Blog & Events-</h1>
        </div>

        <div class="blogtabs">
            <div class="blogrows">
                <a href="../image/chef4.jpg"><img src="../image/chef4.jpg" alt=""></a>
                <div class="blogtxt">
                    <i class="fa-solid fa-calendar-days">August 20,2023</i>
                    <h5>Japnese Horseradish: True Fact About Ramen</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam nostrum illo neque in,
                        consectetur sunt necessitatibus maxime pariatur quia quo voluptates, ab ad placeat officia
                        asperiores. Autem tempora consequatur totam?</p>
                </div>
            </div>

            <div class="blogrows">
                <a href="../image/ramenblog.jpg"><img src="../image/ramenblog.jpg" alt=""></a>
                <div class="blogtxt">
                    <i class="fa-solid fa-calendar-days">August 20,2023</i>
                    <h5>8 ways to Adjust Your Nutrition for the season</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, sequi dolores debitis harum
                        exercitationem eum error, voluptate sed tempore voluptatem aperiam distinctio velit vero sit,
                        provident nihil soluta recusandae. Culpa.</p>
                </div>
            </div>

            <div class="blogrows">
                <a href="../image/chef5.jpg"><img src="../image/chef5.jpg" alt=""></a>
                <div class="blogtxt">
                    <i class="fa-solid fa-calendar-days">August 20,2023</i>
                    <h5>How to cook Ramen: 7steps</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis quisquam sint excepturi harum,
                        culpa rerum ea sit voluptatem est assumenda dolorum aliquam, eum debitis doloremque quaerat
                        voluptas. Id, laudantium ratione!</p>
                </div>
            </div>
        </div>

        <div class="eventbox"></div>
        <!--===================Order Food=====================-->
        <h1 class="order_header"><a href="#">Events</a></h1>
        <div class="ordertabs">
            <div class="orderli">
                <input type="text" placeholder="Enter delivery address">
                <select name="" id="">
                    <option value="">Deliver Now</option>
                    <option value="">Schedule For Later</option>
                </select>
                
            </div>
            <a href="../html/privateevent.php" class="find_menu">-Find Events-</a>
        </div>
        <!--=============this is footer=============-->
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
                        <li id="flink-list-item"><a href="../html/reservation.php">Reservation</a></li>
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
            <div class="copy">
                <span id="copy">&copy;うみのあじ All Rights Reserved</span>
            </div>
        </footer>

        <!--shopping cart-->
        <script type="text/javascript">
            let cartIcon = document.querySelector("#cart-icon");
            let cart = document.querySelector(".cart-table");
            let closeCart = document.querySelector("#close-cart");

            cartIcon.onclick = () => {
                cart.classList.add("active");
            };
            closeCart.onclick = () => {
                cart.classList.remove("active");
            };

            //Cart Working JS
            if (document.readyState == "loading") {
                document.addEventListener("DOMContentLoaded", ready);
            } else {
                ready();
            }

            //Making function
            function ready() {
                //Remove Items from Cart
                var removeCartButtons = document.getElementsByClassName("cart-remove");
                console.log(removeCartButtons);
                for (var i = 0; i < removeCartButtons.length; i++) {
                    var button = removeCartButtons[i];
                    button.addEventListener("click", removeCartItem);
                }
                var quantityInputs = document.getElementsByClassName("cart-quantity");
                for (var i = 0; i < removeCartButtons.length; i++) {
                    var input = quantityInputs[i];
                    input.addEventListener("change", quantityChanged);
                }
                //Add to Cart
                var addCart = document.getElementsByClassName("add-cart");
                for (var i = 0; i < addCart.length; i++) {
                    var button = addCart[i];
                    button.addEventListener("click", addCartClicked);
                }
                //Buy Button Work 
                document.getElementsByClassName("btn-buy")[0].addEventListener('click', buyButtonClicked);
            }

            //Buy Button
            function buyButtonClicked() {
                alert("Your Order is placed");
                var cartContent = document.getElementsByClassName("cart-content")[0];
                while (cartContent.hasChildNodes()) {
                    cartContent.removeChild(cartContent.firstChild);
                }
                updatetotal();
            }

            //Remove Items from Cart 
            function removeCartItem(event) {
                var buttonClicked = event.target;
                buttonClicked.parentElement.remove();
                updatetotal();
            }

            //Quantity Changes
            function quantityChanged(event) {
                var input = event.target;
                if (isNaN(input.value) || input.value <= 0) {
                    input.value = 1;
                }
                updatetotal();
            }

            //Add to cart
            function addCartClicked(event) {
                var button = event.target;
                var shopProducts = button.parentElement;
                var title = shopProducts.getElementsByClassName("pro-title")[0].innerText;
                var price = shopProducts.getElementsByClassName("product_price")[0].innerText;
                var productImg = shopProducts.getElementsByClassName("img-ovl")[0].src;
                addProducttoCart(title, price, productImg);
                updatetotal();
            }

            function addProducttoCart(title, price, productImg) {
                var cartShopBox = document.createElement("div");
                cartShopBox.classList.add("cart-box");
                var cartItems = document.getElementsByClassName("cart-content")[0];
                var cartItemsNames = cartItems.getElementsByClassName("cart-product-title");
                for (var i = 0; i < cartItemsNames.length; i++) {
                    if (cartItemsNames[i].innerText == title) {
                        alert("You have already add this item to cart");
                        return;
                    }
                }
                var cartBoxContent = ` <img src="${productImg}" alt="" class="cart-img">
                            <div class="detail-box">
                              <div class="cart-product-title">${title}</div>
                              <div class="cart-price">${price}</div>
                              <input type="number" value="1" class="cart-quantity">
                            </div>
                            <ion-icon name="close-circle-outline" class="cart-remove"></ion-icon>`;
                cartShopBox.innerHTML = cartBoxContent;
                cartItems.append(cartShopBox);
                cartShopBox.getElementsByClassName("cart-remove")[0].addEventListener("click", removeCartItem);
                cartShopBox.getElementsByClassName("cart-quantity")[0].addEventListener("change", quantityChanged);
            }

            //Update Total
            function updatetotal() {
                var cartContent = document.getElementsByClassName("cart-content")[0];
                var cartBoxes = cartContent.getElementsByClassName("cart-box");
                var total = 0;
                for (var i = 0; i < cartBoxes.length; i++) {
                    var cartBox = cartBoxes[i];
                    var priceElement = cartBox.getElementsByClassName("cart-price")[0];
                    var quantityElement = cartBox.getElementsByClassName("cart-quantity")[0];
                    var price = parseFloat(priceElement.innerText.replace("$", ""));
                    var quantity = quantityElement.value;
                    total = total + (price * quantity);
                }
                //if price contains some Cents value
                total = Math.round(total * 100) / 100;

                document.getElementsByClassName("total-price")[0].innerText = "$" + total;
            }
        </script>
</body>

</html>
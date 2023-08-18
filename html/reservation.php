<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <script src="../js/reservation.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="https://kit.fontawesome.com/d0e61acce7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style_black.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald|Ubuntu">
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
    
    <section class="reserve-section">
        <form method="post" name="reservationform">
            <table class="reserve-table">
                <tr class="reserve-first-row">
                    <th colspan="3">Reserve Table</th>
                    <td></td>
                    <td></td>
                </tr>

                <tr class="reserve-second-row">
                    <td colspan="3">Please fill the form below accurately to enable us server you better!.. welcome!</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr class="reserve-third-row">
                    <td>Name</td>
                    <tr>
                        <td id="firstname-td"><input type="text" name="firstname" id="firstname" placeholder="First Name"></td>
                        <td><input type="text" name="lastname" id="lastname" placeholder="Last Name"></td>
                    </tr>
                </tr>

                <tr class="show-error">
                    <td colspan="2">
                        <span id="firstnameerr"></span>
                        <span id="lastnameerr"></span>
                    </td>
                    <td></td>
                </tr>

                <tr class="reserve-fourth-row">
                    <td>Email</td>
                    <tr>
                        <td colspan="2"><input type="text" name="email" id="email" placeholder="example@email.com"></td>
                        <td></td>
                    </tr>
                </tr>

                <tr class="show-error">
                    <td colspan="2">
                        <span id="emailerr"></span>
                    </td>
                    <td></td>
                </tr>

                <tr class="reserve-fifth-row">
                    <td>Phone number</td>
                    <tr>
                        <td colspan="2"><input type="number" name="ph_no" id="pnumber" placeholder="09-000-000-000"></td>
                        <td></td>
                    </tr>
                </tr>

                <tr class="reserve-sixth-row">
                    <td>No. of Guests</td>
                    <tr>
                        <td colspan="2">
                            <select name="guest" id="gnumber">
                                <option selected>Please select</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10 or more</option>
                            </select>
                        </td>
                        <td></td>
                    </tr>
                </tr>
                
                <tr class="reserve-ninth-row">
                <td>Table No.</td>
                    <tr>
                        <td colspan="2">
                            <select name="table_no" id="table_no">
                                <option selected>Table No.</option>
                                <option>001</option>
                                <option>002</option>
                                <option>003</option>
                                <option>004</option>
                                <option>005</option>
                                <option>006</option>
                                <option>007</option>
                                <option>008</option>
                                <option>009</option>
                                <option>010</option>
                            </select>
                        </td>
                        <td></td>
                    </tr>
                </tr>

                <tr class="reserve-seventh-row">
                    <td>Reservation Date & Time</td>
                    <tr>
                        <td id="reserve-date-td">
                            <input type="date" name="date" id="reserve-date">
                        </td>
                        <td>
                            <input type="time" name="time" id="reserve-time">
                        </td>
                    </tr>
                </tr>

                <tr class="reserve-eighth-row">
                    <td>Message</td>
                    <tr>
                        <td colspan="2">
                            <textarea rows="5" id="message" name="txtarea" placeholder="Message"></textarea>
                        </td>
                        <td></td>
                    </tr>
                </tr>
                
                <tr>
                    <td colspan="3" class="reserve-btn">
                        <input type="submit" name="login" id="reserve-btn" value="Reserve">
                    </td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </form>
    </section>

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

    <script type="text/javascript">
        const show = document.getElementById('reserve-btn');
        show.addEventListener("click", showFunction);

        function showFunction(){
            alert('Reservation is success!');
        }
    </script>
</body>
</html>
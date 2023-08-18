<?php
session_start();
// require_once('restaurant_database.php');

$conn = new mysqli('localhost', 'root', '', 'restaurant');
$sql = "SELECT * FROM sign_up";

$query = $conn->query($sql);
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../css/admin_page.css">
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

    <div class="main_profile_div">
        <div class="profile_div">
            <div class="default_profile">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Default_pfp.svg/2048px-Default_pfp.svg.png" alt="error">
            </div>
            <div class="deft_pro_text">
                <span>Admin Gane</span> <br>
                <a href="../html/login.php">Log out</a>
            </div>
        </div>

        <div class="table_div">
            <table border="1" class="user_table">
                <tr>
                    <th>ID</th>
                    <th>first_Name</th>
                    <th>last_Name</th>
                    <th>email</th>
                    <th>password</th>
                    <th>user_type</th>
                </tr>
                <tr>
                    <?php
            while ($row = $query->fetch_assoc()) {
                ?>
    
                <td>
                    <?php
                    echo $row['Id'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['first_Name'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['last_Name'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['email'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['Password'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row['user_type'];
                    ?>
                </td>
                <td>
                    <a href="session_update_process.php?u_id=<?php echo $row["Id"];?>">
                        <input type='submit' value='Update' id="update">
                    </a>
                </td>
                <td>
                    <a href="session_delete.php?u_id=<?php echo $row["Id"]; ?> ">
                        <input type='submit' value='Delete'>
                    </td>
            </tr>
            <?php } ?>
        </table>
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
</body>
</html>
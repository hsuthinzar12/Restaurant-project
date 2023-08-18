<?php
session_start();
require_once "restaurant_database.php";
// $conn = new mysqli($servername, $username, $password, $database);
if (array_key_exists('login', $_POST)){
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    if($email == ''){
        $errors["null_email"] = "Please enter your email";
    } elseif ($password == ''){
        $errors["null_password"] = "Please enter your password";
    } else if (empty($errors)){
        $sql = "SELECT * FROM sign_up WHERE email='$email' AND password='$password'";

        $result = $conn->query($sql);

        
        $row = mysqli_fetch_assoc($result);
        
        if($row['user_type'] == 'admin'){
            header('Location:admin_page.php');
        } 
        
        if($row['email'] != $email && $row['password'] != $password){
            header('Location:Menu_Login.php');
            exit;
        } else if($row['user_type'] == 'admin'){
            header('Location:admin_page.php');
        } else {
            header("location:Menu.php");
        }

        // if ($result->num_rows > 0) {
        //     $_SESSION["login"] = "OK";
        //     header("Location: reservation.php");
        //     exit;
        // }

        // if('email' != $email && 'password' != $password){
        //     header('Location:Login.php');
        //     exit;
        // } 
    }
}
$message = "Invalid Login";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/Login.css">
</head>

<body>
    <main class="main">
        <div class="wrapper">
            <div class="card">
                <div class="title">
                    <h1 class="title title-large">Sign In</h1>
                    <p class="title title-subs">New user? <span><a href="../html/SignUp.php" class="linktext">Create an account</a></span></p>
                </div>
                <a href="../html/index.php" class="close-btn"></a>
                <form method="post" class="form">
                    <div>
                        <font color="red">
                        <?php 
                        if(isset($errors["null_email"])) 
                        echo $errors["null_email"];
                        ?>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="input-field" placeholder="Email address">
                    </div>
                    <div>
                        <font color="red">
                        <?php 
                        if(isset($errors["null_password"])) 
                        echo $errors["null_password"];
                        ?>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="input-field" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <a href="#" class="linktext">Forgot Password</a>
                        <input type="submit" name="login" value="Login" class="input-submit">
                    </div>
                </form>
                <div class="line">
                    <span class="line-bar"></span>
                    <span class="line-text">Or</span>
                    <span class="line-bar"></span>
                </div>
                <div class="method">
                    <div class="method-item">
                        <a href="#" class="btn-action">
                            <i class="icons icons-google fab fa-google"></i>
                            <span>Sign in with Google</span>
                        </a>
                    </div>
                    <div class="method-item">
                        <a href="#" class="btn-action">
                            <i class="icons icons-facebook fab fa-facebook"></i>
                            <span>Sign in with Facebook</span>
                        </a>
                    </div>
                    <div class="method-item">
                        <a href="#" class="btn-action">
                            <i class="icons icons-apple fab fa-apple"></i>
                            <span>Sign in with Apple</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
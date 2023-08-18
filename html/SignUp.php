<?php
require "signup_validation.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUP</title>
	<!-- Bootstrap 5 CDN Link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS Link -->
	<link rel="stylesheet" href="../css/SignUp.css">
</head>
<body> 
    <section class="wrapper rounded">
		<div class="container">
			<div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center">
				<div class="logo">
					<img src="../image/logo_red_version.png" class="img-fluid" alt="logo">
				</div>
				<a href="../html/index.php" class="close-btn"></a>
				<form method="post" class="rounded bg-white shadow p-5">
					<h3 class="text-dark fw-bolder fs-4 mb-2">Create an Account</h3>

					<div class="fw-normal text-muted mb-2">
						Already have an account? <a href="../html/Login.php" class="text-danger fw-bold text-decoration-none">Login here</a>
					</div>

                    <div class="text-center text-muted text-uppercase mb-2">or</div>

					<a href="#" class="btn btn-light login_with w-100 mb-4">
						<img src="https://img.icons8.com/color/48/null/google-logo.png" class="img-fluid me-3">Sign in with Google</a>
					</a> 

					<div>
						<font color="red">
						<?php 
						if(isset($errors["null_first_Name"])) 
						echo $errors["null_first_Name"];
						?>
						</font>
					</div>
                    <div class="form-floating mb-3">
                        <input type="text" name="first_Name" class="form-control" id="floatingFirstName" placeholder="name@example.com">
                        <label for="floatingFirstName">First Name</label>
                    </div>

					<div>
						<font color="red">
						<?php 
						if(isset($errors["null_last_Name"])) 
						echo $errors["null_last_Name"];
						?>
						</font>
					</div>
                    <div class="form-floating mb-3">
                        <input type="text" name="last_Name" class="form-control" id="floatingLastName" placeholder="name@example.com">
                        <label for="floatingLastName">Last Name</label>
                    </div> 
					
					<div>
						<font color="red">
						<?php 
						if(isset($errors["null_email"])) 
						echo $errors["null_email"];
						?>
						</font>
					</div>
					<div class="form-floating mb-3">
						<input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
						<label for="floatingInput">Email address</label>
					</div>

					<div>
						<font color="red">
						<?php 
						if(isset($errors["null_password"])) 
						echo $errors["null_password"];
						?>
						</font>
					</div>
					<div class="form-floating mb-3">
						<input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
						<label for="floatingPassword">Password</label>
                        <span class="password-info mt-2">Use 8 or more characters with a mix of letters, numbers & symbols.</span>
					</div> 

					<div>
						<font color="red">
						<?php 
						if(isset($errors["null_pass_match"])) 
						echo $errors["null_pass_match"];
						?>
						</font>
					</div>
                    <div class="form-floating mb-3">
						<input type="password" name="c_password" class="form-control" id="floatingPassword" placeholder="Password">
						<label for="floatingPassword">Confirm Password</label>
					</div> 

                    <div class="form-check d-flex align-items-center">
                        <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                        <label class="form-check-label ms-2" for="gridCheck">
                          I Agree <a href="#" class="text-danger text-decoration-none">Terms and conditions</a>.
                        </label>
                    </div>
					<input type="submit" name="login" class="btn btn-danger submit_btn w-100 my-4" value="Sign Up">
				</form>
			</div>
		</div>
	</section>
</body>
</html>



<?php 
require_once "restaurant_database.php";

if(!empty($_POST)){
	$firstName 		= mysqli_real_escape_string($conn,@$_POST['first_Name']);
	$lastName 		= mysqli_real_escape_string($conn,@$_POST['last_Name']);
	$email 			= mysqli_real_escape_string($conn,@$_POST['email']);
	$password 		= mysqli_real_escape_string($conn,@$_POST['password']);
	$c_password 	= mysqli_real_escape_string($conn,@$_POST['c_password']);
	$pattern 		= "/^[a-zA-Z0-9]+@+\w+\.\w{3,4}$/";

	if (!empty($_POST)) {
		// if ($_POST['first_Name'] == "") {
		// 	$errors["null_first_Name"] = "Please enter your name";
		// } else if($_POST['email'] == ""){
		// 	$errors["null_last_Name"] = "Please enter your email";
		// } else if(!preg_match($pattern, $_POST['email'])){
		// 	$errors["null_email"] = "Unvalid email";
		// } else if ($_POST['password'] == ""){
		// 	$errors["null_password"] == "Please enter your password";
		// } else if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8){
		// 	$errors["null_pass_val"] == "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
		// } else if ($c_password == ""){
		// 	$errors["null_c_password"] = "Retype of password";
		// } else if ($password != $c_password){
		// 	$errors["null_pass_match"] = "No Match";
		// } 
		// else if(!empty($_POST)){
		// 	$select1 = "SELECT * FROM sign_up where email=$email";
		// 	$res1 = mysqli_query($conn, $select1);
		// 	if(mysqli_num_rows($res1)>0){
		// 		$errors['null_password'] = "Email is already exist!";
		// 	}
		// } else {
		// 	$select2 = "SELECT * FROM sign_up where email=$email";
		// 	$res2 = mysqli_query($conn, $select2);
		// 	if(mysqli_num_rows($res2)>0){
		// 		echo "<script>alert('Your account creation is successful!')</script>";
		// 	}
		// }
		if(empty($_POST['first_Name'])){
			$errors['null_first_Name'] = "Please enter your name!";
		}
		else if(empty($_POST['last_Name'])){
			$errors['null_last_Name'] = "Please enter your last name!";
		} 
		else if(empty($_POST['email'])){
			$errors['null_email'] = "Please enter your email!";
		}
		else if(!preg_match($pattern,$_POST['email'])){
			$errors['null_email'] = "Unvalid email!";
		} 
		else if ($_POST['password'] == "") {
			$errors["null_password"] = "Please enter your password";
		} 
		else if(empty($_POST['c_password'])){
			$errors["null_pass_match"] = "Retype Your password!";
		}
		else if($password != $c_password){
			$errors["null_pass_match"] = "No match!";
		}
		else if(empty($errors)){
			$sql1 = "SELECT email FROM sign_up where email='$email'";
			$sql2 = "SELECT first_Name FROM sign_up where first_Name='$firstName'";
			$sql3 = "SELECT last_Name FROM sign_up where last_Name='$lastName'";

			$res1 = $conn->query($sql1);
			$res2 = $conn->query($sql2);
			$res3 = $conn->query($sql3);

			$row1 = mysqli_fetch_assoc($res1);
			$row2 = mysqli_fetch_assoc($res2);
			$row3 = mysqli_fetch_assoc($res3);

			if($row2['first_Name'] == $firstName){
				$errors['null_first_Name'] = "Name has already taken!";
			} else if($row3['last_Name'] == $lastName){
				$errors['null_last_Name'] = "Name has already taken!";
			} else if($row1['email']  == $email){
				$errors['null_email'] = "Email has already taken!";
			}
			else {
				$insert = "INSERT INTO sign_up(first_Name, last_Name, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";
				
				if($conn->query($insert)){
					echo "Error Inserting record" . $conn->error;
				}

				header("Location:Login.php");
				$_SESSION['success']  = "New user successfully created!!";
			}
		}
	}
}
$conn->close();
?>
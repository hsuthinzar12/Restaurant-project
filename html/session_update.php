<?php
session_start();
require_once 'restaurant_database.php';
?>

<html>
<head>	
	<title>Update Users' Information</title>
</head>
<body>
<?php

if (isset($_GET['u_id'])) {
	$usrid = mysqli_real_escape_string($conn, $_GET['u_id']);
	$sql = "SELECT * FROM sign_up WHERE Id='$usrid'";
	$sqlrun = mysqli_query($conn, $sql);
	if (mysqli_num_rows($sqlrun) > 0) {
		$user = mysqli_fetch_array($sqlrun);
		?>

<form method="post" action="session_update_process.php">
<?php echo $usrid ?>
  <table align="center">
    <tr>
      <td>First Name: </td>
      <td><input  type="text" name="first_Name" value="<?php echo $user['first_Name']; ?>"/>
	</td>
    </tr>

    <tr>
      <td>Last Name: </td>
      <td><input  type="text" name="last_Name" value="<?php echo $user['last_Name']; ?>"/>
	</td>
    </tr>

    <tr>
      <td>E-mail:</td>
      <td><input  type="text" name="email" value="<?php echo $user['email']; ?>"/>
		</td>
    </tr>

    <tr>
      <td>Password</td>
      <td><input type="password" name="password" value="<?php echo $user['password']; ?>"/>
      <font color="red">
		<?php
		if (isset($errors["null_password"]))
			echo $errors["null_password"];
		?>
		</font>
	</td>
    </tr>

	<tr>
      <td>Confirm Password</td>
      <td><input type="password" name="cpassword"/>
	  <font color="red">
		<?php
		if (isset($errors["null_cpassword"]))
			echo $errors["null_cpassword"];
		?>
		</font>
	</td>
    </tr>

    <tr>
	<td><input type="hidden" name="user_id" value="<?php echo $_GET['u_id']; ?>"></td>
	<td><input type="submit" name="update" value="Update"></td>
    </tr>

  </table>
</form>
<?php
	}
}	
?>
</body>
</html> 

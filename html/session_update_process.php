<?php
require_once 'restaurant_database.php';

if(isset($_POST['update']))
{	

    $id = mysqli_real_escape_string($mysqli,@$_POST['id']);
	$firstName=mysqli_real_escape_string($mysqli,@$_POST["first_Name"]);
	$lastName=mysqli_real_escape_string($mysqli,@$_POST["last_Name"]);
	$email=mysqli_real_escape_string($mysqli,@$_POST["email"]);
	$password=mysqli_real_escape_string($mysqli,@$_POST["password"]);
	$c_password=mysqli_real_escape_string($mysqli,@$_POST["c_password"]);
    
// Perform SQL query
$sql="UPDATE user SET first_Name='$firstName', last_Name='$lastName', email='$email', password='$password' WHERE Id=$id";
$result = $conn->query($sql);

// After update redirect to Home, so that latest user list will be displayed.
header("Location:admin_page.php");

if ($conn->query($sql) === FALSE) {
    echo "Error Updating record: " . $mysqli->error;
  }
}
?>
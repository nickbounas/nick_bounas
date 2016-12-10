<?php 
ob_start();
session_start();
?>
<?php
// Connect to the MySQL database  
$dbhost = "localhost"; 
// Place the username for the MySQL database here 
$dbusername = "root";  
// Place the password for the MySQL database here 
$dbpass = "";  
// Place the name for the MySQL database here 
$dbname = "medicare"; 
// Run the actual connection here  
$con=mysqli_connect("$dbhost","$dbusername","$dbpass") or die ("could not connect to mysql");
mysqli_select_db($con,"$dbname") or die ("no database");  
// Define $myusername and $mypassword
$username=$_POST['username'];
$password=$_POST['password'];
// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);



    $sql = mysqli_query($con,"SELECT id FROM giatros WHERE username='$username' AND password='$password'"); // query the person
     //------- MAKE SURE PERSON EXISTS IN DATABASE ---------
	$existCount = mysqli_num_rows($sql); // count the row nums

    if ($existCount == 1) { // evaluate the count
	$_SESSION['id']='id';
	$_SESSION['username']=$username;
$_SESSION['password']=$password;
header("location:giatros.php");
}
else {
echo "Wrong Username or Password";
}
ob_end_flush();
?>
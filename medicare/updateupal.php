<?php
// Connect to the MySQL database  
$dbhost = "localhost"; 
// Place the username for the MySQL database here 
$dbusername = "root";  
// Place the password for the MySQL database here 
$dbpass = "";  
// Place the name for the MySQL database here 
$dbname = "medicare"; 
$tbl_name="grammateia";

// Run the actual connection here  
$link=mysqli_connect("$dbhost","$dbusername","$dbpass") or die ("could not connect to mysql");
mysqli_select_db($link,"$dbname") or die ("no database");    
    

$username=$_SESSION['username'];
$password=$_POST['password'];
$Dieutunsh_katoikias=$_POST['Dieutunsh_katoikias'];
$Kinhto=$_POST['Kinhto'];
$Monadikos_kwdikos_upallilou=$_POST['Monadikos_kwdikos_upallilou'];




$sqlCommand = "UPDATE $tbl_name SET password = '$password', Dieutunsh_katoikias='$Dieutunsh_katoikias', Kinhto='$Kinhto', Monadikos_kwdikos_upallilou='$Monadikos_kwdikos_upallilou' WHERE username ='$username'";
mysqli_query($link,$sqlCommand);
header("Location:grammateiakos_upallilos.php"); /* Redirect browser */
    exit();
?>
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
$link=mysqli_connect("$dbhost","$dbusername","$dbpass") or die ("could not connect to mysql");
mysqli_select_db($link,"$dbname") or die ("no database");        

$sqlCommand = "CREATE TABLE epeigon_peristatiko (
                 Asthenis varchar(100) NOT NULL,
				 Hmeromhnia varchar(100) NOT NULL,
				 Katagrafi varchar(100) NOT NULL
		 		 ) ";
if (mysqli_query($link,$sqlCommand)){ 
    echo "Your epeigon_peristatiko table has been created successfully!"; 
} else { 
    echo "CRITICAL ERROR: epeigon_peristatiko table has not been created.";
}
?>
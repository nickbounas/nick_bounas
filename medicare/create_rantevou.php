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

$sqlCommand = "CREATE TABLE lista_rantevou (
                 Asthenis varchar(100) NOT NULL,
				 Hmeromhnia varchar(100) NOT NULL,
				 Wra varchar(100) NOT NULL,
				 Giatros varchar(100) NOT NULL,
		 		 PRIMARY KEY (Hmeromhnia),
		 		 UNIQUE KEY Hmeromhnia (Wra)
		 		 ) ";
if (mysqli_query($link,$sqlCommand)){ 
    echo "Your lista_rantevou table has been created successfully!"; 
} else { 
    echo "CRITICAL ERROR: lista_rantevou table has not been created.";
}
?>
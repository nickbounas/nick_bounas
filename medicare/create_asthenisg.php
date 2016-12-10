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

$sqlCommand = "CREATE TABLE lista_asthenwn (
		 		 id int(11) NOT NULL auto_increment,
				 Onoma varchar(100) NOT NULL,
		 		 Epwnumo varchar(100) NOT NULL,
		 		 Patrwnumo varchar(100) NOT NULL,
		 		 Dieuthunsh varchar(100) NOT NULL,
				 Poli varchar(100) NOT NULL,
				 TK varchar(100) NOT NULL,
				 AMKA varchar(100) NOT NULL,
				 Til varchar(100) NOT NULL,
				 Email varchar(100) NOT NULL,
		 		 PRIMARY KEY (id),
		 		 UNIQUE KEY Epwnumo (Epwnumo)
		 		 ) ";
				 


if (mysqli_query($link,$sqlCommand)){ 
    echo "Your lista_asthenwn table has been created successfully!"; 
} else { 
    echo "CRITICAL ERROR: lista_asthenwn table has not been created.";
}
?>
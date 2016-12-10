<?php include 'dbcon.php';
$con = mysqli_connect("localhost","root","","medicare");
if(!$con)
{
die('Could not connect:'.mysql_error());
}
else
{
echo "Connected<br>";
}
mysqli_query($con,"CREATE DATABASE  medicare");

$sql = mysqli_query($con, "use giatros");  

mysqli_query($con,"CREATE TABLE giatros (
		 		 id int(11) NOT NULL auto_increment,
				 username varchar(100) NOT NULL,
		 		 password varchar(100) NOT NULL,
				 idiotita_giatrou varchar(100) NOT NULL,
				 Dieutunsh_katoikias varchar(100) NOT NULL,
				 Kinhto varchar(100) NOT NULL,
				 Monadikos_kwdikos_iatrou varchar(100) NOT NULL,
		 		 PRIMARY KEY (id),
		 		 UNIQUE KEY username (username)
		 		 ) ");
mysqli_query($con, "INSERT INTO giatros VALUES('1', 'Nikolaos_Bounas', '12345','Kardiologos', 'Karaoli 22 Ilion', '6987451247', '25100'),
('2', 'Maximos_Salachas', '23456','Pathologos', 'Karaoli 54 Ilion', '6985671279', '25101')
");
?>
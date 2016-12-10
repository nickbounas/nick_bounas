<?php include 'dbcon.php';
$con = mysqli_connect("127.0.0.1","root","","medicare");
if(!$con)
{
die('Could not connect:'.mysql_error());
}
else
{
echo "Connected<br>";
}
mysqli_query($con,"CREATE DATABASE  medicare");

$sql = mysqli_query($con, "use grammateia");  

mysqli_query($con,"CREATE TABLE grammateia (
		 		 id int(11) NOT NULL auto_increment,
				 username varchar(100) NOT NULL,
		 		 password varchar(100) NOT NULL,
				 Dieutunsh_katoikias varchar(100) NOT NULL,
				 Kinhto varchar(100) NOT NULL,
				 Monadikos_kwdikos_upallilou varchar(100) NOT NULL,
		 		 PRIMARY KEY (id),
		 		 UNIQUE KEY username (username)
		 		 ) ");
mysqli_query($con, "INSERT INTO grammateia VALUES('1', 'Marina_Giannokopoulou', '98765', 'Dede 31 Kamatero', '6987659047', '35100'),
('2', 'Georgia_Mixail', '34567', 'Papandreou 21 Peristeri', '6985876472', '35101')
");
?>
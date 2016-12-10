<?
session_start();
if(!session_is_registered(username)){
header("location:grammateiakos_upallilos_.html");
}
$username = $_SESSION['username'];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<table width="990" border="1" cellspacing="0" cellpadding="3">
<tr>
<td width="11%"><b>Onoma</b></td>
<td width="14%"><b>Epwnumo</b></td>
<td width="14%"><b>Patrwnumo</b></td>
<td width="18%"><b>AMKA</b></td>
<td width="15%"><b>Til</b></td>
<td width="17%"><b>Hmeromhnia kai wra rantevou</b></td>
<td width="11%"><b>Giatros</b></td>
</tr>
</table>

<?php
// Connect to the MySQL database  
$dbhost = "localhost"; 
// Place the username for the MySQL database here 
$dbusername = "root";  
// Place the password for the MySQL database here 
$dbpass = "";  
// Place the name for the MySQL database here 
$dbname = "pliroforiaka"; 

// Run the actual connection here  
$link=mysqli_connect("$dbhost","$dbusername","$dbpass") or die ("could not connect to mysql");
mysqli_select_db($link,"$dbname") or die ("no database");        
$result = mysqli_query($link, "SELECT * FROM create_rantevou");
$asthenis = mysqli_num_rows($result);
while($row = mysqli_fetch_array($result)){
?>
<table width="961" border="1" cellspacing="0" cellpadding="3">
<tr>
<td width="11%"><?php echo $row['Onoma']?></td>
<td width="19%"><?php echo $row['Epwnumo']?></td>
<td width="11%"><?php echo $row['Patrwnumo']?></td>
<td width="14%"><?php echo $row['AMKA']?></td>
<td width="13%"><?php echo $row['Til']?></td>
<td width="16%"><?php echo $row['Hmeromhnia_wra_rantevou']?></td>
<td width="16%"><?php echo $row['Giatros']?></td>
</tr>
</table>
<?php
// close while loop

}

// close connection
mysqli_close($link);
?>
</body>
</html>
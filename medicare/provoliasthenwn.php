<?
session_start();
if(!session_is_registered(username)){
header("location:giatros.html");
}
$username = $_SESSION['username'];
?>
<html>
<body>
<table width="941" border="1" cellspacing="0" cellpadding="3">
<tr>
<td width="8%"><b>Όνομα</b></td>
<td width="11%"><b>Επώνυμο</b></td>
<td width="11%"><b>Πατρώνυμο</b></td>
<td width="9%"><b>Διεύθυνση</b></td>
<td width="6%"><b>Πόλη</b></td>
<td width="7%"><b>ΤΚ</b></td>
<td width="15%"><b>ΑΜΚΑ</b></td>
<td width="12%"><b>Τηλέφωνο</b></td>
<td width="9%"><b>Email</b></td>
<td width="12%"><b>Διάγνωση</b></td>
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
$result = mysqli_query($link, "SELECT * FROM create_asthenisg");
$asthenis = mysqli_num_rows($result);
while($row = mysqli_fetch_array($result)){
?>
<table width="942" border="1" cellspacing="0" cellpadding="3">
<tr>
<td width="13%"><?php echo $row['Onoma']?></td>
<td width="9%"><?php echo $row['Epwnumo']?></td>
<td width="6%"><?php echo $row['Patrwnumo']?></td>
<td width="21%"><?php echo $row['Dieuthunsh']?></td>
<td width="10%"><?php echo $row['Poli']?></td>
<td width="9%"><?php echo $row['TK']?></td>
<td width="10%"><?php echo $row['AMKA']?></td>
<td width="8%"><?php echo $row['Til']?></td>
<td width="3%"><?php echo $row['Email']?></td>
<td width="11%"><?php echo $row['Diagnwsi']?></td>
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

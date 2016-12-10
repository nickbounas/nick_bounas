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
echo "<div style='text-align:center'>Καλωσήρθατε, " .$_SESSION['username'] . "!</div>". "<br>";
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="jquery-2.2.3.min.js"></script>
<meta charset="UTF-8">
<title>Medicare</title>
<script>
$(document).ready(function(){
$('#p2').click(function(){
 $('#table2').show();
 $('#table1').hide();
 $('#table3').hide();
 $('#table4').hide();
 $('#table5').hide();
 $('#table6').hide();
 $('#table7').hide();
 $('#table8').hide();
 $('#table9').hide();
 $('#eikones').hide();
 $('#tilefwna').hide();
 $('#efim').hide();
  $('#table10').hide();
 });
 $('#p1').click(function(){
 $('#table1').show();
 $('#table2').hide();
 $('#table3').hide();
 $('#table4').hide();
 $('#table5').hide();
 $('#table6').hide();
 $('#table7').hide();
 $('#table8').hide();
 $('#table9').hide();
 $('#eikones').hide();
 $('#tilefwna').hide();
 $('#efim').hide();
  $('#table10').hide();
 });
 $('#p3').click(function(){
 $('#table3').show();
 $('#table4').hide();
 $('#table2').hide();
 $('#table5').hide();
 $('#table1').hide();
 $('#table6').hide();
 $('#table7').hide();
 $('#table8').hide();
 $('#table9').hide();
 $('#eikones').hide();
 $('#tilefwna').hide();
 $('#efim').hide();
  $('#table10').hide();
 });
 $('#p4').click(function(){
 $('#table4').show();
 $('#table3').hide();
 $('#table2').hide();
 $('#table5').hide();
 $('#table1').hide();
  $('#table6').hide();
  $('#table7').hide();
  $('#table8').hide();
  $('#table9').hide();
  $('#eikones').hide();
  $('#tilefwna').hide();
  $('#efim').hide();
   $('#table10').hide();
});
 $('#r1').click(function(){
 $('#table5').show();
 $('#table3').hide();
 $('#table2').hide();
 $('#table4').hide();
 $('#table1').hide();
 $('#table6').hide();
 $('#table7').hide();
 $('#table8').hide();
 $('#table9').hide();
 $('#eikones').hide();
 $('#tilefwna').hide();
 $('#efim').hide();
  $('#table10').hide();
});
 $('#r2').click(function(){
 $('#table6').show();
 $('#table3').hide();
 $('#table2').hide();
 $('#table4').hide();
 $('#table1').hide();
 $('#table5').hide();
 $('#table7').hide();
 $('#table8').hide();
 $('#table9').hide();
 $('#eikones').hide();
 $('#tilefwna').hide();
 $('#efim').hide();
  $('#table10').hide();
});
 $('#p7').click(function(){
 $('#table7').show();
 $('#table3').hide();
 $('#table2').hide();
 $('#table4').hide();
 $('#table1').hide();
 $('#table5').hide();
 $('#table6').hide();
 $('#table8').hide();
 $('#table9').hide();
 $('#eikones').hide();
 $('#tilefwna').hide();
 $('#efim').hide();
  $('#table10').hide();
});
 $('#p5').click(function(){
 $("#efim").show();
 $('#table3').hide();
 $('#table2').hide();
 $('#table4').hide();
 $('#table1').hide();
 $('#table5').hide();
 $('#table6').hide();
 $('#table7').hide();
 $('#table8').hide();
 $('#table9').hide();
 $('#eikones').hide();
 $('#tilefwna').hide();
  $('#table10').hide();
});
 $('#g1').click(function(){
 $('#table8').show();
 $('#table3').hide();
 $('#table2').hide();
 $('#table4').hide();
 $('#table1').hide();
 $('#table5').hide();
 $('#table6').hide();
 $('#table7').hide();
 $('#table9').hide();
 $('#eikones').hide();
 $('#tilefwna').hide();
 $('#efim').hide();
  $('#table10').hide();
});
 $('#g3').click(function(){
 $('#table9').show();
 $('#table3').hide();
 $('#table2').hide();
 $('#table4').hide();
 $('#table1').hide();
 $('#table5').hide();
 $('#table6').hide();
 $('#table7').hide();
 $('#table8').hide();
 $('#eikones').hide();
 $('#tilefwna').hide();
 $('#efim').hide();
  $('#table10').hide();
});
$('#arx').click(function(){
 $('#eikones').show();
 $('#table3').hide();
 $('#table2').hide();
 $('#table4').hide();
 $('#table1').hide();
 $('#table5').hide();
 $('#table6').hide();
 $('#table7').hide();
 $('#table8').hide();
 $('#table9').hide();
 $('#tilefwna').hide();
 $('#efim').hide();
  $('#table10').hide();
});
$('#t1').click(function(){
 $('#tilefwna').show();
 $('#eikones').hide();
 $('#table3').hide();
 $('#table2').hide();
 $('#table4').hide();
 $('#table1').hide();
 $('#table5').hide();
 $('#table6').hide();
 $('#table7').hide();
 $('#table8').hide();
 $('#table9').hide();
 $('#efim').hide();
  $('#table10').hide();
});
$('#g2').click(function(){
 $('#table10').show();
 $('#eikones').hide();
 $('#tilefwna').hide();
 $('#table3').hide();
 $('#table2').hide();
 $('#table4').hide();
 $('#table1').hide();
 $('#table5').hide();
 $('#table6').hide();
 $('#table7').hide();
 $('#table8').hide();
 $('#table9').hide();
 $('#efim').hide();
});
});
 </script>
 <script>
   function submitForm() {
   // Get the first form with the name
   // Hopefully there is only one, but there are more, select the correct index
   var frm = document.getElementsByName('form1')[0];
   frm.submit(); // Submit
   frm.reset();  // Reset
   alert("Τα στοιχεία σας ανανεώθηκαν επιτυχώς");
   return false; // Prevent page refresh
	  
	  }
 function submitForm2() {
   // Get the first form with the name
   // Hopefully there is only one, but there are more, select the correct index
   var frm = document.getElementsByName('form3')[0];
   frm.submit(); // Submit
   frm.reset();  // Reset
   alert("Δημιουργήθηκε νέος ασθενής");
   return false; // Prevent page refresh
	  
	  }
	  function submitForm3() {
   // Get the first form with the name
   // Hopefully there is only one, but there are more, select the correct index
   var frm = document.getElementsByName('form5')[0];
   frm.submit(); // Submit
   frm.reset();  // Reset
   alert("Δημιουργήθηκε νέο ραντεβού");
   return false; // Prevent page refresh
	  
	  }
	  function submitForm4() {
   // Get the first form with the name
   // Hopefully there is only one, but there are more, select the correct index
   var frm = document.getElementsByName('form7')[0];
   frm.submit(); // Submit
   frm.reset();  // Reset
   alert("Εκδόθηκε νέο εξιτήριο");
   return false; // Prevent page refresh
	  
	  }
	   function submitForm8() {
   // Get the first form with the name
   // Hopefully there is only one, but there are more, select the correct index
   var frm = document.getElementsByName('form8')[0];
   frm.submit(); // Submit
   frm.reset();  // Reset
   alert("Καταγράφηκε νέο χειρουγείο");
   return false; // Prevent page refresh
	  
	  }
	    function submitForm9() {
   // Get the first form with the name
   // Hopefully there is only one, but there are more, select the correct index
   var frm = document.getElementsByName('form9')[0];
   frm.submit(); // Submit
   frm.reset();  // Reset
   alert("Καταγράφηκε νέο επείγον περιστατικό");
   return false; // Prevent page refresh
	  
	  }
   </script>
<script type="text/javascript"> 
var slideimages = new Array();
slideimages[0] = new Image();
slideimages[0].src = "icons/slide0.jpg"; 
slideimages[1] = new Image();
slideimages[1].src = "icons/slide1.jpg";
slideimages[2] = new Image(); 
slideimages[2].src = "icons/slide2.jpg"; 
slideimages[3] = new Image(); 
slideimages[3].src = "icons/slide3.jpg"; 
slideimages[4] = new Image(); 
slideimages[4].src = "icons/slide4.jpg";
slideimages[5] = new Image(); 
slideimages[5].src = "icons/slide5.jpg";  
</script> 
</head>
<body background="icons/medicare.jpg">
<div class="wrapper">
<nav id="navbar">
<ul>
<li class="Home">
<a href="grammateiakos_upallilos.php" class="arx_sel" id="arx">Αρχική Σελίδα</a>
  <li class="dropdown4">
    <a href="#" class="dropbtn4">Πληροφορίες Γραμματέα</a>
	<div class="dropdown-content4">
      <a href="#" id="p1">Προβολή προφίλ</a>
      <a href="#" id="p2">Τροποποίηση προφίλ</a>
	  <a href="#" id="p5">Πρόγραμμα εφημεριών</a>
    </div>
  </li>
      <li class="dropdown5">
    <a href="#" class="dropbtn5">Ασθενείς</a>
    <div class="dropdown-content5">
      <a href="#" id="p3">Δημιουργία νέου ασθενή</a>
      <a href="#" id="p4">Λίστα ασθενών</a>
	  <a href="#" id="g1">Νεό χειρουγείο</a>
	  <a href="#" id="g2">Λίστα χειρουργείων</a>
	  <a href="#" id="g3">Επείγον περιστατικό</a>
	  <a href="#" id="p7">Έκδοση εξιτηρίου</a>
    </div>
  </li>
   <li class="dropdown6">
     <a href="#" class="dropbtn6">Ραντεβού</a>
	 <div class="dropdown-content6">
	 <a href="#" id="r1">Δημιουργία νέου ραντεβού</α>
     <a href="#" id="r2">Λίστα ραντεβού</a>
    </div>
  </li>
  <li class="tile">
  <a href="#" id="t1">Χρήσιμοι αριθμοί</a>
  </li>
  <li class="logout">
     <a href="logout.php" class="aposundesh">Αποσύνδεση</a>
  </li>
</ul>
</nav>
<table name="table2" id="table2" width="941" border="1" cellspacing="0" cellpadding="3" align="center"> 
<form name="form1" class="form1" id="form1" action="updateupal.php" method="post"> 
<tr>
<td>
	 Password: <input type="password" id="password" name="password" value="<?php $conn = new mysqli("localhost", "root", "");
                         if ($conn->connect_error) {
                               die("Connection failed: " . $conn->connect_error);
							   }
					     $conn = new mysqli("localhost", "root", "","medicare");
					     $sql = 'SELECT password FROM grammateia WHERE username = "'.$_SESSION["username"].'"';
                         $result = $conn->query($sql);		   
						 if ($result->num_rows > 0) {
                               while($row = $result->fetch_assoc()) {
								   echo $row['password'];
							   }
						 }  
							   ?>"><br>
	 Διευύθνση κατοικίας:<input type="text" id="Dieutunsh_katoikias" name="Dieutunsh_katoikias" value="<?php $conn = new mysqli("localhost", "root", "");
                         if ($conn->connect_error) {
                               die("Connection failed: " . $conn->connect_error);
							   }
					     $conn = new mysqli("localhost", "root", "","medicare");
					     $sql = 'SELECT Dieutunsh_katoikias FROM grammateia WHERE username = "'.$_SESSION["username"].'"';
                         $result = $conn->query($sql);		   
						 if ($result->num_rows > 0) {
                               while($row = $result->fetch_assoc()) {
								   echo $row['Dieutunsh_katoikias'];
							   }
						 }  
							   ?>"><br>
	 Κινητό:<input type="number" id="Kinhto" name="Kinhto" value="<?php $conn = new mysqli("localhost", "root", "");
                         if ($conn->connect_error) {
                               die("Connection failed: " . $conn->connect_error);
							   }
					     $conn = new mysqli("localhost", "root", "","medicare");
					     $sql = 'SELECT Kinhto FROM grammateia WHERE username = "'.$_SESSION["username"].'"';
                         $result = $conn->query($sql);		   
						 if ($result->num_rows > 0) {
                               while($row = $result->fetch_assoc()) {
								   echo $row['Kinhto'];
							   }
						 }  
							   ?>"><br>
	 Μοναδικός Κωδικός Υπαλλήλου:<input type="text" id="Monadikos_kwdikos_upallilou" name="Monadikos_kwdikos_upallilou" value="<?php $conn = new mysqli("localhost", "root", "");
                         if ($conn->connect_error) {
                               die("Connection failed: " . $conn->connect_error);
							   }
					     $conn = new mysqli("localhost", "root", "","medicare");
					     $sql = 'SELECT Monadikos_kwdikos_upallilou FROM grammateia WHERE username = "'.$_SESSION["username"].'"';
                         $result = $conn->query($sql);		   
						 if ($result->num_rows > 0) {
                               while($row = $result->fetch_assoc()) {
								   echo $row['Monadikos_kwdikos_upallilou'];
							   }
						 }  
							   ?>"><br>
	  <input type="button" value="Ανανέωση" id="btnsubmit" onclick="submitForm()">
</td>
</tr>
</form>
</table>
<table name="table1" id="table1" width="941" border="1" cellspacing="0" cellpadding="3" align="center">
<tr>
<td width="8%"><b>Username</b></td>
<td width="11%"><b>Password</b></td>
<td width="9%"><b>Διεύθυνση Κατοικίας</b></td>
<td width="6%"><b>Κινητό</b></td>
<td width="7%"><b>Μοναδικός Κωδικός Υπαλλήλου</b></td>
</tr>

<?php
// Run the actual connection here  
$link=mysqli_connect("$dbhost","$dbusername","$dbpass") or die ("could not connect to mysql");
mysqli_select_db($link,"$dbname") or die ("no database");        
$result = mysqli_query($link, "SELECT * FROM grammateia WHERE username='{$_SESSION['username']}'");
$grammateia = mysqli_num_rows($result);
while($row = mysqli_fetch_array($result)){
?>
<tr>
<td width="13%"><?php echo $row['username']?></td>
<td width="9%"><?php echo $row['password']?></td>

<td width="21%"><?php echo $row['Dieutunsh_katoikias']?></td>
<td width="10%"><?php echo $row['Kinhto']?></td>
<td width="9%"><?php echo $row['Monadikos_kwdikos_upallilou']?></td>
</tr>
</table>
<?php
// close while loop

}

// close connection
mysqli_close($link);
?>
<table name="table3" id="table3" width="941" border="1" cellspacing="0" cellpadding="3" align="center">
<form name="form3" class="form3" id="form3" action="stoixeiaas.php" method="post"> 
<tr>
<td>
Όνομα: <input type="text" id="Onoma" name="Onoma" required><br>
Επώνυμο: <input type="text" id="Epwnumo" name="Epwnumo" required><br>
Πατρώνυμο: <input type="text" id="Patrwnumo" name="Patrwnumo" required><br>
Διευύθνση Κατοικίας: <input type="text" id="Dieuthunsh" name="Dieuthunsh" required><br>
Πόλη: <input type="text" id="Poli" name="Poli" required><br>
ΤΚ: <input type="number" id="TK" name="TK" required><br>
ΑΜΚΑ: <input type="number" id="AMKA" name="AMKA" required><br>
Τηλέφωνο: <input type="number" id="Til" name="Til" required><br>
E-mail: <input type="text" id="Email" name="Email" required><br>
<input type="button" value="Δημιουργία" id="btnsubmit" onclick="submitForm2()" required>
</td>
</tr>
</form>
</table>
<table name="table4" id="table4" width="941" border="1" cellspacing="0" cellpadding="3" align="center">
<tr>
<td width="8%"><b>No.</b></td>
<td width="8%"><b>Όνομα</b></td>
<td width="11%"><b>Επώνυμο</b></td>
<td width="11%"><b>Πατρώνυμο</b></td>
<td width="9%"><b>Διεύθυνση Κατοικίας</b></td>
<td width="6%"><b>Πόλη</b></td>
<td width="7%"><b>ΤΚ</b></td>
<td width="7%"><b>ΑΜΚΑ</b></td>
<td width="7%"><b>Τηλέφωνο</b></td>
<td width="7%"><b>E-mail</b></td>
</tr>

<?php
// Run the actual connection here  
$link=mysqli_connect("$dbhost","$dbusername","$dbpass") or die ("could not connect to mysql");
mysqli_select_db($link,"$dbname") or die ("no database");        
$result = mysqli_query($link, "SELECT * FROM lista_asthenwn");
$astheneis = mysqli_num_rows($result);
while($row = mysqli_fetch_array($result)):
?>
<tr>
<td width="13%"><?php echo $row['id']?></td>
<td width="13%"><?php echo $row['Onoma']?></td>
<td width="9%"><?php echo $row['Epwnumo']?></td>
<td width="6%"><?php echo $row['Patrwnumo']?></td>
<td width="21%"><?php echo $row['Dieuthunsh']?></td>
<td width="10%"><?php echo $row['Poli']?></td>
<td width="9%"><?php echo $row['TK']?></td>
<td width="10%"><?php echo $row['AMKA']?></td>
<td width="8%"><?php echo $row['Til']?></td>
<td width="3%"><?php echo $row['Email']?></td>
</tr>

 <?php
    // close while loop
    endwhile;

    // close connection
    mysqli_close($link);
  ?>
</table>
<table name="table5" id="table5" width="941" border="1" cellspacing="0" cellpadding="3" align="center">
<form id="form5" name="form5" action="stoixeiarantevou.php" method="post">
<td>
<?php
$sqlcom = "SELECT * FROM lista_asthenwn";
$result1 = $conn->query($sqlcom);

if ($result1->num_rows > 0) {
?>

Ασθενής:<select name="Asthenis" id="Asthenis">
<?php
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
    ?>
    <option value="<?php echo $row1['Epwnumo'], '', $row1['Onoma'];?>"><?php echo $row1['Epwnumo']; echo $row1['Onoma'];?></option>
    <?php
    }
    ?>
</select>
<?php
}
?>
<?php
$sql = "SELECT username FROM giatros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>
<div id="doc">
Γιατρός:<select name="Giatros" id="Giatros">
<?php
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>
    <option value="<?php echo $row['username']; ?>"><?php echo $row['username'];?></option>
    <?php
    }
    ?>
</select>
</div>
<?php
}
$conn->close();
?>
Ημερομηνία: <input type="text" id="Hmeromhnia" name="Hmeromhnia" required><br>
Ώρα: <input type="text" id="Wra" name="Wra" required><br>
<input type="button" value="Δημιουργία" name="Δημιουργία" id="btnsubmit" onclick="submitForm3()">
   </form>
   </td>
</table>
<table name="table6" id="table6" width="941" border="1" cellspacing="0" cellpadding="3" align="center">
<tr>
<td width="8%"><b>Ασθενής</b></td>
<td width="11%"><b>Γιατρός</b></td>
<td width="8%"><b>Ημερομηνία</b></td>
<td width="11%"><b>Ώρα</b></td>
<?php
// Run the actual connection here  
$link=mysqli_connect("$dbhost","$dbusername","$dbpass") or die ("could not connect to mysql");
mysqli_select_db($link,"$dbname") or die ("no database");        
$result = mysqli_query($link, "SELECT * FROM lista_rantevou");
$astheneis = mysqli_num_rows($result);
while($row = mysqli_fetch_array($result)):
?>
<tr>
<td width="13%"><?php echo $row['Asthenis']?></td>
<td width="13%"><?php echo $row['Giatros']?></td>
<td width="9%"><?php echo $row['Hmeromhnia']?></td>
<td width="6%"><?php echo $row['Wra']?></td>
</tr>
 <?php
    // close while loop
    endwhile;

    // close connection
    mysqli_close($link);
  ?>
</table>
<table name="table7" id="table7" width="941" border="1" cellspacing="0" cellpadding="3" align="center">
<form id="form7" name="form7" action="exitirio.php" method="post">

<td>
<?php
$conn=mysqli_connect("$dbhost","$dbusername","$dbpass") or die ("could not connect to mysql");
mysqli_select_db($conn,"$dbname") or die ("no database");   
$sqlcom = "SELECT * FROM lista_asthenwn";
$result1 = $conn->query($sqlcom);

if ($result1->num_rows > 0) {
?>

Ασθενής:<select name="Asthenis" id="Asthenis">
<?php
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
    ?>
    <option value="<?php echo $row1['Epwnumo'], $row1['Onoma'];?>"><?php echo $row1['Epwnumo']; echo $row1['Onoma'];?></option>
    <?php
    }
    ?>
</select><br>
<?php
}
?>
<?php
$sql = "SELECT username FROM giatros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>
Ημερομηνία: <input type="text" id="Hmeromhnia" name="Hmeromhnia" required><br>
Εξιτήριο: <textarea name="exitirio" id="exitirio" rows="5" cols="50">Ο ασθενής είναι πλέον καλά στην υγεία του και μπορεί να βγει από το νοσοκομείο</textarea><br>

<?php
}
$conn->close();
?>

<input type="button" value="Δημιουργία εξιτηρίου" name="Δημιουργία" id="btnsubmit" onclick="submitForm4()">
   </form>
   </td>
</table>
<table name="table8" id="table8" width="941" border="1" cellspacing="0" cellpadding="3" align="center">
<form id="form8" name="form8" action="xeirourgeio.php" method="post">
<td>
<?php
  
$conn=mysqli_connect("$dbhost","$dbusername","$dbpass") or die ("could not connect to mysql");
mysqli_select_db($conn,"$dbname") or die ("no database");  
?>
<?php

$sqlcom = "SELECT * FROM lista_asthenwn";
$result1 = $conn->query($sqlcom);

if ($result1->num_rows > 0) {
?>

Ασθενής:<select name="Asthenis" id="Asthenis">
<?php
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
    ?>
    <option value="<?php echo $row1['Epwnumo'], $row1['Onoma'];?>"><?php echo $row1['Epwnumo']; echo $row1['Onoma'];?></option>
    <?php
    }
    ?>
</select>
<?php
}
?>
<?php
$sql = "SELECT username FROM giatros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>
<div id="doc">
Γιατρός:<select name="Giatros" id="Giatros">
<?php
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>
    <option value="<?php echo $row['username']; ?>"><?php echo $row['username'];?></option>
    <?php
    }
    ?>
</select>
</div>
<?php
}
$conn->close();
?>
Ημερομηνία: <input type="text" id="Hmeromhnia" name="Hmeromhnia" required><br>
Ώρα: <input type="text" id="Wra" name="Wra" required><br>
Δωμάτιο: <input type="number" id="Dwmatio" name="Dwmatio" required><br>
<input type="button" value="Δημιουργία" name="Δημιουργία" id="btnsubmit" onclick="submitForm8()">
   </form>
   </td>
</table>
<table name="table10" id="table10" width="941" border="1" cellspacing="0" cellpadding="3" align="center">
<tr>
<td width="8%"><b>Ασθενής</b></td>
<td width="11%"><b>Γιατρός</b></td>
<td width="8%"><b>Ημερομηνία</b></td>
<td width="11%"><b>Ώρα</b></td>
<td width="11%"><b>Δωμάτιο</b></td>

<?php
// Run the actual connection here  
$link=mysqli_connect("$dbhost","$dbusername","$dbpass") or die ("could not connect to mysql");
mysqli_select_db($link,"$dbname") or die ("no database");        
$result = mysqli_query($link, "SELECT * FROM xeirourgeio");
$astheneis = mysqli_num_rows($result);
while($row = mysqli_fetch_array($result)):
?>
<tr>
<td width="13%"><?php echo $row['Asthenis']?></td>
<td width="13%"><?php echo $row['Giatros']?></td>
<td width="9%"><?php echo $row['Hmeromhnia']?></td>
<td width="9%"><?php echo $row['Wra']?></td>
<td width="6%"><?php echo $row['Dwmatio']?></td>
</tr>
 <?php
    // close while loop
    endwhile;

    // close connection
    mysqli_close($link);
  ?>
</table>
<table name="table9" id="table9" width="941" border="1" cellspacing="0" cellpadding="3" align="center">
<form id="form9" name="form9" action="epeigon_per.php" method="post">

<td>
<?php
$conn=mysqli_connect("$dbhost","$dbusername","$dbpass") or die ("could not connect to mysql");
mysqli_select_db($conn,"$dbname") or die ("no database");   
$sqlcom = "SELECT * FROM lista_asthenwn";
$result1 = $conn->query($sqlcom);

if ($result1->num_rows > 0) {
?>

Ασθενής:<select name="Asthenis" id="Asthenis">
<?php
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
    ?>
    <option value="<?php echo $row1['Epwnumo'], $row1['Onoma'];?>"><?php echo $row1['Epwnumo']; echo $row1['Onoma'];?></option>
    <?php
    }
    ?>
</select><br>
<?php
}
?>
<?php
$sql = "SELECT username FROM giatros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>
Ημερομηνία: <input type="text" id="Hmeromhnia" name="Hmeromhnia" required><br>
Καταγραφή περιστατικού: <textarea name="Katagrafi" id="Katagrafi" rows="5" cols="50"></textarea><br>

<?php
}
$conn->close();
?>

<input type="button" value="Δημιουργία" name="Δημιουργία" id="btnsubmit" onclick="submitForm9()">
   </form>
   </td>
</table>


<table name="efim" id="efim" width="941" border="1" cellspacing="0" cellpadding="3" align="center">
<tr>
<td width="8%"><b>Υπάλληλος</b></td>
<td width="11%"><b>Ημερομηνία</b></td>
<td width="11%"><b>Ώρα</b></td>
</tr>
<tr>
<td>Marina_Giannokopoulou</td>
<td>25-10-2016</td>
<td>08:00-17:00</td>
</tr>
<tr>
<td>Georgia_Mixail</td>
<td>25-10-2016</td>
<td>17:00-01:00</td>
</tr>
</table>
<table name="eikones" id="eikones" width="500" border="0" align="center"> <!-- Dimiourgia trapeziou me sugkekrimeno width, mideniko border kai kentriki diataxi-->
       <tr> <!-- Dimiourgia table row prokeimenou to trapezi na xwristei -->
         
         <td width="800"><img src="icons/slide0.jpg" id="slide" width="1200" height="500" /></td> <!-- Dimiourgia diaxwrismenou kommatiou tou table prokeimenou oles oi fwtografies na exoun sigkekrimenes diastaseis-->
       </tr> <!-- Telos table row-->
</table>
<script type="text/javascript"> <!-- Dimiourgia senariou javascript-->


var step=0 <!-- Arxikopoihmeni metaviliti pou tha auxanetai kai tha enallasei tis eikones-->

function slideit(){  <!-- Dimiourgia sunartisis-->
 
 if (!document.images) <!-- An o browser den upostirizei to image object-->
  return <!-- Epestrepse-->
 document.getElementById('slide').src = slideimages[step].src <!-- Me tin metaviliti step oi fotografies enallasontai--> 
 if (step<5) <!-- An to step einai mikrotero tou 5 sunexise stin epomeni foto-->
  step++
 else 
  step=0 <!-- Allios xekina apo tin arxi-->
 setTimeout("slideit()",4000) <!-- Enallagi tis fotografias kathe 2 deuterolepta-->
}
slideit()
</script>

<table name="tilefwna" id="tilefwna" width="941" border="1" cellspacing="0" cellpadding="3" align="center">
<tr>
<td width="8%"><b>Υπάλληλος/Γιατρός</b></td>
<td width="8%"><b>Τηλέφωνα</b></td>
</tr>
<tr>
<td>Marina_Giannokopoulou</td>
<td>154</td>
</tr>
<tr>
<td>Georgia_Mixail</td>
<td>178</td>
</tr>
<tr>
<td>Nikolaos_Bounas</td>
<td>132</td>
</tr>
</tr>
<td>Maximos_Salachas</td>
<td>142</td>
</tr>
</table>
<div class="push"></div>
</div>
<div class="footer">
<hr>
<p>&copy Medicare 2016</p>
</div>
</body>
</html>
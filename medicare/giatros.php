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
 $('#efim').hide();
  $('#eikones2').hide();
 $('#tilefwna').hide();
 });
 $('#p1').click(function(){
 $('#table1').show();
 $('#table2').hide();
 $('#table3').hide();
 $('#table4').hide();
 $('#table5').hide();
 $('#table6').hide();
 $('#table7').hide();
 $('#efim').hide();
  $('#eikones2').hide();
 $('#tilefwna').hide();
 });
  $('#b1').click(function(){
 $('#table3').show();
 $('#table2').hide();
 $('#table1').hide();
 $('#table4').hide();
 $('#table5').hide();
 $('#table6').hide();
 $('#table7').hide();
 $('#efim').hide();
  $('#eikones2').hide();
 $('#tilefwna').hide();
 });
   $('#i1').click(function(){
 $('#table4').show();
 $('#table2').hide();
 $('#table1').hide();
 $('#table3').hide();
 $('#table5').hide();
 $('#table6').hide();
 $('#table7').hide();
 $('#efim').hide();
  $('#eikones2').hide();
 $('#tilefwna').hide();
 });
  $('#i2').click(function(){
 $('#table5').show();
 $('#table2').hide();
 $('#table1').hide();
 $('#table3').hide();
 $('#table4').hide();
 $('#table6').hide();
 $('#table7').hide();
 $('#efim').hide();
  $('#eikones2').hide();
 $('#tilefwna').hide();
 });
  $('#i3').click(function(){
 $('#table6').show();
 $('#table2').hide();
 $('#table1').hide();
 $('#table3').hide();
 $('#table4').hide();
 $('#table5').hide();
 $('#table7').hide();
 $('#efim').hide();
  $('#eikones2').hide();
 $('#tilefwna').hide();
 });
 $('#b2').click(function(){
 $('#table7').show();
 $('#table2').hide();
 $('#table1').hide();
 $('#table3').hide();
 $('#table4').hide();
 $('#table5').hide();
 $('#table6').hide();
 $('#efim').hide();
  $('#eikones2').hide();
 $('#tilefwna').hide();
 });
  $('#p3').click(function(){
 $('#efim').show();
 $('#table2').hide();
 $('#table1').hide();
 $('#table3').hide();
 $('#table4').hide();
 $('#table5').hide();
 $('#table6').hide();
 $('#table7').hide();
 $('#eikones2').hide();
 $('#tilefwna').hide();
 });
  $('#m1').click(function(){
 $('#tilefwna').show();
 $('#efim').hide();
 $('#table2').hide();
 $('#table1').hide();
 $('#table3').hide();
 $('#table4').hide();
 $('#table5').hide();
 $('#table6').hide();
 $('#table7').hide();
 $('#eikones2').hide();
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
	  function submitForm4() {
   // Get the first form with the name
   // Hopefully there is only one, but there are more, select the correct index
   var frm = document.getElementsByName('form4')[0];
   frm.submit(); // Submit
   frm.reset();  // Reset
   alert("Το ιστορικό ανανεώθηκε επιτυχώς");
   return false; // Prevent page refresh
	  
	  }
	  
   </script>
   	  <script>
	  function submitForm6() {
   // Get the first form with the name
   // Hopefully there is only one, but there are more, select the correct index
   var frm = document.getElementsByName('form6')[0];
   frm.submit(); // Submit
   frm.reset();  // Reset
   alert("Τα στοιχεία της συνταγής καταχωρήθηκαν επιτυχώς");
   return false; // Prevent page refresh
	  
	  }
	  
   </script>
   <script>
   function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
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
<ul>
<li class="Home">
<a href="giatros.php" class="arx_sel">Αρχική Σελίδα</a>
  <li class="dropdown1">
    <a href="#" class="dropbtn1">Προφίλ Ιατρού</a>
	<div class="dropdown-content1">
      <a href="#" id="p1">Προβολή προφίλ</a>
      <a href="#" id="p2">Τροποποίηση προφίλ</a>
	  <a href="#" id="p3">Πρόγραμμα εφημεριών</a>
    </div>
  </li>
      <li class="dropdown2">
    <a href="#" class="dropbtn2">Ασθενείς</a>
    <div class="dropdown-content2">
      <a href="#" id="i1">Διάγνωση ασθενή</a>
	  <a href="#" id="i2">Προβολή ιστορικού</a>
      <a href="#" id="i3">Νέα συνταγή</a>
    </div>
  </li>
   <li class="dropdown3">
     <a href="#" class="dropbtn3">Υποχρεώσεις</a>
	 <div class="dropdown-content3">
      <a href="#" id="b1">Λίστα ραντεβού</a>
	  <a href="#" id="b2">Λίστα χειρουγείων</a>
    </div>
  </li>
  <li class="tile">
  <a href="#" id="m1">Χρήσιμοι αριθμοί</a>
  </li>
  <li class="logout">
     <a href="logout.php" class="aposundesh">Αποσύνδεση</a>
  </li>
</ul>


<table name="table2" id="table2" width="941" border="1" cellspacing="0" cellpadding="3" align="center"> 
<form name="form1" class="form1" id="form1" action="updategiatros.php" method="post"> 
<tr>
<td>
	 Password: <input type="password" id="password" name="password" value="<?php $conn = new mysqli("localhost", "root", "");
                         if ($conn->connect_error) {
                               die("Connection failed: " . $conn->connect_error);
							   }
					     $conn = new mysqli("localhost", "root", "","medicare");
					     $sql = 'SELECT password FROM giatros WHERE username = "'.$_SESSION["username"].'"';
                         $result = $conn->query($sql);		   
						 if ($result->num_rows > 0) {
                               while($row = $result->fetch_assoc()) {
								   echo $row['password'];
							   }
						 }  
							   ?>"><br>
	 Ιδιότητα ιατρού:<input type="text" id="idiotita_giatrou" name="idiotita_giatrou" pattern="[Α-Ω].{1,}" value="<?php $conn = new mysqli("localhost", "root", "");
                         if ($conn->connect_error) {
                               die("Connection failed: " . $conn->connect_error);
							   }
					     $conn = new mysqli("localhost", "root", "","medicare");
					     $sql = 'SELECT idiotita_giatrou FROM giatros WHERE username = "'.$_SESSION["username"].'"';
                         $result = $conn->query($sql);		   
						 if ($result->num_rows > 0) {
                               while($row = $result->fetch_assoc()) {
								   echo $row['idiotita_giatrou'];
							   }
						 }  
							   ?>"><br>
	 Διευύθνση κατοικίας:<input type="text" id="Dieutunsh_katoikias" name="Dieutunsh_katoikias" value="<?php $conn = new mysqli("localhost", "root", "");
                         if ($conn->connect_error) {
                               die("Connection failed: " . $conn->connect_error);
							   }
					     $conn = new mysqli("localhost", "root", "","medicare");
					     $sql = 'SELECT Dieutunsh_katoikias FROM giatros WHERE username = "'.$_SESSION["username"].'"';
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
					     $sql = 'SELECT Kinhto FROM giatros WHERE username = "'.$_SESSION["username"].'"';
                         $result = $conn->query($sql);		   
						 if ($result->num_rows > 0) {
                               while($row = $result->fetch_assoc()) {
								   echo $row['Kinhto'];
							   }
						 }  
							   ?>"><br>
	 Μοναδικός Κωδικός Ιατρού:<input type="text" id="Monadikos_kwdikos_iatrou" name="Monadikos_kwdikos_iatrou" value="<?php $conn = new mysqli("localhost", "root", "");
                         if ($conn->connect_error) {
                               die("Connection failed: " . $conn->connect_error);
							   }
					     $conn = new mysqli("localhost", "root", "","medicare");
					     $sql = 'SELECT Monadikos_kwdikos_iatrou FROM giatros WHERE username = "'.$_SESSION["username"].'"';
                         $result = $conn->query($sql);		   
						 if ($result->num_rows > 0) {
                               while($row = $result->fetch_assoc()) {
								   echo $row['Monadikos_kwdikos_iatrou'];
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
<td width="11%"><b>Ιδιότητα Ιατρού</b></td>
<td width="9%"><b>Διεύθυνση Κατοικίας</b></td>
<td width="6%"><b>Κινητό</b></td>
<td width="7%"><b>Μοναδικός Κωδικός Ιατρού</b></td>
</tr>

<?php
// Run the actual connection here  
$link=mysqli_connect("$dbhost","$dbusername","$dbpass") or die ("could not connect to mysql");
mysqli_select_db($link,"$dbname") or die ("no database");        
$result = mysqli_query($link, "SELECT * FROM giatros WHERE username='{$_SESSION['username']}'");
$giatros = mysqli_num_rows($result);
while($row = mysqli_fetch_array($result)){
?>
<tr>
<td width="13%"><?php echo $row['username']?></td>
<td width="9%"><?php echo $row['password']?></td>
<td width="6%"><?php echo $row['idiotita_giatrou']?></td>
<td width="21%"><?php echo $row['Dieutunsh_katoikias']?></td>
<td width="10%"><?php echo $row['Kinhto']?></td>
<td width="9%"><?php echo $row['Monadikos_kwdikos_iatrou']?></td>
</tr>
</table>
<?php
// close while loop

}

// close connection
mysqli_close($link);
?>
<table name="table3" id="table3" width="941" border="1" cellspacing="0" cellpadding="3" align="center">
<tr>
<td width="8%"><b>Ασθενής</b></td>
<td width="11%"><b>Ημερομηνία</b></td>
<td width="11%"><b>Ώρα</b></td>
</tr>

<?php
// Run the actual connection here  
$link=mysqli_connect("$dbhost","$dbusername","$dbpass") or die ("could not connect to mysql");
mysqli_select_db($link,"$dbname") or die ("no database");        
$result = mysqli_query($link, "SELECT * FROM lista_rantevou WHERE Giatros='{$_SESSION['username']}'");
$giatros = mysqli_num_rows($result);
while($row = mysqli_fetch_array($result)):
?>
<tr>
<td width="13%"><?php echo $row['Asthenis']?></td>
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
<table name="table4" id="table4" width="941" border="1" cellspacing="0" cellpadding="3" align="center">
<form id="form4" name="form4" action="istoriko.php" method="post">
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
    <option value="<?php echo $row1['Epwnumo'], $row1['Onoma'];?>"><?php echo $row1['Epwnumo']; echo $row1['Onoma'];?></option>
    <?php
    }
    ?>
</select><br>
<?php
}
$conn->close();
?>
Διάγνωση: <textarea name="Diagnwsi" id="Diagnwsi" rows="5" cols="50" required></textarea><br>

<input type="button" value="Προσθήκη στο ιστορικό" name="Δημιουργία" id="btnsubmit" onclick="submitForm4()">

   </form>
   </td>
</table>
<table name="table5" id="table5" width="941" border="1" cellspacing="0" cellpadding="3" align="center">
<tr>
<td width="8%"><b>Ασθενής</b></td>
<td width="11%"><b>Ιστορικό</b></td>
<td width="11%"><b>Εκτύπωση</b></td>

<?php
// Run the actual connection here  
$link=mysqli_connect("$dbhost","$dbusername","$dbpass") or die ("could not connect to mysql");
mysqli_select_db($link,"$dbname") or die ("no database");        
$result = mysqli_query($link, "SELECT * FROM istoriko");
$astheneis = mysqli_num_rows($result);

while($row = mysqli_fetch_array($result)):
?>
<div id="printableArea">
<tr>
<td width="13%"><?php echo $row['Asthenis']?></td>
<td width="13%"><?php echo $row['Diagnwsi']?></td>
<td><input type="button" onclick="printDiv('printableArea')" value="Εκτύπωση διάγνωσης">
</div>
</tr>
 <?php
    // close while loop
    endwhile;

    // close connection
    mysqli_close($link);
  ?>
</table>
<table name="table6" id="table6" width="941" border="1" cellspacing="0" cellpadding="3" align="center">
<form id="form6" name="form6" action="suntagi.php" method="post">
<td>
<?php
  
$conn=mysqli_connect("$dbhost","$dbusername","$dbpass") or die ("could not connect to mysql");
mysqli_select_db($conn,"$dbname") or die ("no database");  
?>
<?php
$sqlcom2 = "SELECT * FROM lista_asthenwn";
$result2 = $conn->query($sqlcom2);

if ($result2->num_rows > 0) {
?>

Ασθενής:<select name="Asthenis" id="Asthenis">
<?php
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
    ?>
    <option value="<?php echo $row2['Epwnumo'], $row2['Onoma'];?>"><?php echo $row2['Epwnumo']; echo $row2['Onoma'];?></option>
    <?php
    }
    ?>
</select><br>
<?php
}
$conn->close();
?>
Φάρμακο:<input type="text" id="farmako" name="farmako"><br>
Ποσότητα: <select name="posothta" id="posothta">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
<input type="button" value="Ολοκλήρωση συνταγής" name="Δημιουργία" id="btnsubmit" onclick="submitForm6()">
   </form>
   </td>
</table>
<table name="table7" id="table7" width="941" border="1" cellspacing="0" cellpadding="3" align="center">
<tr>
<td width="8%"><b>Ασθενής</b></td>
<td width="11%"><b>Ημερομηνία</b></td>
<td width="11%"><b>Ώρα</b></td>
<td width="11%"><b>Δωμάτιο</b></td>
</tr>

<?php
// Run the actual connection here  
$link=mysqli_connect("$dbhost","$dbusername","$dbpass") or die ("could not connect to mysql");
mysqli_select_db($link,"$dbname") or die ("no database");        
$result = mysqli_query($link, "SELECT * FROM xeirourgeio WHERE Giatros='{$_SESSION['username']}'");
$xeirourgeio = mysqli_num_rows($result);
while($row = mysqli_fetch_array($result)):
?>
<tr>
<td width="13%"><?php echo $row['Asthenis']?></td>
<td width="9%"><?php echo $row['Hmeromhnia']?></td>
<td width="6%"><?php echo $row['Wra']?></td>
<td width="6%"><?php echo $row['Dwmatio']?></td>
</tr>

<?php
// close while loop

endwhile;

// close connection
mysqli_close($link);
?>
</table>
<table name="efim" id="efim" width="941" border="1" cellspacing="0" cellpadding="3" align="center">
<tr>
<td width="8%"><b>Γιατρός</b></td>
<td width="11%"><b>Ημερομηνία</b></td>
<td width="11%"><b>Ώρα</b></td>
</tr>
<tr>
<td>Nikolaos_Bounas</td>
<td>25-10-2016</td>
<td>08:00-17:00</td>
</tr>
<tr>
<td>Maximos_Salachas</td>
<td>25-10-2016</td>
<td>17:00-01:00</td>
</tr>
</table>
<table name="eikones2" id="eikones2" width="500" border="0" align="center"> <!-- Dimiourgia trapeziou me sugkekrimeno width, mideniko border kai kentriki diataxi-->
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
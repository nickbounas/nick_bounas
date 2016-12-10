<?php include "dbcon.php";?>
<?php
 
    if (isset($_POST['Onoma'])) $fname=$_POST['Onoma'];
    if (isset($_POST['Epwnumo'])) $lname=$_POST['Epwnumo'];
	if (isset($_POST['Patrwnumo'])) $faname=$_POST['Patrwnumo'];
	if (isset($_POST['Dieuthunsh'])) $dieu=$_POST['Dieuthunsh'];
	if (isset($_POST['Poli'])) $pol=$_POST['Poli'];
	if (isset($_POST['TK'])) $tax=$_POST['TK'];
	if (isset($_POST['AMKA'])) $amk=$_POST['AMKA'];
	if (isset($_POST['Til'])) $tile=$_POST['Til'];
	if (isset($_POST['Email'])) $em=$_POST['Email'];
	
	

	$query = "INSERT INTO lista_asthenwn(Onoma, Epwnumo, Patrwnumo, Dieuthunsh, Poli, TK, AMKA, Til, Email) VALUES ('{$fname}', '{$lname}', '{$faname}', '{$dieu}', '{$pol}', '{$tax}', '{$amk}', '{$tile}', '{$em}')"; 
	$result = mysqli_query($connection, $query);
	// Test if there was a query error 
    if($result) 
    {
        echo "Ta stoixeia kataxwrithikan epituxws";
    } 
    else
    {
        die( "Database query failed " . mysqli_error($connection)); 
    }
   
     
	header("Location:grammateiakos_upallilos.php"); /* Redirect browser */
    exit();
    ?>
	
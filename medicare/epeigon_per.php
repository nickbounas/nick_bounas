<?php include "dbcon.php";?>
<?php
    if (isset($_POST["Asthenis"])) $asthe=$_POST["Asthenis"];
    if (isset($_POST["Hmeromhnia"])) $hmer=$_POST["Hmeromhnia"];
	if (isset($_POST["Katagrafi"])) $kat=$_POST["Katagrafi"];

	$query = "INSERT INTO epeigon_peristatiko(Asthenis, Hmeromhnia, Katagrafi) VALUES ('{$asthe}', '{$hmer}', '{$kat}')";  
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
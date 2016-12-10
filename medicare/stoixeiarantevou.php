<?php include "dbcon.php";?>
<?php
    if (isset($_POST["Asthenis"])) $asthe=$_POST["Asthenis"];
    if (isset($_POST["Hmeromhnia"])) $hm=$_POST["Hmeromhnia"];
    if (isset($_POST["Wra"])) $wr=$_POST["Wra"];
	if (isset($_POST["Giatros"])) $giatr=$_POST["Giatros"];

	$query = "INSERT INTO lista_rantevou(Asthenis, Hmeromhnia, Wra, Giatros) VALUES ('{$asthe}', '{$hm}', '{$wr}', '{$giatr}')";  
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
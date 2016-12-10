<?php include "dbcon.php";?>
<?php
    if (isset($_POST["Asthenis"])) $asthe=$_POST["Asthenis"];
	if (isset($_POST["Giatros"])) $giat=$_POST["Giatros"];
    if (isset($_POST["Hmeromhnia"])) $hmer=$_POST["Hmeromhnia"];
	if (isset($_POST["Wra"])) $wr=$_POST["Wra"];
    if (isset($_POST["Dwmatio"])) $dwm=$_POST["Dwmatio"];

	$query = "INSERT INTO xeirourgeio(Asthenis, Giatros, Hmeromhnia, Wra, Dwmatio) VALUES ('{$asthe}','{$giat}', '{$hmer}', '{$wr}', '{$dwm}')";  
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
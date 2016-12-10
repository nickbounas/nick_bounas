<?php include "dbcon.php";?>
<?php
    if (isset($_POST["Asthenis"])) $asthe=$_POST["Asthenis"];
    if (isset($_POST["Diagnwsi"])) $Diagn=$_POST["Diagnwsi"];
 

	$query = "INSERT INTO istoriko(Asthenis, Diagnwsi) VALUES ('{$asthe}', '{$Diagn}')";  
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
   
	
	header("Location:giatros.php"); /* Redirect browser */
    exit();
    ?>
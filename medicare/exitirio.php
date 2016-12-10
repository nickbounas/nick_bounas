<?php include "dbcon.php";?>
<?php
    if (isset($_POST["Asthenis"])) $asthe=$_POST["Asthenis"];
    if (isset($_POST["Hmeromhnia"])) $hmer=$_POST["Hmeromhnia"];
	if (isset($_POST["exitirio"])) $exit=$_POST["exitirio"];
 

	$query = "INSERT INTO exitirio(Asthenis, Hmeromhnia, exitirio) VALUES ('{$asthe}', '{$hmer}', '{$exit}')";  
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
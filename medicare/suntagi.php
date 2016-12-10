<?php include "dbcon.php";?>
<?php
    if (isset($_POST["Asthenis"])) $asthe=$_POST["Asthenis"];
    if (isset($_POST["farmako"])) $far=$_POST["farmako"];
    if (isset($_POST["posothta"])) $poso=$_POST["posothta"];

	$query = "INSERT INTO suntagi(Asthenis, farmako, posothta) VALUES ('{$asthe}', '{$far}', '{$poso}')";  
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
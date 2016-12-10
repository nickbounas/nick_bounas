<?php include "dbcon.php";?>
<?php
$link=mysqli_connect("$dbhost","$dbusername","$dbpass") or die ("could not connect to mysql");
mysqli_select_db($link,"$dbname") or die ("no database");    

$Dieuthunsh=$_SESSION['Dieuthunsh'];
$Poli=$_POST['Poli'];
$TK=$_POST['TK'];
$AMKA=$_POST['AMKA'];
$Til=$_POST['Til'];
$Email=$_POST['Email'];


    $query="UPDATE lista_asthenwn
            SET Dieuthunsh = '$dieu', Poli= '$pol', TK = '$tax', AMKA= '$AMKA', Til= '$Til', Email= '$Email' 
            WHERE id='$id'";


mysqli_query($link,$query);
header("Location:grammateiakos_upallilos.php"); /* Redirect browser */
    exit();

?>
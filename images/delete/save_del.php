<?php
    

    $con = mysqli_connect("localhost", "root", "");
	if(!$con)
		die("Could not connect: " . mysqli_error());
		
	mysqli_select_db($con, "example");
	$con->query("SET NAMES UTF8");

    $sql = "DELETE FROM persons WHERE person_id ='" . $_GET["id"] . "'";



    $rs = mysqli_query($con, $sql);
    
    if(!$rs)
        echo "Error deleting record";
    else
        echo "Record deleted successfully";
        
    mysqli_close($con);
?>

<a href="form_del.php">Back</a>



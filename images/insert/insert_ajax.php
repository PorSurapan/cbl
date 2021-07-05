<?php
	$fname = $_GET['firstName'];
	$lname = $_GET['lastName'];
	$adr = $_GET['address'];
    $dob = $_GET['birthDay'];

	$con = mysqli_connect("localhost", "root", "");
	if(!$con)
		die("Could not connect: " . mysqli_error());
		
	mysqli_select_db($con, "example");
	$con->query("SET NAMES UTF8");

    $sql = "INSERT INTO persons (first_name, last_name, address, birthday)
			VALUES('" . $fname . "', '" . $lname . "', '" . $adr . "', '" . $dob . "')";

    $rs = mysqli_query($con, $sql);
    if(!$rs)
        echo "Error adding record";
    else
        echo "Record added successfully";
        
    mysqli_close($con);
?>
<?php
	$fname = $_POST['firstName'];
	$lname = $_POST['lastName'];
	$adr = $_POST['address'];
    $dob = $_POST['birthDay'];

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

<a href="data_form.html">Back</a>
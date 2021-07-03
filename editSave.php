<?php
    session_start();

	$id = $_GET['id'];
    $username = $_GET['username']; 
    $name = $_GET['name']; 
    $password = $_GET['password']; 

	$con = mysqli_connect("localhost", "root", "");
	if(!$con)
		die("Could not connect: " . mysqli_error());

	mysqli_select_db($con, "studyphp");
	
    $sql = "UPDATE profiles SET username = '" . $username . "',
                            name = '" . $name . "',
                            password = '" . $password . "'
                            WHERE id = " . $id;

    $result = mysqli_query($con, $sql);
    if(!$result)
        echo "fails";
    else
        echo "$id" . "^" . "$username" . "^" . "$name";

	mysqli_close($con);
?>
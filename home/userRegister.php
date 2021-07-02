<?php
	$userName = $_GET['username'];
	$fullName = $_GET['full_name'];
	$password = $_GET['password'];

	$con = mysqli_connect("localhost", "root", "");
	if(!$con)
		die("Could not connect: " . mysqli_error());
		
	mysqli_select_db($con, "studyphp");
	$con->query("SET NAMES UTF8");
	$sql = "SELECT username FROM profiles WHERE username = '" .  $userName . "'";
	$rs = $con->query($sql);
	
	if(!$rs || mysqli_num_rows($rs) == 0)
	{
		$sql = "INSERT INTO profiles (username, name, password)
				VALUES('" . $userName . "', '" . $fullName . "', '" . $password . "')";

		$result = mysqli_query($con, $sql);
		if(!$result) {
			die('Error query: ' . mysqli_error());
		} else {
			$sql = "SELECT * FROM profiles WHERE username = '" .  $userName . "'";
			$result = mysqli_query($con, $sql);

			$data = "";
			while($row = $result->fetch_assoc()) {
				$data = $row['id'] . "^" . $row['username'] . "^" . $row['name'];
			}
			echo "$data";
		}
	}
	else
	{
		echo "";
	}
	
	mysqli_close($con); 
?>
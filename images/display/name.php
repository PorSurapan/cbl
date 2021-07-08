<?php
$name = $_GET["firstname"];
// connect to the database
$conn=mysqli_connect("localhost", "root", "" , "example");
$conn->query("SET NAMES UTF8");
	$sql = "SELECT * FROM persons WHERE first_name LIKE '%$name%'";
	$resource = $conn -> query($sql);
	
    while ($row = $resource -> fetch_assoc()){
		$firstname = $row['first_name'];
        echo '<option value="'.$firstname.'">';
	}
$conn->close();
?>
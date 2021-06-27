<?php
	$con = mysqli_connect("localhost", "root", "");
	if(!$con){
		die("Could not connect: " . mysqli_error());
	}
	mysqli_select_db($con, "studyphp");
	$con->query("SET NAMES UTF8");

	$sql = "SELECT username FROM profiles ORDER BY id";
	$rs = $con->query($sql);

	$userName = $_POST['username'];
	$count = 0;
	while($row = $rs->fetch_assoc()) {
		$db = $row['username'];

		if ($db == $userName)
			$count = 1;
	}

	if($count == 0) {
		$sql = "INSERT INTO profiles (username, name, password)
				VALUES('" . $_POST['username'] . "', '" . $_POST['full_name'] . "', '" . $_POST['password'] . "')";
				
		$result = mysqli_query($con, $sql);

		if(!$result){
			die('Error query: ' . mysqli_error());
		} else {
			echo '<script type="text/javascript">';
			echo 'if(!alert("ลงทะเบียนสำเร็จ กรุณาเข้าสู่ระบบ")) document.location = "index.html";';
			echo '</script>';
			//header("Location: index.html");
		} 
	}
	else
	{
		echo '<script type="text/javascript">';
		echo 'if(!alert("มีชื่อผู้ใช้นี้ในระบบแล้ว กรุณาเข้าสู่ระบบ (หากพบปัญหา โปรดติดต่อผู้ดูแลระบบ)")) document.location = "register_form.html";';
		echo '</script>';
	}
	mysqli_close($con); 
?>
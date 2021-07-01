<?php
	session_start();

	if(isset($_SESSION['s_id']) && $_SESSION['logged'] == true) {
		// include('')
    } else {
        echo '<script type="text/javascript">';
		echo 'if(!alert("กรุณาเข้าสู่ระบบก่อน (หากพบปัญหา โปรดติดต่อผู้ดูแลระบบ)")) document.location = "/cbl/home/index.html";';
		echo '</script>';
    }
?>

<html>

<head>
	<title>Computer-Based Learning</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	
	<div class="wrapper d-flex align-items-stretch">
		<!-- Include sidebar -->
		<?php include('sidebar_user.php'); ?>

		<!-- Page Content  -->
		<div id="content" class="p-4 p-md-5 pt-5">
			<h2 class="mb-4">บทเรียน PHP</h2>
			<p>
				เว็บไซต์นี้จัดทำขึ้นเพื่อใช้ประกอบการเรียนการสอนในรายวิชา 214374
				วิชา คอมพิวเตอร์เพื่อการเรียนรู้ ซึ่งประกอบด้วยความรู้ในแต่ละบท 
				คลิปวิดีโอ แบบทดสอบก่อนเรียน และแบบทดสอบหลังเรียน 
				ประกอบด้วย 6 หน่วยการเรียนรู้
			</p>

			<p>หน่วยที่ 1 การออกแบบฐานข้อมูล&nbsp;&nbsp;</p>
			<p>หน่วยที่ 2 การเชื่อมต่อฐานข้อมูล&nbsp;&nbsp;</p>
			<p>หน่วยที่ 3 การเพิ่มข้อมูล&nbsp;&nbsp;</p>
			<p>หน่วยที่ 4 การแสดงข้อมูล&nbsp;&nbsp;</p>
			<p>หน่วยที่ 5 การแก้ไขข้อมูล&nbsp;&nbsp;</p>
			<p>หน่วยที่ 6 การลบข้อมูลด้วย&nbsp;&nbsp;</p>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
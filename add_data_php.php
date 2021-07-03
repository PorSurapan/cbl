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
		<!-- include sidebar -->
		<?php include ('sidebar_user.php'); ?>

		<!-- Page Content  -->
		<div id="content" class="p-4 p-md-5 pt-5">
			<h2 class="mb-4">การเพิ่มข้อมูลด้วย PHP</h2>
            <div style="text-align:center;">
			<!-- ใส่คลิป  -->
			    <p></p>
            </div>

            <h4>การใช้คำสั่งในการ INSERT ข้อมูลลงฐานข้อมูล</h4>
            <h6 style="text-indent: 2.5em;">เราจะทำการสร้าง ฟอร์มรับข้อมูลไว้ในไฟล์ form.php หลังจากนั้นจะให้ส่งค่าไปยัง ไฟล์ save.php เพื่อทำการ insert ข้อมูลลงฐานข้อมูล ในการสร้างไฟล์ save.php เราจะต้องมีการเชื่อมต่อกับฐานข้อมูลขึ้นมาก่อน connect.php  เมื่อทำการ insert จะนำข้อมูลไปแสดง ในหน้า list.php</h6>
            <h6 style="text-indent: 2.5em;">ในตัวอย่างเราจะทำการ INSERT ข้อมูลลงใน ตาราง test สิ่งเเรกก่อนเราจะต้องทำการสร้างตารางเพื่อรับข้อมูล</h6><br>
            
            <img src="/cbl/images/db.png" width="800"><br><br><br>

            <h6 style="text-indent: 2.5em;">จากนั้นทำการสร้าง form ตามโครงสร้างของตาราง</h6>
            <h6 style="text-indent: 2.5em;">เราจะเห็นว่ามีการ ส่งค่า  method="post" ไปยังไฟล์ save.php ส่วน enctype="multipart/form-data เป็นการกำหนดให้ฟอร์มนี้มีการเก็บข้อมูลได้หลายประเภท</h6><br>
            <img src="/cbl/images/form.png" width="800"><br><br><br>

            <h6 style="text-indent: 2.5em;">ก่อนจะไปทำงานที่ไฟล์ save.php จะต้องทำการเชื่อมต่อกับ database เสียก่อน</h6>
            <img src="/cbl/images/connect_db2.PNG" width="800"><br><br><br>

            <h6 style="text-indent: 2.5em;">จากนั้นให้สร้างไฟล์ save.php โดยใส่ require_once'connect.php' เพื่อใช้งานฐานข้อมูล</h6>
            <h6 style="text-indent: 2.5em;">คำสั่ง INSERT INTO ก็คือการเพิ่มข้อมูลจากฟอร์มลงฐานข้อมูลนั่นเอง</h6>
            <img src="/cbl/images/insert.PNG" width="800"><br><br><br>


           

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
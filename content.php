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
	<title>Introduction - Database Management with PHP</title>
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
			<h2 class="mb-4">ความรู้เบื้องต้น</h2>

            <h4><br>PHP คืออะไร?</h4>
            <h6 style="text-indent: 2.5em;">PHP เป็นคำย่อของ "PHP: Hypertext Preprocessor"</h6>
            <h6 style="text-indent: 2.5em;">PHP เป็นภาษาที่ทำงานในฝั่งของ server</h6>
            <h6 style="text-indent: 2.5em;">PHP script จะถูกประมวลผลบน server</h6>
            <h6 style="text-indent: 2.5em;">PHP รองรับฐานข้อมูลจำนวนมาก (MySQL, Oracle, PostgreSQL)</h6>
            <h6 style="text-indent: 2.5em;">PHP เป็นซอฟต์แวร์ที่ใช้งานฟรี</h6>
            <h6 style="text-indent: 2.5em;">PHP สามารถเขียนอยู่ในแท็ก HTML ได้ด้วยการพิมพ์แท็ก (&#60;?php  ?&#62;)<br><br></h6>  
            
            <br><br>
            <h4>การทำงานของ PHP</h4>
            <h6 style="text-indent: 2.5em;">Client สร้างหรือส่งคำขอไปยัง Web ServerWeb Server ทำการรัน PHP</h6>
            <h6 style="text-indent: 2.5em;">PHP ทำการ query ฐานข้อมูลและทำการดึงข้อมูลมาถ้าจำเป็น</h6>
            <h6 style="text-indent: 2.5em;">PHP ทำการดาวน์โหลดไฟล์ตัวอื่นถ้าจำเป็น</h6>
            <h6 style="text-indent: 2.5em;">ผลลัพธ์ถูกส่งกลับไปยัง client</h6>
            <br><img src="/cbl/images/php.jpg">            
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
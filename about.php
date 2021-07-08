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
			<h2 class="mb-4">เกี่ยวกับ</h2>
			<h4>แหล่งอ้างอิง</h4>
			<a href="https://colorlib.com/wp/template/login-form-14/">https://colorlib.com/wp/template/login-form-14/</a>
			<br><a href="https://colorlib.com/wp/template/bootstrap-sidebar-02/">https://colorlib.com/wp/template/bootstrap-sidebar-02/</a>
			<br><a href="https://stackoverflow.com/">https://stackoverflow.com/</a>
			<br><a href="https://www.w3schools.com/">https://www.w3schools.com/</a>
			<br><a href="https://qr.ae/pG4IIs">https://qr.ae/pG4IIs</a>
			<br><a href="https://dev.to/supaluckn/php-mysqli-4ke6">https://dev.to/supaluckn/php-mysqli-4ke6</a>
			<br><a href="https://www.studentstutorial.com/">https://www.studentstutorial.com/</a>
			<br><a href=""></a>
			<br><a href=""></a>

			<br><hr><br>
			<h4>เว็บไซต์นี้เป็นส่วนหนึ่งของรายวิชา 214374 คอมพิวเตอร์เพื่อการเรียนรู้ (3/2564)</h4><br>
            <h5>ความสำคัญของโครงงาน</h5>
			<p>ปฏิเสธไม่ได้ว่าทุกวันนี้คอมพิวเตอร์ถือว่าเป็นอุปกรณ์ที่มีบทบาทต่อการดำรงชีวิตของคนเราเป็นอย่างมาก 
				ระบบแทบทุกอย่างที่ใช้ในปัจจุบันก็เปลี่ยนเป็นใช้งานด้วยระบบคอมพิวเตอร์กันแทบจะทั้งสิ้น 
				ซึ่งการเปลี่ยนแปลงที่ว่านี้ส่วนหนึ่งก็มาจากการพัฒนาของโปรแกรมคอมพิวเตอร์ที่เกิดขึ้นอย่างต่อเนื่อง 
				ทำให้ตัวของคอมพิวเตอร์กลายเป็นสิ่งที่ได้รับความนิยมมากขึ้นเรื่อย ๆ สังเกตได้ง่าย ๆ 
				ว่าโปรแกรมคอมพิวเตอร์ได้เข้าไปอยู่ในทุกๆ พื้นที่ของการใช้งานคอมพิวเตอร์กันหมดแล้ว 
				ตั้งแต่พื้นฐานง่าย ๆ อย่างการสื่อสารผ่าน Social Network Service ต่าง ๆ 
				เช่น แอปพลิเคชัน Facebook, Messenger, Line ไปจนถึงการใช้งานในหน่วยงานต่าง ๆ 
				อาทิ โปรแกรมธนาคาร, โปรแกรมสำหรับการวิจัย, โปรแกรมคิดบัญชี เป็นต้น 
				ดังนั้นทักษะที่ทุกคนควรจะมีเป็นพื้นฐานติดตัวคือการเข้าใจภาษาคอมพิวเตอร์เบื้องต้น 
				เพื่อให้คิดอย่างเป็นระบบ เกิดกระบวนการคิดอย่างเป็นเหตุเป็นผล และพัฒนาต่อยอดสิ่งต่าง ๆ 
				ได้อย่างสร้างสรรค์ รวมถึงกระบวนการวางแผน ฝึกฝนกระบวนการคิดและลงมือทำอย่างมีประสิทธิภาพ 
				สามารถแก้ปัญหาเบื้องต้นเกี่ยวกับระบบคอมพิวเตอร์ได้</p>

            <h5><br>สมาชิกกลุ่ม</h5>
			<p>B6121693 นายธีระวัฒน์ เตชะวนกิจ</p>
			<p>B6121792 นายสุรพันธ์ พลอยกระโทก</p>
			<p>B6122768 นายเอกลักษณ์ สุขสำราญ</p>
        </div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
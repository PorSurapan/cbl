<?php
	session_start();

	if(isset($_SESSION['s_id']) && $_SESSION['logged'] == true) {
		//include('')
    } else {
        echo '<script type="text/javascript">';
		echo 'if(!alert("กรุณาเข้าสู่ระบบก่อน (หากพบปัญหา โปรดติดต่อผู้ดูแลระบบ)")) document.location = "/cbl/home/index.html";';
		echo '</script>';
    }
?>

<html>

<head>
	<title>เครื่องมือ - Database Management with PHP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

    <script type="text/javascript">
        var btn = $('#button');

        $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
        });

        btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
        });
    </script>
</head>

<body>
	<div class="wrapper d-flex align-items-stretch">
		<!-- include sidebar -->
        <?php include ('sidebar_user.php'); ?>

		<!-- Page Content  -->
		<div id="content" class="p-4 p-md-5 pt-5">
			<h2 class="mb-4">เครื่องมือที่ใช้ในการเรียน</h2>

            <!-- VS Code -->
			<h4>Visual Studio Code</h4>
            <h6>เป็นโปรแกรมในการเขียนหรือแก้ไข source code ที่ถูกพัฒนาโดยบริษัท Microsoft สำหรับ Windows, Linux, macOS</h6><br>

            <h5>วิธีการติดตั้ง Visual Studio Code</h5>

            <p>1. เข้าไปที่เว็บไซต์ <a href="https://code.visualstudio.com/download" target="_blank">https://code.visualstudio.com/download</a> และ Download โปรแกรม VS Code โดยเลือกให้ตรงกับ OS ของเครื่องคอมพิวเตอร์</p>
            <img src="/cbl/images/vscode1.png" width="800"><br><br><br>

            <p>2. คลิกเปิดไฟล์เพื่อติดตั้งโปรแกรม เลือก "I accept the agreement" และคลิกปุ่ม "Next >"</p>
            <img src="/cbl/images/vscode2.png" width="400"><br><br><br>

            <p>3. เลือกพื้นที่ในการจัดเก็บโปรแกรม (แนะนำให้ใช้ Default ที่ให้มา) และคลิกปุ่ม "Next >"</p>
            <img src="/cbl/images/vscode3.png" width="400"><br><br><br>

            <p>4. คลิกปุ่ม "Next >"</p>
            <img src="/cbl/images/vscode4.png" width="400"><br><br><br>

            <p>5. เลือก Add to PATH (requires shell restart) จากนั้นให้คลิกปุ่ม "Next >"</p>
            <img src="/cbl/images/vscode5.png" width="400"><br><br><br>

            <p>6. คลิกปุ่ม "Install" เพื่อติดตั้งโปรแกรม</p>
            <img src="/cbl/images/vscode6.png" width="400"><br><br><br>

            <p>7. รอติดตั้งจนเสร็จ</p>
            <img src="/cbl/images/vscode7.png" width="400"><br><br><br>
            
            <p>8. คลิกปุ่ม "Finish" เสร็จสิ้นการติดตั้งโปรแกรม VS Code</p>
            <img src="/cbl/images/vscode8.png" width="400"><br><br><br>

            <p>Visual Studio Code</p>
            <img src="/cbl/images/vscode9.png" width="800"><br><br><br>
            <hr>

            <!-- XAMPP -->
            <h4>XAMPP</h4>
            <h6>เป็นโปรแกรม Apache web server ไว้จำลอง web server เพื่อไว้ทดสอบสคริปหรือเว็บไซต์ในเครื่องของเรา โดยที่ไม่ต้องเชื่อมต่ออินเตอร์เน็ตและไม่ต้องมีค่าใช้จ่ายใด ๆ ง่ายต่อการติดตั้งและใช้งานโปรแกรม XAMPP จะมาพร้อมกับ PHP ภาษาสำหรับพัฒนาเว็บแอพลิเคชั่นที่เป็นที่นิยม, MySQL ฐานข้อมูล, Apache จะทำหน้าที่เป็นเว็บเซิร์ฟเวอร์</h6><br>

            <h5>วิธีการติดตั้ง XAMPP</h5>

            <p>1. เข้าไปที่เว็บไซต์ <a href="https://www.apachefriends.org/index.html" target="_blank">https://www.apachefriends.org/index.html</a> และ Download โปรแกรม XAMPP โดยเลือกให้ตรงกับ OS ของเครื่องคอมพิวเตอร์</p>
            <img src="/cbl/images/xampp1.png" width="800"><br><br><br>

            <p>2. คลิกเปิดไฟล์เพื่อติดตั้งโปรแกรม คลิก "Next >"</p>
            <img src="/cbl/images/xampp2.png" width="400"><br><br><br>

            <p>3. ทำการเลือก Components ที่ต้องการ สำหรับการเรียนในครั้งนี้ ในส่วนของ Server สามารถเลือกเพียงแค่ Apache และ MySQL ได้ และคลิก "Next >"</p>
            <img src="/cbl/images/xampp3.png" width="400"><br><br><br>

            <p>4. เลือก Path ในการติดตั้ง XAMPP (แนะนำให้ใช้ Default ที่ให้มา) และคลิกปุ่ม "Next >"</p>
            <img src="/cbl/images/xampp4.png" width="400"><br><br><br>

            <p>5. คลิกปุ่ม "Next >"</p>
            <img src="/cbl/images/xampp5.png" width="400"><br><br><br>

            <p>6. คลิกปุ่ม "Next >"</p>
            <img src="/cbl/images/xampp6.png" width="400"><br><br><br>

            <p>7. คลิกปุ่ม "Next >"</p>
            <img src="/cbl/images/xampp7.png" width="400"><br><br><br>

            <p>8. รอทำการติดตั้งจนเสร็จ</p>
            <img src="/cbl/images/xampp8.png" width="400"><br><br><br>

            <p>9. คลิก "Finish"</p>
            <img src="/cbl/images/xampp9.png" width="400"><br><br><br>

            <p>คลิก "Start" ในส่วนของ Apache และ MySQL</p>
            <img src="/cbl/images/xampp10.png" width="400"><br><br><br>

            <p>หากมีการขออนุญาต Firewall ให้คลิก "Allow Access"</p>
            <img src="/cbl/images/xampp11.png" width="400"><br><br>
            <img src="/cbl/images/xampp12.png" width="400"><br><br><br>

            <p>ทดลองเข้า phpMyAdmin โดยคลิกที่ "Admin" ของ MySQL หรือเข้าไปที่ <a href="http://localhost/phpmyadmin" target="_blank">http://localhost/phpmyadmin</a></p>
            <img src="/cbl/images/xampp13.png" width="400"><br><br><br>

            <p>phpMyAdmin</p>
            <img src="/cbl/images/xampp14.png" width="800"><br><br><br>
            
            <p>สำหรับ Source Code ต่าง ๆ ในการทำเว็บไซต์ ให้สร้างไว้ที่ C:\xampp\htdocs\</p>
            <img src="/cbl/images/xampp15.png" width="800">
        </div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
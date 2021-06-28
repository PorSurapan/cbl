<!doctype html>

<html lang="th">

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
			<h2 class="mb-4">เนื้อหา</h2>
            <div style="text-align:center;">
			    <p><iframe width="800" height="400" src="https://www.youtube.com/embed/PVT1dsjICiQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
            </div>

            <h4><br>PHP คืออะไร?</h4>
            <h6 style="text-indent: 2.5em;">PHP เป็นคำย่อของ "PHP: Hypertext Preprocessor"</h6>
            <h6 style="text-indent: 2.5em;">PHP เป็นภาษาที่ทำงานในฝั่งของ server</h6>
            <h6 style="text-indent: 2.5em;">PHP script จะถูกประมวลผลบน server</h6>
            <h6 style="text-indent: 2.5em;">PHP รองรับฐานข้อมูลจำนวนมาก (MySQL, Oracle, PostgreSQL)</h6>
            <h6 style="text-indent: 2.5em;">PHP เป็นซอฟต์แวร์ที่ใช้งานฟรี</h6>
            <h6 style="text-indent: 2.5em;">PHP สามารถเขียนอยู่ในแท็ก HTML ได้ด้วยการพิมพ์แท็ก (&#60;?php  ?&#62;)<br><br></h6>  
            
            <h4>การทำงานของ PHP</h4>
            <table align="center">
                <tr>
                    <td>
                        <h6>Client สร้างหรือส่งคำขอไปยัง Web Server</h6>
                        <h6>Web Server ทำการรัน PHP</h6>
                        <h6>PHP ทำการ query ฐานข้อมูลและทำการดึงข้อมูลมาถ้าจำเป็น</h6>
                        <h6>PHP ทำการดาวน์โหลดไฟล์ตัวอื่นถ้าจำเป็น</h6>
                        <h6>ผลลัพธ์ถูกส่งกลับไปยัง client</h6>
                    </td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>
                       <img src="/cbl/images/php.jpg">
                    </td>
            </table>
            <br><br><br>
            <table align="center">
                <tr>
                    <td>
                        <h4>การออกแบบฐานข้อมูล&nbsp;&nbsp;</h4>
                        <h6><a href="index.html">แบบทดสอบก่อนเรียน</a></h6>
                        <h6><a href="index.html">ความรู้เบื้องต้น phpMyAdmin</a></h6>
                        <h6><a href="index.html">แบบทดสอบหลังเรียน</a></h6>
                        &nbsp;
                    </td>
                    
                    <td>
                        <h4>การเชื่อมต่อฐานข้อมูล&nbsp;&nbsp;</h4>
                        <h6><a href="index.html">แบบทดสอบก่อนเรียน</a></h6>
                        <h6><a href="index.html">การเชื่อมต่อฐานข้อมูล</a></h6>
                        <h6><a href="index.html">แบบทดสอบหลังเรียน</a></h6>
                        &nbsp;
                    </td>
                    
                    <td>
                        <h4>การเพิ่มข้อมูล</h4>
                        <h6><a href="index.html">แบบทดสอบก่อนเรียน</a></h6>
                        <h6><a href="index.html">เพิ่มข้อมูลด้วย PHP</a></h6>
                        <h6><a href="index.html">เพิ่มข้อมูลด้วย PHP & AJAX</a></h6>
                        <h6><a href="index.html">แบบทดสอบหลังเรียน</a></h6>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>การแสดงข้อมูล</h4>
                        <h6><a href="index.html">แบบทดสอบก่อนเรียน</a></h6>
                        <h6><a href="index.html">แสดงข้อมูลด้วย PHP</a></h6>
                        <h6><a href="index.html">แสดงข้อมูลด้วย PHP & AJAX</a></h6>
                        <h6><a href="index.html">แบบทดสอบหลังเรียน</a></h6>
                    </td>
                    <td>
                        <h4>การแก้ไขข้อมูล</h4>
                        <h6><a href="index.html">แบบทดสอบก่อนเรียน</a></h6>
                        <h6><a href="index.html">แก้ไขข้อมูลด้วย PHP</a></h6>
                        <h6><a href="index.html">แก้ไขข้อมูลด้วย PHP & AJAX</a></h6>
                        <h6><a href="index.html">แบบทดสอบหลังเรียน</a></h6>
                    </td>
                    <td>
                        <h4>การลบข้อมูลด้วย</h4>
                        <h6><a href="index.html">แบบทดสอบก่อนเรียน</a></h6>
                        <h6><a href="index.html">ลบข้อมูลด้วย PHP</a></h6>
                        <h6><a href="index.html">ลบข้อมูลด้วย PHP & AJAX</a></h6>
                        <h6><a href="index.html">แบบทดสอบหลังเรียน</a></h6>
                    </td>
                </tr>
            </table>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
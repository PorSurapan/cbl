<?php
	session_start();

	if(isset($_SESSION['s_id']) && $_SESSION['s_username'] == 'Admin' && $_SESSION['logged'] == true) {
		// include('');
    } else {
        echo '<script type="text/javascript">';
		echo 'if(!alert("กรุณาเข้าสู่ระบบก่อน (หากพบปัญหา โปรดติดต่อผู้ดูแลระบบ)")) document.location = "/cbl/home/index.html";';
		echo '</script>';
    }
?>

<html lang="th">

<head>
	<title>Dashboard Admin - Database Management with PHP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	
	<div class="wrapper d-flex align-items-stretch">
		<!-- Include sidebar -->
		<?php include('sidebar_admin.php'); ?>

		<!-- Page Content  -->
		<div id="content" class="p-4 p-md-5 pt-5">
			<h2 class="mb-4">Admin Dashboard</h2>
			<br><br>
			<table width="100%">
                <tr>
                    <td>
                        <h4>การออกแบบฐานข้อมูล&nbsp;&nbsp;</h4>
                        <h6><a href="pretest_quiz_design.php">แบบทดสอบก่อนเรียน</a></h6>
                        <h6><a href="posttest_quiz_design.php">แบบทดสอบหลังเรียน</a></h6>
                        &nbsp;
                    </td>
                    <td>
                        <h4>การเชื่อมต่อฐานข้อมูล&nbsp;&nbsp;</h4>
                        <h6><a href="pretest_quiz_connect.php">แบบทดสอบก่อนเรียน</a></h6>
                        <h6><a href="posttest_quiz_connect.php">แบบทดสอบหลังเรียน</a></h6>
                        &nbsp;
                    </td>
                    <td>
                        <h4>การเพิ่มข้อมูล&nbsp;&nbsp;</h4>
                        <h6><a href="pretest_quiz_insert.php">แบบทดสอบก่อนเรียน</a></h6>
                        <h6><a href="posttest_quiz_insert.php">แบบทดสอบหลังเรียน</a></h6>
                        &nbsp;
                    </td>
				</tr>
				<tr>
                    <td>
                        <h4>การแสดงข้อมูล&nbsp;&nbsp;</h4>
                        <h6><a href="pretest_quiz_display.php">แบบทดสอบก่อนเรียน</a></h6>
                        <h6><a href="posttest_quiz_display.php">แบบทดสอบหลังเรียน</a></h6>
                        &nbsp;
                    </td>
                    <td>
                        <h4>การแก้ไขข้อมูล&nbsp;&nbsp;</h4>
                        <h6><a href="pretest_quiz_edit.php">แบบทดสอบก่อนเรียน</a></h6>
                        <h6><a href="posttest_quiz_edit.php">แบบทดสอบหลังเรียน</a></h6>
                        &nbsp;
                    </td>
                    <td>
                        <h4>การลบข้อมูล&nbsp;&nbsp;</h4>
                        <h6><a href="pretest_quiz_insert.php">แบบทดสอบก่อนเรียน</a></h6>
                        <h6><a href="posttest_quiz_insert.php">แบบทดสอบหลังเรียน</a></h6>
                        &nbsp;
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
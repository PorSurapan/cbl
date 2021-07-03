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
	<title>หน้าแรก - Database Management with PHP</title>
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
			<p>หน่วยที่ 6 การลบข้อมูล&nbsp;&nbsp;</p>

			<?php
                $con = mysqli_connect("localhost", "root", "", "studyphp");
                $con->query("SET NAMES UTF8");

                $id = $_SESSION['s_id'];

                // Design
                $sql = "SELECT user_id FROM designpre WHERE id = " . $id;
                $rs = $con->query($sql);
                if(!$rs || mysqli_num_rows($rs) == 0) $d1 = 0;
                else $d1 = 13;
                
                $sql = "SELECT user_id FROM designpost WHERE id = " . $id;
                $rs = $con->query($sql);
                if(!$rs || mysqli_num_rows($rs) == 0) $d2 = 0;
                else $d2 = 13;
                
                // Connect
                $sql = "SELECT user_id FROM connectpre WHERE id = " . $id;
                $rs = $con->query($sql);
                if(!$rs || mysqli_num_rows($rs) == 0) $c1 = 0;
                else $c1 = 13;
                
                $sql = "SELECT user_id FROM connectpost WHERE id = " . $id;
                $rs = $con->query($sql);
                if(!$rs || mysqli_num_rows($rs) == 0) $c2 = 0;
                else $c2 = 13;
                

                // Profile
                $sql = "SELECT * FROM profiles WHERE id = " . $id;
                $rs = $con->query($sql);

                while($row = $rs->fetch_assoc()) {
                    $username = $row['username'];
                    $name = $row['name'];
                    $password = $row['password'];
                }


                $sum = $d1 + $d2 + $c1 + $c2;
                $sql = "UPDATE profiles SET progress = '" . $sum . "%' WHERE id = " . $id;
                mysqli_query($con, $sql);

                $con->close();
            ?>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
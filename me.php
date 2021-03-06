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
	<title>โปรไฟล์ - Database Management with PHP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/snackbar.css">

    <script src="saveEdit.js"></script>

    <script type="text/javascript">
        function showForm() {
            document.getElementById("btnEdit").style.display = "none";
            document.getElementById("form").style.display = "block";
            document.getElementById("btnSave").style.display = "block";
            document.getElementById("btnCancel").style.display = "block";
            document.getElementById("pw").style.display = "none";
            document.getElementById("pwd").style.display = "block";
        }

        function hideForm() {
            document.getElementById("form").style.display = "none";
            document.getElementById("btnEdit").style.display = "block";
            document.getElementById("pw").style.display = "block";
            document.getElementById("pwd").style.display = "none";
        }
    </script>
</head>

<body>
	
	<div class="wrapper d-flex align-items-stretch">
		<!-- Include sidebar -->
		<?php include('sidebar_user.php'); ?>

		<!-- Page Content  -->
		<div id="content" class="p-4 p-md-5 pt-5">
			<h2 class="mb-4">ยินดีต้อนรับ</h2>

            <!-- Connect DB -->
            <?php
                $con = mysqli_connect("localhost", "root", "", "studyphp");
                $con->query("SET NAMES UTF8");

                $id = $_SESSION['s_id'];

                // Profile
                $sql = "SELECT * FROM profiles WHERE id = " . $id;
                $rs = $con->query($sql);

                while($row = $rs->fetch_assoc()) {
                    $username = $row['username'];
                    $name = $row['name'];
                    $password = $row['password'];
                }

                $con->close();
            ?>

            <table width="100%">
                <tr>
                    <td><h4>Username: </h4></td>
                    <td><h4><?php echo $username ?></h4></td>
                </tr>
                <tr>
                    <td><h4>Name: </h4></td>
                    <td><h4><?php echo $name ?></h4></td>
                </tr>
                <tr>
                    <td><h4>Password: </h4></td>
                    <td id="pw"><h4>**********</h4></td>
                    <td id="pwd" style="display: none"><h4><?php echo $password ?></h4></td>
                </tr>
                <tr>
                    <td><h4>Progress: </h4></td>
                    <td><h4><?php echo $sum . "%" ?></h4></td>
                </tr>
            </table>

            <button class="button2" id="btnEdit" type="button" onclick="showForm();">แก้ไขโปรไฟล์</button>
            <br><br>

            <form method="post" id="form" style="display: none">
                <table width="100%">
                    <tr>
                        <td><h5>Username: </h5></td>
                        <td><input id="username" name="username" type="text" value="<?php echo $username ?>" placeholder="Username" required></td>
                    </tr>
                    <tr>
                        <td><h5>Name: </h5></td>
                        <td><input id="fname" name="fname" type="text" value="<?php echo $name ?>" placeholder="Full Name" required></td>
                    </tr>
                    <tr>
                        <td><h5>Password: </h5></td>
                        <td><input id="password" name="password" type="password" placeholder="Password" required></td>
                    </tr>
                    <tr>
                        <input id="uid" name="uid" type="hidden" value="<?php echo $_SESSION['s_id'] ?>">
                        <td><button class="button3" id="btnSave" type="button" onclick="saveEdit(uid.value, username.value, fname.value, password.value);" style="display: none">บันทึก</button></td>
                        <td><button class="button4" id="btnCancel" type="button" onclick="hideForm(); hidden">ยกเลิก</button></td>
                    </tr>
                </table>
        
            </form>
            <br>
			
            <!-- Table -->
            <div class="container">        
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>เนื้อหา</th>
                            <th>แบบทดสอบก่อนเรียน</th>
                            <th>แบบทดสอบหลังเรียน</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>การออกแบบฐานข้อมูล</td>
                            <td><?php echo $design1 ?></td>
                            <td><?php echo $design2 ?></td>
                        </tr>
                        <tr>
                            <td>การเชื่อมต่อฐานข้อมูล</td>
                            <td><?php echo $connect1 ?></td>
                            <td><?php echo $connect2 ?></td>
                        </tr>
                        <tr>
                            <td>การเพิ่มข้อมูล</td>
                            <td><?php echo $insert1 ?></td>
                            <td><?php echo $insert2 ?></td>
                        </tr>
                        <tr>
                            <td>การแสดงข้อมูล</td>
                            <td><?php echo $display1 ?></td>
                            <td><?php echo $display2 ?></td>
                        </tr>
                        <tr>
                            <td>การแก้ไขข้อมูล</td>
                            <td><?php echo $edit1 ?></td>
                            <td><?php echo $edit2 ?></td>
                        </tr>
                        <tr>
                            <td>การลบข้อมูล</td>
                            <td><?php echo $delete1 ?></td>
                            <td><?php echo $delete2 ?></td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th>เนื้อหา</th>
                            <th>สถานะ</th>
                            <th>คะแนน</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>แบบทดสอบท้ายการเรียน</td>
                            <td><?php echo $final ?></td>
                            <td><?php echo $point ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="snackbar">ยังกรอกข้อมูลไม่ครบ</div>
            <div id="snackbar_fails">ระบบเกิดข้อผิดพลาด</div>

		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
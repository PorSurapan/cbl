<?php
	session_start();

	if(isset($_SESSION['s_username']) && $_SESSION['logged'] == true) {
		//include('')
    } else {
        echo '<script type="text/javascript">';
		echo 'if(!alert("กรุณาเข้าสู่ระบบก่อน (หากพบปัญหา โปรดติดต่อผู้ดูแลระบบ)")) document.location = "/cbl/home/index.html";';
		echo '</script>';
    }
?>

<html lang="th">

<head>
	<title>All Learners</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/dashboard.css">
	<script src="searchUser.js"></script>
</head>

<body>
	
	<div class="wrapper d-flex align-items-stretch">
		<nav id="sidebar">

			<div class="custom-menu">
				<button type="button" id="sidebarCollapse" class="btn btn-primary">
					<i class="fa fa-bars"></i>
					<span class="sr-only">Toggle Menu</span>
				</button>
			</div>

			<div class="p-4 pt-5">
				<h3><a href="index.html" class="logo">Admin Dashboard</a></h3>

				<ul class="list-unstyled components mb-5">

					<!-- Profile -->
					<li class="active">
						<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">ภาพรวม</a>
						
						<ul class="collapse list-unstyled" id="homeSubmenu">
							<li>
								<a href="all_learner.php">ผู้เรียนทั้งหมด</a>
							</li>
                            <li>
								<a href="#">สถิติ</a>
							</li>
						</ul>
					</li>

					<!-- Database design -->
					<li>
						<a href="#pageSubmenuDB" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">การออกแบบฐานข้อมูล</a>
						
						<ul class="collapse list-unstyled" id="pageSubmenuDB">
							<li>
								<a href="#">แบบทดสอบก่อนเรียน</a>
							</li>
							<li>
								<a href="#">แบบทดสอบหลังเรียน</a>
							</li>
							<li>
								<a href="#">ภาพรวม</a>
							</li>
						</ul>
					</li>

					<!-- Connect to db -->
					<li>
						<a href="#pageSubmenuConn" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">การเชื่อมต่อฐานข้อมูล</a>
						
						<ul class="collapse list-unstyled" id="pageSubmenuConn">
                            <li>
								<a href="#">แบบทดสอบก่อนเรียน</a>
							</li>
							<li>
								<a href="#">แบบทดสอบหลังเรียน</a>
							</li>
							<li>
								<a href="#">ภาพรวม</a>
							</li>
						</ul>
					</li>

					<!-- Add data to db -->
					<li>
						<a href="#pageSubmenuAdd" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">การเพิ่มข้อมูล</a>
						
						<ul class="collapse list-unstyled" id="pageSubmenuAdd">
                            <li>
								<a href="#">แบบทดสอบก่อนเรียน</a>
							</li>
							<li>
								<a href="#">แบบทดสอบหลังเรียน</a>
							</li>
							<li>
								<a href="#">ภาพรวม</a>
							</li>
						</ul>
					</li>

					<!-- Show data from db -->
					<li>
						<a href="#pageSubmenuShow" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">การแสดงข้อมูล</a>
						
						<ul class="collapse list-unstyled" id="pageSubmenuShow">
                            <li>
								<a href="#">แบบทดสอบก่อนเรียน</a>
							</li>
							<li>
								<a href="#">แบบทดสอบหลังเรียน</a>
							</li>
							<li>
								<a href="#">ภาพรวม</a>
							</li>
						</ul>
					</li>

					<!-- Edit data in db -->
					<li>
						<a href="#pageSubmenuEdit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">การแก้ไขข้อมูล</a>
						
						<ul class="collapse list-unstyled" id="pageSubmenuEdit">
                            <li>
								<a href="#">แบบทดสอบก่อนเรียน</a>
							</li>
							<li>
								<a href="#">แบบทดสอบหลังเรียน</a>
							</li>
							<li>
								<a href="#">ภาพรวม</a>
							</li>
						</ul>
					</li>

					<!-- Delete data in db -->
					<li>
						<a href="#pageSubmenuDel" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">การลบข้อมูลด้วย</a>
						
						<ul class="collapse list-unstyled" id="pageSubmenuDel">
                            <li>
								<a href="#">แบบทดสอบก่อนเรียน</a>
							</li>
							<li>
								<a href="#">แบบทดสอบหลังเรียน</a>
							</li>
							<li>
								<a href="#">ภาพรวม</a>
							</li>
						</ul>
					</li>

					<!-- Final test -->
					<li>
						<a href="#">แบบทดสอบท้ายการเรียน</a>
					</li>

					<!-- Logout -->
					<li>
                        <a href="/cbl/home/logout.php">ออกจากระบบ</a></li>
					</li>
				</ul>

				<!-- Not use -->
				<!-- <div class="mb-5">
					<h3 class="h6">Subscribe for newsletter</h3>
					<form action="#" class="colorlib-subscribe-form">
						<div class="form-group d-flex">
							<div class="icon"><span class="icon-paper-plane"></span></div>
							<input type="text" class="form-control" placeholder="Enter Email Address">
						</div>
					</form>
				</div> -->
				

				<div class="footer">
					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script>
						All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by 
						<a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>

			</div>
		</nav>

		<!-- Page Content  -->
		<div id="content" class="p-4 p-md-5 pt-5">
			<h2 class="mb-4">ผู้เรียนทั้งหมด</h2>

            <!-- Search and Sort -->
            <?php
                if(isset($_GET["searchUser"]))
                    $search = $_GET['searchUser'];
                else
                    $search = "";

                if(isset($_POST["sort"]))
                    $sort = $_POST['sort'];
                else
                    $sort = "ใหม่สุดก่อน";
            ?>

            <table width="80%">
                <tr>
                    <form action="all_dashboard.php" method="get">
                        <td>
                            <b>ค้นหาชื่อ </b>
                            <input list="word" name="searchUser" placeholder="กรอกคำค้น" onkeyup="searchUser(this.value)" />
                            <datalist id="word"></datalist>
                            <input class="button button1" type="submit" value="ค้นหา">
                        </td>
                    </form>

                    <form action="all_dashboard.php" method="get">
                        <td>
                            <b>เรียงตาม </b>
                            <select name="sort" id="sort" onchange="this.form.submit()">
                                <!-- <option value="<?php echo $sort ?>" selected hidden><?php echo $sort ?></option> -->
                                <option value="ชื่อผู้ใช้">เรียงตามผู้ลงทะเบียนล่าสุด</option>
                                <option value="ชื่อผู้ใช้">เรียงตามผู้ลงทะเบียนเก่าสุด</option>
                                <option value="ชื่อผู้ใช้">เรียงตามตัวอักษร (ชื่อผู้ใช้)</option>
                                <option value="ชื่อ">เรียงตามตัวอักษร (ชื่อ - นามสกุล)</option>
                                <option value="ความคืบหน้า">เรียงตามความคืบหน้า</option>
                            </select>
                        </td>
                    </form>
                </tr>
            </table>

            <!-- Table -->
            <div class="container">        
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ชื่อผู้ใช้</th>
                            <th>ชื่อ - นามสกุล</th>
                            <th>ความคืบหน้า</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- Connect DB -->
                        <?php
                            $con = mysqli_connect("localhost", "root", "", "studyphp");
                            $con->query("SET NAMES UTF8");
                            $sql = "SELECT * FROM profiles WHERE id != 1";
                            $rs = $con->query($sql);

                            while($row = $rs->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['username'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['process'] . "</td>";
                                echo "</tr>";
                            }
                            
                            $con->close();
                        ?>
                    </tbody>
                </table>
            </div>

		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
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
	<title>All Learners</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

    <link rel="stylesheet" href="css/dashboard.css">
	<script src="searchUser.js"></script>
</head>

<body>
	
	<div class="wrapper d-flex align-items-stretch">
		<!-- Include sidebar -->
		<?php include('sidebar_admin.php'); ?>

		<!-- Page Content  -->
		<div id="content" class="p-4 p-md-5 pt-5">
			<h2 class="mb-4">ผู้เรียนทั้งหมด</h2>

            <!-- Search and Sort -->
            <?php
				if(isset($_GET["user"]))
					$user = $_GET['user'];
				else
					$user = "ชื่อผู้ใช้";

                if(isset($_GET["search"]))
                    $search = $_GET['search'];
                else
                    $search = "";

                if(isset($_POST["sort"]))
                    $sort = $_POST['sort'];
                else
                    $sort = "เรียงตามผู้ลงทะเบียนล่าสุด";
            ?>

            <table width="100%">
                <tr>
                    <form action="all_learner.php" method="get">
                        <td>
                            <b>ค้นหาชื่อ </b>
                            <input list="word" name="search" placeholder="กรอกคำค้น" onkeyup="searchUser(this.value)" />
                            <datalist id="word">
							</datalist>
                            <input class="button button1" type="submit" value="ค้นหา">
                        </td>
                    </form>

                    <form name="form" action="all_learner.php" method="post">
                        <td>
                            <b>เรียงตาม </b>
                            <select name="sort" id="sort" onchange="this.form.submit()">
                                <option value="<?php echo $sort ?>" selected hidden><?php echo $sort ?></option>
                                <option value="เรียงตามผู้ลงทะเบียนล่าสุด">เรียงตามผู้ลงทะเบียนล่าสุด</option>
                                <option value="เรียงตามผู้ลงทะเบียนเก่าสุด">เรียงตามผู้ลงทะเบียนเก่าสุด</option>
                                <option value="เรียงตามตัวอักษร (ชื่อผู้ใช้)">เรียงตามตัวอักษร (ชื่อผู้ใช้)</option>
                                <option value="เรียงตามตัวอักษร (ชื่อ - นามสกุล)">เรียงตามตัวอักษร (ชื่อ - นามสกุล)</option>
                                <option value="เรียงตามความคืบหน้า">เรียงตามความคืบหน้า</option>
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

							if($search == "")
							{
								if($sort == "เรียงตามผู้ลงทะเบียนล่าสุด")
									$sql = "SELECT * FROM profiles WHERE id != 1 ORDER BY id DESC";
								else if($sort == "เรียงตามผู้ลงทะเบียนเก่าสุด")
									$sql = "SELECT * FROM profiles WHERE id != 1 ORDER BY id ASC";
								else if($sort == "เรียงตามตัวอักษร (ชื่อผู้ใช้)")
									$sql = "SELECT * FROM profiles WHERE id != 1 ORDER BY username";
								else if($sort == "เรียงตามตัวอักษร (ชื่อ - นามสกุล)")
									$sql = "SELECT * FROM profiles WHERE id != 1 ORDER BY name";
								else
									$sql = "SELECT * FROM profiles WHERE id != 1 ORDER BY process DESC";
							}
							else
							{
								$sql = "SELECT * FROM profiles WHERE (id != 1) AND (username LIKE '%$search%' OR name LIKE '%$search%')";
							}
							
                            $rs = $con->query($sql);

                            while($row = $rs->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['username'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['progress'] . "</td>";
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
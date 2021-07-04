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
	<title>สถิติ - Database Management with PHP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
	
	<div class="wrapper d-flex align-items-stretch">
		<!-- Include sidebar -->
		<?php include('sidebar_admin.php'); ?>

		<!-- Page Content  -->
		<div id="content" class="p-4 p-md-5 pt-5">
            <!-- php -->
            <?php include('staticDatabase.php'); ?>
            
			<h2 class="mb-4">สถิติ</h2>
            <h4>จำนวนผู้เรียนทั้งหมด <?php echo $allUser ?> คน</h4>
            <br><hr>

            <!-- graph -->
            <?php include('staticGraph.php'); ?>
            
            <table width="100%">
                <tr>
                    <td><div id="piechart_designpre"></div></td>
                    <td><div id="piechart_designpost"></div></td>
                </tr>
            </table>
            <hr>
            <table width="100%">
                <tr>
                    <td><div id="piechart_connectpre"></div></td>
                    <td><div id="piechart_connectpost"></div></td>
                </tr>
            </table>
            <hr>
            <table width="100%">
                <tr>
                    <td><div id="piechart_insertpre"></div></td>
                    <td><div id="piechart_insertpost"></div></td>
                </tr>
            </table>
            <hr>
            <table width="100%">
                <tr>
                    <td><div id="piechart_displaypre"></div></td>
                    <td><div id="piechart_displaypost"></div></td>
                </tr>
            </table>
            <hr>
            <table width="100%">
                <tr>
                    <td><div id="piechart_editpre"></div></td>
                    <td><div id="piechart_editpost"></div></td>
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
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
			<h2 class="mb-4">การลบข้อมูลด้วย PHP</h2>
            <div style="text-align:center;">
			<!-- ใส่คลิป  -->
			    <p><iframe width="860" height="465" src="https://www.youtube.com/embed/_J3m3g-EDxE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
            </div>

			<br><br><hr>
            <h2 class="mb-4">Source Code</h2>

            <h4>PHP</h4>
			<a href="/cbl/images/delete/form_del.php" download>form_del.php</a><br>
			<a href="/cbl/images/delete/save_del.php" download>save_del.php</a><br><br>
			<h4>PHP & Javascript AJAX</h4>
			<a href="/cbl/images/delete/form_del_ajax.php" download>form_del_ajax.php</a><br>
			<a href="/cbl/images/delete/del_ajax.php" download>del_ajax.php</a><br>
			<a href="/cbl/images/delete/ajax_del.js" download>ajax_del.js</a><br>
			<a href="/cbl/images/delete/save_del_edit.js" download>save_del_edit.php</a>


           

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
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

<html>

<head>
    <title>Computer-Based Learning</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="quiz.js"></script>
</head>

<body>
    <div class="wrapper d-flex align-items-stretch">
        <!-- include sidebar -->
        <?php include ('sidebar_user.php'); ?>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4">แบบทดสอบก่อนเรียน</h2>
        

            <form id="quiz" name="quiz">
               
                <h5><br>เขียนคำสั่ง SQL ที่ถูกต้องเพื่อสร้างฐานข้อมูลใหม่ที่ชื่อว่า testDB<br><br></h5>
                <input type="text" id="textbox1" name="question1"> ;
                <br><br>
                
                <h5><br>เขียนคำสั่ง SQL ที่ถูกต้องเพื่อสร้างตารางใหม่ที่ชื่อว่า Persons.<br><br></h5>
                <input type="text" id="textbox2" name="question2"> (
                <h6><br>PersonID int,</h6>
                <h6><br>Lastname varchar(255),</h6>
                <h6><br>Firstname varchar(255),</h6>
                <h6><br>Address varchar(255),<br><br></h6>
                

                <h5><br>เลือกคำสั่ง SQL ที่ถูกต้องเพื่อลบฐานข้อมูลที่ชื่อ testDB<br><br></h5>
                <input type = "radio" name = "question3" value = "DROP DATABASE testDB"> DROP DATABASE testDB<br><br>
                <input type = "radio" name = "question3" value = "DELETE DATABASE testDB"> DELETE DATABASE testDB<br><br>
                <input type = "radio" name = "question3" value = "DESTROY DATABASE testDB"> DESTROY DATABASE testDB<br><br>
                <input type = "radio" name = "question3" value = "CLOSE DATABASE testDB"> CLOSE DATABASE testDB<br><br>
                <p id="checkQ3"></p>
                <br><br>

                <input class="button" type="button" id="button" value="ยืนยันคำตอบ" onclick="check();">
            </form>
            
            <div id="after_submit">
                <h4 id="number_correct"></h4>
            </div>
        </div>
        </div>       
           
    </body>

    <script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
    
</body>
</html>
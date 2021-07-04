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

<html id="top">

<head>
    <title>Pre-Test การเชื่อมต่อฐานข้อมูล - Database Management with PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/snackbar.css">

    <script src="connect_quiz.js"></script>
    <script src="save_quiz_connect.js"></script>

    <script type="text/javascript">
        function showBT() {
            document.getElementById("resetQuiz").style.visibility = "visible";
        }

        function formReset() {
            document.getElementById("quiz").reset();
            document.getElementById("textBox1").style.color = "black";
            document.getElementById("textBox2").style.color = "black";
            document.getElementById("textBox3").style.color = "black";
            document.getElementById("textBox4").style.color = "black";

            str = "";
            document.getElementById("checkQ1").innerHTML = str;
            document.getElementById("checkQ2").innerHTML = str;
            document.getElementById("checkQ3").innerHTML = str;
            document.getElementById("checkQ4").innerHTML = str;
            document.getElementById("checkQ5").innerHTML = str;
            document.getElementById("checkQ6").innerHTML = str;
            document.getElementById("checkQ7").innerHTML = str;
            document.getElementById("checkQ8").innerHTML = str;
            document.getElementById("checkQ9").innerHTML = str;

            document.getElementById("resetQuiz").style.visibility = "hidden";
            document.getElementById("after_submit").style.visibility = "hidden";
        }
    </script>
</head>

<body>
    <div class="wrapper d-flex align-items-stretch">
        <!-- include sidebar -->
        <?php include ('sidebar_user.php'); ?>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4" id="top">แบบทดสอบก่อนเรียน - การเชื่อมต่อฐานข้อมูล</h2>
            <p>ในการทำแบบทดสอบครั้งแรก ระบบจะบันทึกคะแนนอัตโนมัติ</p>

            <form id="quiz" name="quiz">
               
                <h5><br>1) จงเขียนคำส้ั่งที่ถูกต้องเพื่อเชื่อมต่อไปยัง Host "localhost"<br></h5>
                <h5><br>2) จงเขียนคำส้ั่งที่ถูกต้องเพื่อทำการเชื่อมต่อฐานข้อมูลที่ชื่อว่า studyphp<br></h5>
                <h5><br>3) จงเขียนคำส้ั่งที่ถูกต้องเพื่อเลือกชุดอักขระภาษาไทย เป็น UTF8<br></h5>
                <h5><br>4) จงเขียนคำส้ั่งที่ถูกต้องเพื่อปิดการเชื่อมต่อฐานข้อมูล<br><br></h5>
                <h6>&#60;?php<br><br></h6>
                <h6 style="text-indent: 2.5em;">&#36;con = mysqli_connect(" <input type="text" id="textBox1" name="question1" placeholder="ข้อที่ 1"><span id="checkQ1"></span> ", "root", "");</h6>
                <h6 style="text-indent: 2.5em;">if(!$con){<br><br></h6>
                <h6 style="text-indent: 5em;">die("Could not connect: " . mysqli_error());</h6>
                <h6 style="text-indent: 2.5em;">{</h6>
                <h6 style="text-indent: 2.5em;">mysqli_select_db($con," <input type="text" id="textBox2" name="question2" placeholder="ข้อที่ 2"><span id="checkQ2"></span> ");<br><br></h6>
                <h6 style="text-indent: 2.5em;">$con->query(" <input type="text" id="textBox3" name="question3" placeholder="ข้อที่ 3"><span id="checkQ3"></span> ");<br><br></h6>
                <h6 style="text-indent: 2.5em;">mysqli_<input type="text" id="textBox4" name="question4" placeholder="ข้อที่ 4"><span id="checkQ4"></span>($con);<br><br>?></h6>
                <br><br>
                
                <h5><br>5) ข้อใดเป็นการเลือกชุดอักขระภาษาไทยสำหรับการใช้ฐานข้อมูล MySQL<br><br></h5>
                <input type = "radio" name = "question5" value = "latin1"> latin1<br><br>
                <input type = "radio" name = "question5" value = "utf8"> utf8<br><br>
                <input type = "radio" name = "question5" value = "tis620"> tis620<br><br>
                <input type = "radio" name = "question5" value = "utf16"> utf16<br><br>
                <p id="checkQ5"></p>
                <br>

                <h5><br>6) ข้อใดเป็น username ในฐานข้อมูล MySQL<br><br></h5>
                <input type = "radio" name = "question6" value = "sa"> sa<br><br>
                <input type = "radio" name = "question6" value = "sys"> sys<br><br>
                <input type = "radio" name = "question6" value = "root"> root<br><br>
                <input type = "radio" name = "question6" value = "system"> system<br><br>
                <p id="checkQ6"></p>
                <br>

                <h5><br>7) ฟังก์ชันใดทำหน้าที่ในการเชื่อมต่อฐานข้อมูล<br><br></h5>
                <input type = "radio" name = "question7" value = "mysqli_select_db"> mysqli_select_db<br><br>
                <input type = "radio" name = "question7" value = "mysqli_query"> mysqli_query<br><br>
                <input type = "radio" name = "question7" value = "mysqli_connect"> mysqli_connect<br><br>
                <input type = "radio" name = "question7" value = "mysqli_close"> mysqli_close<br><br>
                <p id="checkQ7"></p>
                <br>

                <h5><br>8) ฟังก์ชันใดใช้เพื่อเปลี่ยนฐานข้อมูลเริ่มต้นสำหรับการเชื่อมต่อ<br><br></h5>
                <input type = "radio" name = "question8" value = "mysqli_choose_db"> mysqli_choose_db<br><br>
                <input type = "radio" name = "question8" value = "mysqli_use_db"> mysqli_use_db<br><br>
                <input type = "radio" name = "question8" value = "mysqli_db_query"> mysqli_db_query<br><br>
                <input type = "radio" name = "question8" value = "mysqli_select_db"> mysqli_select_db<br><br>
                <p id="checkQ8"></p>
                <br>

                <h5><br>9) ฟังก์ชัน mysqli_error ทำหน้าที่ใดในการเชื่อมต่อฐานข้อมูล<br><br></h5>
                <input type = "radio" name = "question9" value = "ฟังก์ชันในการปิดการเชื่อมต่อฐานข้อมูล"> ฟังก์ชันในการปิดการเชื่อมต่อฐานข้อมูล<br><br>
                <input type = "radio" name = "question9" value = "ฟังก์ชันในการส่งคืนคำอธิบายข้อผิดพลาด"> ฟังก์ชันในการส่งคืนคำอธิบายข้อผิดพลาด<br><br>
                <input type = "radio" name = "question9" value = "ฟังก์ชันในการส่งคืนรหัสข้อผิดพลาด"> ฟังก์ชันในการส่งคืนรหัสข้อผิดพลาด<br><br>
                <input type = "radio" name = "question9" value = "ฟังก์ชันเพื่อดำเนินการแก้ไขข้อบกพร่อง"> ฟังก์ชันเพื่อดำเนินการแก้ไขข้อบกพร่อง<br><br>
                <p id="checkQ9"></p>
                <br>
                
                <a href="#after_submit">
                    <input class="button" type="button" id="button" value="ยืนยันคำตอบ" onclick="check();showBT();savePoint(user_id.value, point.value);">
                </a>
                <div id="reset_quiz">
                    <a href="#top">
                        <input class="reset" type="button" id="resetQuiz" value="เริ่มทำใหม่" onclick="formReset();">
                    </a>
                </div>
            </form>
            
            <div id="snackbar_success">บันทึกคะแนนแล้ว</div>
            <div id="snackbar">ทำแบบทดสอบนี้ไปแล้ว ระบบไม่บันทึกคะแนน</div>
            
            <div id="after_submit">
                <h4 id="number_correct"></h4>
            </div>
            <input type="hidden" id="point" name="point" value="">
            <input type="hidden" id="user_id" name="user_id" value="<?php echo $_SESSION['s_id']; ?>">
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
    
</body>
</html>
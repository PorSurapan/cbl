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
    <title>Pre-Test การเพิ่มข้อมูล - Database Management with PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/snackbar.css">

    <script src="insert_quiz.js"></script>
    <script src="save_quiz_insert.js"></script>

    <script type="text/javascript">
        function showBT() {
            document.getElementById("resetQuiz").style.visibility = "visible";
        }

        function formReset() {
            document.getElementById("quiz").reset();
            document.getElementById("textBox11").style.color = "black";
            document.getElementById("textBox12").style.color = "black";
            document.getElementById("textBox13").style.color = "black";
            document.getElementById("textBox14").style.color = "black";
            document.getElementById("textBox21").style.color = "black";
            document.getElementById("textBox22").style.color = "black";
            document.getElementById("textBox23").style.color = "black";
            document.getElementById("textBox24").style.color = "black";
        

            str = "";
            document.getElementById("checkQ11").innerHTML = str;
            document.getElementById("checkQ12").innerHTML = str;
            document.getElementById("checkQ13").innerHTML = str;
            document.getElementById("checkQ14").innerHTML = str;
            document.getElementById("checkQ21").innerHTML = str;
            document.getElementById("checkQ22").innerHTML = str;
            document.getElementById("checkQ23").innerHTML = str;
            document.getElementById("checkQ24").innerHTML = str;
            document.getElementById("checkQ3").innerHTML = str;
            document.getElementById("checkQ4").innerHTML = str;
            document.getElementById("checkQ5").innerHTML = str;
            document.getElementById("checkQ6").innerHTML = str;

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
            <h2 class="mb-4" id="top">แบบทดสอบก่อนเรียน</h2>
            <p>ในการทำแบบทดสอบครั้งแรก ระบบจะบันทึกคะแนนอัตโนมัติ</p>
        

            <form id="quiz" name="quiz">
               
                <h5><br>1) จงเขียนคำสั่งที่ถูกต้องเพื่อเพิ่มข้อมูลไปยังตาราง profiles <br><br></h5>
                <h6 style="text-indent: 2.5em;">$sql = " <input type="text" id="textBox11" name="question11"><span id="checkQ11"></span> INTO profiles (firstname, lastname, email)</h6>
                <h6 style="text-indent: 2.5em;"><input type="text" id="textBox12" name="question12"><span id="checkQ12"></span> ('John', 'Doe', 'john@gmail.com')";<br><br></h6>
                <h6 style="text-indent: 4em;">$result = mysqli_query($con, <input type="text" id="textBox13" name="question13"><span id="checkQ13"></span>);</h6> 
                <h6 style="text-indent: 2.5em;">if(!<input type="text" id="textBox14" name="question14"><span id="checkQ14"></span>){</h6> 
                <h6 style="text-indent: 4em;">echo "Record add successfully";</h6>
                <br><br>

                <h5><br>2) จงเขียนคำสั่งฟังก์ชัน gender() เพื่อรับค่าเพศให้ทำงานได้อย่างสมบูรณ์<br><br></h5>
                <h6>function gender(str)<br><br>{</h6>
                <h6 style="text-indent: 2.5em;">createXMLHttpRequest();</h6>
                <h6 style="text-indent: 2.5em;">xmlHttp.onreadystatechange = stateChange;<br></h6>
                <h6  style="text-indent: 2.5em;">var <input type="text" id="textBox21" name="question21"><span id="checkQ21"></span> = "gender.php";</h6>
                <h6  style="text-indent: 2.5em;">url = url + "?gender=" + <input type="text" id="textBox22" name="question22"><span id="checkQ22"></span>;</h6>
                <h6  style="text-indent: 2.5em;">xmlHttp.<input type="text" id="textBox23" name="question23"><span id="checkQ23"></span>("GET", url, true);</h6>
                <h6  style="text-indent: 2.5em;">xmlHttp.<input type="text" id="textBox24" name="question24"><span id="checkQ24"></span>(null);</h6>
                <h6>}</h6>
                <br><br>

                <h5><br>3) ฟังก์ชันใดทำหน้าที่แทรกข้อมูลไปยังตารางในฐานข้อมูล<br><br></h5>
                <input type = "radio" name = "question3" value = "mysqli_query"> mysqli_query<br><br>
                <input type = "radio" name = "question3" value = "mysqli_fetch_array"> mysqli_fetch_array<br><br>
                <input type = "radio" name = "question3" value = "mysqli_num_fields"> mysqli_num_fields<br><br>
                <input type = "radio" name = "question3" value = "mysqli_select_db"> mysqli_select_db<br><br>
                <p id="checkQ3"></p>
                <br>

                <h5><br>4) $_POST ใช้รับค่าในแท็กใดของ HTML<br><br></h5>
                <input type = "radio" name = "question4" value = "input"> input<br><br>
                <input type = "radio" name = "question4" value = "form"> form<br><br>
                <input type = "radio" name = "question4" value = "div"> div<br><br>
                <input type = "radio" name = "question4" value = "body"> body<br><br>
                <p id="checkQ4"></p>
                <br>

                <h5><br>5) Object ใดทำหน้าที่ในการติดต่อสื่อสารและรับส่งข้อมูลกับ browser <br><br></h5>
                <input type = "radio" name = "question5" value = "ActiveXObject"> ActiveXObject<br><br>
                <input type = "radio" name = "question5" value = "onreadystatechange"> onreadystatechange<br><br>
                <input type = "radio" name = "question5" value = "responseXML"> responseXML<br><br>
                <input type = "radio" name = "question5" value = "XMLHttpRequest"> XMLHttpRequest<br><br>
                <p id="checkQ5"></p>
                <br>

                <h5><br>6) Object ใดทำหน้าที่ตรวจสอบสถานะการทำงานของการ request<br><br></h5>
                <input type = "radio" name = "question6" value = "ActiveXObject"> ActiveXObject<br><br>
                <input type = "radio" name = "question6" value = "onreadystatechange"> onreadystatechange<br><br>
                <input type = "radio" name = "question6" value = "responseXML"> responseXML<br><br>
                <input type = "radio" name = "question6" value = "XMLHttpRequest"> XMLHttpRequest<br><br>
                <p id="checkQ6"></p>
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
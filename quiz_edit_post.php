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
    <title>Post-Test การแก้ไขข้อมูล - Database Management with PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/snackbar.css">

    <script src="edit_quiz.js"></script>
    <script src="save_quiz_edit_post.js"></script>

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
            <h2 class="mb-4" id="top">แบบทดสอบหลังเรียน - การแก้ไขข้อมูล</h2>
            <p>ในการทำแบบทดสอบครั้งแรก ระบบจะบันทึกคะแนนอัตโนมัติ</p>
        
            <form id="quiz" name="quiz">
               
                <h5><br>1) เขียนคำสั่งที่ถูกต้องเพื่อเลือกข้อมูลและแก้ไขข้อมูลในฐานข้อมูล studyphp<br><br></h5>
                <h6>&#60;?php<br></h6>
                <h6 style="text-indent: 2.5em;">$con = mysqli_connect('localhost', 'root', '  ' , 'studyphp');</h6> 
                <h6 style="text-indent: 2.5em;">$sql = " <input type="text" id="textBox11" name="question11"><span id="checkQ11"></span> profiles <input type="text" id="textBox12" name="question12"><span id="checkQ12"></span> username = 'George' WHERE id = 1;</h6>
                <h6 style="text-indent: 2.5em;">if ($con->query( <input type="text" id="textBox13" name="question13"><span id="checkQ13"></span> ) == TRUE) {</h6>
                <h6 style="text-indent: 5em;">echo "Record updated successfully";</h6>
                <h6 style="text-indent: 2.5em;">} else {</h6> 
                <h6 style="text-indent: 5em;">echo "Error updating record: " . $ <input type="text" id="textBox14" name="question14"><span id="checkQ14"></span> ->error;<br>
                <h6 style="text-indent: 2.5em;">}</h6>
                <h6 style="text-indent: 2.5em;">$con->close();<br>?></h6>
                <br><br>

                <h5><br>2) เขียนคำสั่งที่ถูกต้องเพื่อส่งค่าตัวแปร id, name, age, gender ไปแก้ไขใน saveData.php<br><br></h5>
                <h6>function editData(id, name, age, gender)</h6>
                <h6>{<br></h6>
                <h6 style="text-indent: 2.5em;">createXMLHttpRequest();<br></h6>
                <h6 style="text-indent: 2.5em;">xmlHttp.onreadystatechange = stateChange;<br></h6>
                <h6 style="text-indent: 2.5em;">var url = " <input type="text" id="textBox21" name="question21"><span id="checkQ21"></span> ";</h6>
                <h6 style="text-indent: 2.5em;">url = url + "<input type="text" id="textBox22" name="question22"><span id="checkQ22"></span>" + id + "<input type="text" id="textBox23" name="question23"><span id="checkQ23"></span>" + name + "&age=" + age + "&gender=" + gender;</h6>
                <h6 style="text-indent: 2.5em;">xmlHttp.open("<input type="text" id="textBox24" name="question24"><span id="checkQ24"></span>", url, true);</h6> 
                <h6 style="text-indent: 2.5em;">xmlHttp.send(null);</h6>
                <h6>}</h6>
                <br>
                
                <h5><br>3) ถ้าต้องการแก้ไขข้อมูลทั้งหมดในตารางควรใช้คำสั่ง SQL ใด<br><br></h5>
                <input type = "radio" name = "question3" value = "UPDATE table_name SET column1 = value1, WHERE condition;"> UPDATE table_name SET column1 = value1 WHERE condition;<br><br>
                <input type = "radio" name = "question3" value = "UPDATE table_name PUT column1 = value1, WHERE condition;"> UPDATE table_name PUT column1 = value1, WHERE condition;<br><br>
                <input type = "radio" name = "question3" value = "EDIT table_name SET column1 = value1, WHERE condition;"> EDIT table_name SET column1 = value1, WHERE condition;<br><br>
                <input type = "radio" name = "question3" value = "EDIT table_name PUT column1 = value1, WHERE condition;"> EDIT table_name PUT column1 = value1, WHERE condition;<br><br>
                <p id="checkQ3"></p>
                <br>

                <h5><br>4) เลือกคำสั่ง SQL ที่ถูกต้องเพื่อทำการอัปเดตคอลัมน์ city ทั้งหมดในตาราง customers<br><br></h5>
                <input type = "radio" name = "question4" value = "UPDATE customers SET city = 'Bangkok';"> UPDATE customers SET city = 'Bangkok';<br><br>
                <input type = "radio" name = "question4" value = "UPDATE city = 'Bangkok' SET customers;"> UPDATE city = 'Bangkok' SET customers;<br><br>
                <input type = "radio" name = "question4" value = "UPDATE customers PUT city = 'Bangkok';"> UPDATE customers PUT city = 'Bangkok';<br><br>
                <input type = "radio" name = "question4" value = "UPDATE city = 'Bangkok' PUT customers;"> UPDATE UPDATE city = 'Bangkok' PUT customers;<br><br>
                <p id="checkQ4"></p>
                <br>

                <h5><br>5) เลือกคำสั่ง SQL ที่ถูกต้องเพื่อทำการอัปเดตคอลัมน์ city เป็น Bangkok เมื่อ country เท่ากับ Thailand ในตาราง customers<br><br></h5>
                <input type = "radio" name = "question5" value = "UPDATE customers SET country = 'Thailand' WHERE city = 'Bangkok';"> UPDATE customers SET country = 'Thailand' WHERE city = 'Bangkok';<br><br>
                <input type = "radio" name = "question5" value = "UPDATE customers WHERE country = 'Thailand' SET city = 'Bangkok'; "> UPDATE customers WHERE country = 'Thailand' SET city = 'Bangkok';<br><br>
                <input type = "radio" name = "question5" value = "UPDATE customers SET city = 'Bangkok' WHERE country = 'Thailand';"> UPDATE customers SET city = 'Bangkok' WHERE country = 'Thailand';<br><br>
                <input type = "radio" name = "question5" value = "UPDATE customers WHERE city = 'Bangkok' SET country = 'Thailand';"> UPDATE customers WHERE city = 'Bangkok' SET country = 'Thailand';<br><br>
                <p id="checkQ5"></p>
                <br>

                <h5><br>6) เลือกคำสั่ง SQL ที่ถูกต้องเพื่อทำการอัปเดตคอลัมน์ city และคอลัมน์ country<br><br></h5>
                <input type = "radio" name = "question6" value = "UPDATE customers SET city = 'Bangkok' && country = 'Thailand' WHERE id = 1;"> UPDATE customers SET city = 'Bangkok' && country = 'Thailand' WHERE id = 1;<br><br>
                <input type = "radio" name = "question6" value = "UPDATE customers SET city = 'Bangkok' , country = 'Thailand' WHERE id = 1;"> UPDATE customers SET city = 'Bangkok' , country = 'Thailand' WHERE id = 1;<br><br>
                <input type = "radio" name = "question6" value = "UPDATE customers SET city = 'Bangkok' and country = 'Thailand' WHERE id = 1;"> UPDATE customers SET city = 'Bangkok' and country = 'Thailand' WHERE id = 1;<br><br>
                <input type = "radio" name = "question6" value = "UPDATE customers SET city = 'Bangkok' & country = 'Thailand' WHERE id = 1;"> UPDATE customers SET city = 'Bangkok' & country = 'Thailand' WHERE id = 1;<br><br>
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
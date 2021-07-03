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
    <title>Pre-Test การลบข้อมูล - Database Management with PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/snackbar.css">

    <script src="delete_quiz.js"></script>
    <script src="save_quiz_delete.js"></script>

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
               
                <h5><br>1) เขียนคำสั่งที่ถูกต้องเพื่อเลือกข้อมูลและแสดงข้อมูลในฐานข้อมูลใหม่ที่ชื่อว่า studyphp<br><br></h5>
                <h6>&#60;?php<br></h6>
                <h6 style="text-indent: 2.5em;">$connect = new mysqli('localhost', 'root', '  ' , 'studyphp');</p> 
                <h6 style="text-indent: 2.5em;">$sql = " <input type="text" id="textBox11" name="question11"> <input type="text" id="textBox12" name="question12"> profiles WHERE id = '  1 ';</h6>
                <p id="checkQ11"></p><p id="checkQ12"></p>
                <h6>if ($conn-> <input type="text" id="textBox13" name="question13"> ($sql) == TRUE) {</h6>
                <p id="checkQ13">
                <h6 style="text-indent: 2.5em;">echo "Record updated successfully";</h6>
                <h6>{ else {</h6> 
                <h6 style="text-indent: 2.5em;">echo "Error updating record: " . $conn ->error;<br>}<br>$<input type="text" id="textBox14" name="question14"> ->close();<br>?></h6>
                <p id="checkQ14">
                <br>

                <h5><br>2) เขียนคำสั่งที่ถูกต้องเพื่อใช้ ajax แก้ไขข้อมูลจากไฟล์ delete_ajax.php<br><br></h5>
                <h6>$.ajax({<br></h6>
                <h6 style="text-indent: 2.5em;">url: "delete_ajax.php",</h6>  
                <h6 style="text-indent: 2.5em;">type: "POST",</h6>
                <h6 style="text-indent: 2.5em;">cache: false,</h6>
                <h6 style="text-indent: 2.5em;">data:{</h6>
                <h6 style="text-indent: 3em;">username: $(this).attr("data-username")</h6>
                <h6 style="text-indent: 2.5em;">},</h6>
                <h6 style="text-indent: 2.5em;"><input type="text" id="textBox21" name="question21"> : function(dataResult){</h6>
                <p id="checkQ21"></p>
                <h6 style="text-indent: 3em;">var dataResult = <input type="text" id="textBox22" name="question22"> .parse(dataResult);</h6>
                <p id="checkQ22"></p>
                <h6 style="text-indent: 3em;">if(dataResult. <input type="text" id="textBox23" name="question23"> ==200){</h6>
                <p id="checkQ23"></p>
                <h6 style="text-indent: 3.5em;">$ele.fadeOut(). <input type="text" id="textBox24" name="question24"> ()</h6>
                <p id="checkQ24"></p>
                <h6 style="text-indent: 3em;">}</h6>
                <h6 style="text-indent: 2.5em;">}<br>});</h6>
                <br>
                
                <h5><br>3) เลือกคำสั่ง SQL ที่ถูกต้องเพื่อลบข้อมูลในตาราง<br><br></h5>
                <input type = "radio" name = "question3" value = "SELECT"> SELECT<br><br>
                <input type = "radio" name = "question3" value = "UPDATE"> UPDATE<br><br>
                <input type = "radio" name = "question3" value = "DELETE"> DELETE<br><br>
                <input type = "radio" name = "question3" value = "DROP"> DROP<br><br>
                <p id="checkQ5"></p>
                <br>

                <h5><br>4) ถ้าต้องการลบข้อมูลทั้งหมดในตารางควรใช้คำสั่ง SQL ใด<br><br></h5>
                <input type = "radio" name = "question4" value = "DELETE FROM table_name;"> DELETE FROM table_name;<br><br>
                <input type = "radio" name = "question4" value = "DROP FROM table_name;"> DROP FROM table_name;<br><br>
                <input type = "radio" name = "question4" value = "DELETE IN table_name;"> DELETE IN table_name;<br><br>
                <input type = "radio" name = "question4" value = "DROP IN table_name;"> DROP IN table_name;<br><br>
                <p id="checkQ3"></p>
                <br>

                <h5><br>5) เลือกคำสั่ง SQL ที่ถูกต้องเพื่อทำการลบตาราง customers เมื่อคอลัมน์ country เท่ากับ Thailand<br><br></h5>
                <input type = "radio" name = "question5" value = "DROP IN customers WHERE country = 'Thailand';"> DROP IN customers WHERE country = 'Thailand';<br><br>
                <input type = "radio" name = "question5" value = "DELETE IN customers WHERE country = 'Thailand';"> DELETE IN customers WHERE country = 'Thailand';<br><br>
                <input type = "radio" name = "question5" value = "DROP FROM customers WHERE country = 'Thailand';"> DROP FROM customers WHERE country = 'Thailand';<br><br>
                <input type = "radio" name = "question5" value = "DELETE FROM customers WHERE country = 'Thailand';"> DELETE FROM customers WHERE country = 'Thailand';<br><br>
                <p id="checkQ4"></p>
                <br>

                <h5><br>6) เลือกคำสั่ง SQL ที่ถูกต้องเพื่อลบข้อมูลในตารางที่มีเงื่อนไขสองเงื่อนไข<br><br></h5>
                <input type = "radio" name = "question6" value = "DELETE FROM Customers WHERE country = 'Thailand' AND city = 'Bangkok';"> DELETE FROM Customers WHERE country = 'Thailand' AND city = 'Bangkok';<br><br>
                <input type = "radio" name = "question6" value = "DELETE FROM Customers WHERE country = 'Thailand' , city = 'Bangkok';"> DELETE FROM Customers WHERE country = 'Thailand' , city = 'Bangkok';<br><br>
                <input type = "radio" name = "question6" value = "DELETE FROM Customers WHERE country = 'Thailand' & city = 'Bangkok';"> DELETE FROM Customers WHERE country = 'Thailand' & city = 'Bangkok';<br><br>
                <input type = "radio" name = "question6" value = "DELETE FROM Customers WHERE country = 'Thailand' && city = 'Bangkok';"> DELETE FROM Customers WHERE country = 'Thailand' && city = 'Bangkok';<br><br>
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
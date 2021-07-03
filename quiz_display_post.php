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
    <title>Post-Test การแสดงข้อมูล - Database Management with PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/snackbar.css">

    <script src="display_quiz.js"></script>
    <script src="save_quiz_display_post.js"></script>

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
            <h2 class="mb-4" id="top">แบบทดสอบหลังเรียน</h2>
            <p>ในการทำแบบทดสอบครั้งแรก ระบบจะบันทึกคะแนนอัตโนมัติ</p>
        
            <form id="quiz" name="quiz">
               
                <h5><br>1) เขียนคำสั่งที่ถูกต้องเพื่อเลือกข้อมูลและแสดงข้อมูลในฐานข้อมูลใหม่ที่ชื่อว่า studyphp<br><br></h5>
                <h6>&#60;?php<br></h6>
                <h6 style="text-indent: 2.5em;">$connect = new mysqli('localhost', 'root', '  ' , ' <input type="text" id="textBox11" name="question11">');</h6><p id="checkQ11"></p> 
                <h6 style="text-indent: 2.5em;">$sql = " <input type="text" id="textBox12" name="question12"   > * FROM menu";</h6>
                <p id="checkQ12"></p>
                <h6 style="text-indent: 2.5em;">$result = $connect->query($sql);<br>?></h6>
                <h6>&#60;body></h6>
                <h6 style="text-indent: 2.5em;">&#60;?php while($row = <input type="text" id="textBox13" name="question13"   > -> <input type="text" id="textBox14" name="question14">()): ?></h6><p id="checkQ14"></p> 
                <p id="checkQ1"></p><p id="checkQ13"></p>
                <h6 style="text-indent: 2.5em;">&#60;tr></h6>
                <h6 style="text-indent: 3em;">&#60;td>&#60;?php echo $row['id']; ?>&#60;/td></h6>
                <h6 style="text-indent: 3em;">&#60;td>&#60;?php echo $row['username']; ?>&#60;/td></h6>
                <h6 style="text-indent: 3em;">&#60;td>&#60;?php echo $row['name']; ?>&#60;/td></h6>
                <h6 style="text-indent: 2.5em;">&#60;/tr></h6>
                <h6 style="text-indent: 2.5em;">&#60;?php endwhile ?><br>&#60;/body></h6>
                <p id="checkQ2"></p>
                <br>

                <h5><br>2) เขียนคำสั่งที่ถูกต้องเพื่อใช้ ajax ดึงข้อมูลมาแสดงจากไฟล์ view_ajax.php โดยใช้ฟังก์ชัน post<br><br></h5>
                <h6>$.<input type="text" id="textBox21" name="question21">({<br></h6>
                    <p id="checkQ21"></p> 
                <h6 style="text-indent: 2.5em;">url: " <input type="text" id="textBox22" name="question22"> ",</h6>
                <p id="checkQ22"></p>  
                <h6 style="text-indent: 2.5em;">type: " <input type="text" id="textBox23" name="question23"> ",</h6>
                <p id="checkQ23"></p> 
                <h6 style="text-indent: 2.5em;">cache: false,</h6>
                <h6 style="text-indent: 2.5em;">success: function(data){</h6>
                <h6 style="text-indent: 3.5em;">alert(data);</h6>
                <h6 style="text-indent: 3.5em;">$('#table').html( <input type="text" id="textBox24" name="question24"> );</h6>
                <p id="checkQ24"></p> 
                <h6 style="text-indent: 3em;">}<br>});</h6>
                <br>
                

                <h5><br>3) fetch_assoc() เป็นฟังก์ชันที่เก็บข้อมูลอยู่ในรูปแบบใด<br><br></h5>
                <input type = "radio" name = "question3" value = "string"> string<br><br>
                <input type = "radio" name = "question3" value = "number"> number<br><br>
                <input type = "radio" name = "question3" value = "array"> array<br><br>
                <input type = "radio" name = "question3" value = "boolean"> boolean<br><br>
                <p id="checkQ3"></p>
                <br>

                <h5><br>4) select ใช้เลือกข้อมูลจากที่ใด <br><br></h5>
                <input type = "radio" name = "question4" value = "Table"> Table<br><br>
                <input type = "radio" name = "question4" value = "Database"> Database<br><br>
                <input type = "radio" name = "question4" value = "Column"> Column<br><br>
                <input type = "radio" name = "question4" value = "ไม่มีข้อถูกต้อง"> ไม่มีข้อถูกต้อง<br><br>
                <p id="checkQ4"></p>
                <br>

                <h5><br>5) ถ้าต้องการแสดงข้อมูลทั้งหมดในตารางควรใช้คำสั่ง SQL ใด<br><br></h5>
                <input type = "radio" name = "question5" value = "SHOW * FROM table;"> SHOW * FROM table;<br><br>
                <input type = "radio" name = "question5" value = "SHOW * IN table;"> SHOW * IN table;<br><br>
                <input type = "radio" name = "question5" value = "SELECT * FROM table;"> SELECT * FROM table;<br><br>
                <input type = "radio" name = "question5" value = "SELECT * IN table;"> SELECT * IN table;<br><br>
                <p id="checkQ5"></p>
                <br>

                <h5><br>6) คำสั่ง ajax ควรเขียนอยู่ในแท็ก HTML ใด<br><br></h5>
                <input type = "radio" name = "question6" value = "<link></link>"> &#60;link>&#60;/link><br><br>
                <input type = "radio" name = "question6" value = "<table></table>"> &#60;table>&#60;/table><br><br>
                <input type = "radio" name = "question6" value = "<script></script>"> &#60;script>&#60;/script><br><br>
                <input type = "radio" name = "question6" value = "<style></style>"> &#60;style>&#60;/style><br><br>
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
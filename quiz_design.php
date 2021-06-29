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
    <title>Computer-Based Learning</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="quiz.js"></script>
    <script src="save_quiz_design.js"></script>

    <script type="text/javascript">
        function showBT() {
            document.getElementById("saveQuiz").style.visibility = "visible";
            document.getElementById("resetQuiz").style.visibility = "visible";
        }

        function formReset() {
            document.getElementById("quiz").reset();
            document.getElementById("textBox1").style.color = "black";
            document.getElementById("textBox2").style.color = "black";

            str = "";
            document.getElementById("checkQ1").innerHTML = str;
            document.getElementById("checkQ2").innerHTML = str;
            document.getElementById("checkQ3").innerHTML = str;
            document.getElementById("checkQ4").innerHTML = str;
            document.getElementById("checkQ5").innerHTML = str;
            document.getElementById("checkQ6").innerHTML = str;

            document.getElementById("saveQuiz").style.visibility = "hidden";
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
        

            <form id="quiz" name="quiz">
               
                <h5><br>1) เขียนคำสั่ง SQL ที่ถูกต้องเพื่อสร้างฐานข้อมูลใหม่ที่ชื่อว่า testDB<br><br></h5>
                <input type="text" id="textBox1" name="question1"   > ;
                <p id="checkQ1"></p>
                <br><br>
                
                <h5><br>2) เขียนคำสั่ง SQL ที่ถูกต้องเพื่อสร้างตารางใหม่ที่ชื่อว่า Persons<br><br></h5>
                <input type="text" id="textBox2" name="question2"> (
                <h6><br>PersonID int,</h6>
                <h6><br>Lastname varchar(255),</h6>
                <h6><br>Firstname varchar(255),</h6>
                <h6><br>Address varchar(255));<br><br></h6>
                <p id="checkQ2"></p>
                <br>
                

                <h5><br>3) เลือกคำสั่ง SQL ที่ถูกต้องเพื่อลบฐานข้อมูลที่ชื่อ testDB<br><br></h5>
                <input type = "radio" name = "question3" value = "DROP DATABASE testDB;"> DROP DATABASE testDB;<br><br>
                <input type = "radio" name = "question3" value = "DELETE DATABASE testDB;"> DELETE DATABASE testDB;<br><br>
                <input type = "radio" name = "question3" value = "DESTROY DATABASE testDB;"> DESTROY DATABASE testDB;<br><br>
                <input type = "radio" name = "question3" value = "CLOSE DATABASE testDB;"> CLOSE DATABASE testDB;<br><br>
                <p id="checkQ3"></p>
                <br>

                <h5><br>4) เลือกคำสั่ง SQL ที่ถูกต้องเพื่อลบตารางที่ชื่อว่า Persons<br><br></h5>
                <input type = "radio" name = "question4" value = "DESTROY TABLE Persons;"> DESTROY TABLE Persons;<br><br>
                <input type = "radio" name = "question4" value = "CLOSE TABLE Persons;"> CLOSE TABLE Persons;<br><br>
                <input type = "radio" name = "question4" value = "DROP TABLE Persons;"> DROP TABLE Persons;<br><br>
                <input type = "radio" name = "question4" value = "DELETE TABLE Persons;"> DELETE TABLE Persons;<br><br>
                <p id="checkQ4"></p>
                <br>

                <h5><br>5) เลือกคำสั่ง SQL ที่ถูกต้องเพื่อเพิ่มคอลัมน์ประเภท DATE ที่ชื่อว่า Birthday<br><br></h5>
                <input type = "radio" name = "question5" value = "ALTER TABLE ADD Birthday DATE;"> ALTER TABLE ADD Birthday DATE;<br><br>
                <input type = "radio" name = "question5" value = "ALTER TABLE Persons ADD DATE Birthday;"> ALTER TABLE Persons ADD DATE Birthday;<br><br>
                <input type = "radio" name = "question5" value = "ALTER Persons ADD Birthday DATE;"> ALTER Persons ADD Birthday DATE;<br><br>
                <input type = "radio" name = "question5" value = "ALTER TABLE Persons ADD Birthday DATE;"> ALTER TABLE Persons ADD Birthday DATE;<br><br>
                <p id="checkQ5"></p>
                <br>

                <h5><br>6) เลือกคำสั่ง SQL ที่ถูกต้องเพื่อลบคอลัมน์ที่ชื่อว่า Birthday จากตาราง Persons<br><br></h5>
                <input type = "radio" name = "question6" value = "ALTER TABLE Persons DELETE COLUMN Birthday;"> ALTER TABLE Persons DELETE COLUMN Birthday;<br><br>
                <input type = "radio" name = "question6" value = "ALTER TABLE Persons DROP Birthday;"> ALTER TABLE Persons DROP Birthday;<br><br>
                <input type = "radio" name = "question6" value = "ALTER TABLE Persons DROP COLUMN Birthday;"> ALTER TABLE Persons DROP COLUMN Birthday;<br><br>
                <input type = "radio" name = "question6" value = "ALTER TABLE Persons DESTROY COLUMN Birthday;"> ALTER TABLE Persons DESTROY COLUMN Birthday;<br><br>
                <p id="checkQ6"></p>
                <br>
                
                <a href="#after_submit">
                    <input class="button" type="button" id="button" value="ยืนยันคำตอบ" onclick="check();showBT();">
                </a>
                <div id="reset_quiz">
                    <a href="#top">
                        <input class="reset" type="button" id="resetQuiz" value="เริ่มทำใหม่" onclick="formReset();">
                    </a>
                </div>
                <div id="save_quiz">
                    <input class="save" type="button" id="saveQuiz" value="บันทึกคะแนน" onclick="savePoint(user_id.value, point.value);">
                </div>
            </form>
            
            
            <div id="after_submit">
                <h4 id="number_correct"></h4>
            </div>
            <input type="hidden" id="point" name="point" value="">
            <input type="hidden" id="user_id" name="user_id" value="<?php echo $_SESSION['s_id']; ?>">
        </div>
    </div>
</body>

    <script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
    
</body>
</html>
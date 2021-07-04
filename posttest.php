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
    <title>แบบทดสอบท้ายการเรียน - Database Management with PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/snackbar.css">

    <script src="posttest_quiz.js"></script>
    <script src="save_quiz_posttest.js"></script>

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
            document.getElementById("textBox51").style.color = "black";
            document.getElementById("textBox52").style.color = "black";
            document.getElementById("textBox53").style.color = "black";
            document.getElementById("textBox54").style.color = "black";
            document.getElementById("textBox61").style.color = "black";
            document.getElementById("textBox62").style.color = "black";
            document.getElementById("textBox63").style.color = "black";
            document.getElementById("textBox64").style.color = "black";
            document.getElementById("textBox71").style.color = "black";
            document.getElementById("textBox72").style.color = "black";
            document.getElementById("textBox73").style.color = "black";
            document.getElementById("textBox74").style.color = "black";
            document.getElementById("textBox81").style.color = "black";
            document.getElementById("textBox82").style.color = "black";
            document.getElementById("textBox83").style.color = "black";
            document.getElementById("textBox84").style.color = "black";

            str = "";
            document.getElementById("checkQ1").innerHTML = str;
            document.getElementById("checkQ2").innerHTML = str;
            document.getElementById("checkQ3").innerHTML = str;
            document.getElementById("checkQ4").innerHTML = str;
            document.getElementById("checkQ51").innerHTML = str;
            document.getElementById("checkQ52").innerHTML = str;
            document.getElementById("checkQ53").innerHTML = str;
            document.getElementById("checkQ54").innerHTML = str;
            document.getElementById("checkQ61").innerHTML = str;
            document.getElementById("checkQ62").innerHTML = str;
            document.getElementById("checkQ63").innerHTML = str;
            document.getElementById("checkQ64").innerHTML = str;
            document.getElementById("checkQ71").innerHTML = str;
            document.getElementById("checkQ72").innerHTML = str;
            document.getElementById("checkQ73").innerHTML = str;
            document.getElementById("checkQ74").innerHTML = str;
            document.getElementById("checkQ81").innerHTML = str;
            document.getElementById("checkQ82").innerHTML = str;
            document.getElementById("checkQ83").innerHTML = str;
            document.getElementById("checkQ84").innerHTML = str;
            document.getElementById("checkQ9").innerHTML = str;
            document.getElementById("checkQ10").innerHTML = str;
            document.getElementById("checkQ11").innerHTML = str;
            document.getElementById("checkQ12").innerHTML = str;
            document.getElementById("checkQ13").innerHTML = str;
            document.getElementById("checkQ14").innerHTML = str;
            document.getElementById("checkQ15").innerHTML = str;
            document.getElementById("checkQ16").innerHTML = str;
            document.getElementById("checkQ17").innerHTML = str;
            document.getElementById("checkQ18").innerHTML = str;
            document.getElementById("checkQ19").innerHTML = str;
            document.getElementById("checkQ20").innerHTML = str;

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
            <h2 class="mb-4" id="top">แบบทดสอบท้ายการเรียน</h2>
            <p>ในการทำแบบทดสอบครั้งแรก ระบบจะบันทึกคะแนนอัตโนมัติ</p>
        
            <form id="quiz" name="quiz">
               
            <h5><br>1) เขียนคำสั่ง SQL ที่ถูกต้องเพื่อสร้างตารางใหม่ที่ชื่อว่า Persons<br><br></h5>
                <input type="text" id="textBox1" name="question1"> (
                <h6><br>PersonID int,</h6>
                <h6><br>Lastname varchar(255),</h6>
                <h6><br>Firstname varchar(255),</h6>
                <h6><br>Address varchar(255));<br><br></h6>
                <p id="checkQ1"></p>
                <br>

                <h5><br>2) จงเขียนคำส้ั่งที่ถูกต้องเพื่อเชื่อมต่อไปยัง Host "localhost"<br></h5>
                <h5><br>3) จงเขียนคำส้ั่งที่ถูกต้องเพื่อทำการเชื่อมต่อฐานข้อมูลที่ชื่อว่า studyphp<br></h5>
                <h5><br>4) จงเขียนคำส้ั่งที่ถูกต้องเพื่อปิดการเชื่อมต่อฐานข้อมูล<br><br></h5>
                <h6>&#60;?php<br><br></h6>
                <h6 style="text-indent: 2.5em;">&#36;con = mysqli_connect(" <input type="text" id="textBox2" name="question2" placeholder="ข้อที่ 2"><span id="checkQ2"></span> ", "root", "");</h6>
                <h6 style="text-indent: 2.5em;">if(!$con) {<br></h6>
                <h6 style="text-indent: 5em;">die("Could not connect: " . mysqli_error());</h6>
                <h6 style="text-indent: 2.5em;">}</h6>
                <h6 style="text-indent: 2.5em;">mysqli_select_db($con," <input type="text" id="textBox3" name="question3" placeholder="ข้อที่ 3"><span id="checkQ3"></span> ");<br><br></h6>
                <h6 style="text-indent: 2.5em;">$con->query("SET NAMES UTF8");<br><br></h6>
                <h6 style="text-indent: 2.5em;">mysqli_<input type="text" id="textBox4" name="question4" placeholder="ข้อที่ 4"><span id="checkQ4"></span>($con);<br><br>?></h6>
                <br>

                <h5><br>5) จงเขียนคำสั่งที่ถูกต้องเพื่อเพิ่มข้อมูลไปยังตาราง profiles <br><br></h5>
                <h6>$sql = " <input type="text" id="textBox51" name="question51"><span id="checkQ51"></span> INTO profiles (firstname, lastname, email)<br></h6>
                <h6><input type="text" id="textBox52" name="question52"><span id="checkQ52"></span> ('John', 'Doe', 'john@gmail.com')";<br><br></h6>
                <h6>$result = mysqli_query($con, <input type="text" id="textBox53" name="question53"><span id="checkQ53"></span>);</h6> 
                <h6>if(!<input type="text" id="textBox54" name="question54"><span id="checkQ54"></span>){</h6>
                <h6 style="text-indent: 2.5em;">echo "Record add successfully";<br></h6>
                <h6>}</h6>
                <br><br>

                <h5><br>6) เขียนคำสั่งฟังก์ชัน เพื่อแสดงค่าเพศที่ได้รับมา ให้แสดงใน Tag ที่มี id = "sex" ให้ทำงานได้สมบูรณ์<br><br></h5>
                <h6>function stateChange() {</h6>
                <h6 style="text-indent: 2.5em;">if (xmlHttp.readyState == 4 || xmlHttp.readyState == " <input type="text" id="textBox61" name="question61"><span id="checkQ61"></span> ") {</h6>
                <h6 style="text-indent: 5em;">var gender = xmlHttp.responseText;</h6>
                <h6 style="text-indent: 5em;"><input type="text" id="textBox62" name="question62"><span id="checkQ62"></span>.getElementById("sex").<input type="text" id="textBox63" name="question63"><span id="checkQ63"></span>  = <input type="text" id="textBox64" name="question64"><span id="checkQ64"></span>;</h6>
                <h6 style="text-indent: 2.5em;">}</h6>
                <h6>}</h6>
                <br>

                <h5><br>7) เขียนคำสั่งที่ถูกต้องเพื่อเลือกข้อมูลและอัปเดตข้อมูลในฐาน studyphp<br><br></h5>
                <h6>&#60;?php<br></h6>
                <h6 style="text-indent: 2.5em;">$con = mysqli_connect('localhost', 'root', '  ' , 'studyphp');</p> 
                <h6 style="text-indent: 2.5em;">$sql = " <input type="text" id="textBox71" name="question71"><span id="checkQ71"></span> profiles <input type="text" id="textBox72" name="question72"><span id="checkQ72"></span> username = 'George' WHERE id = 1";</h6>
                <h6 style="text-indent: 2.5em;">if ($con->query( <input type="text" id="textBox73" name="question73"><span id="checkQ73"></span> ) == TRUE) {</h6>
                <h6 style="text-indent: 5em;">echo "Record updated successfully";</h6>
                <h6 style="text-indent: 2.5em;">} else {</h6> 
                <h6 style="text-indent: 5em;">echo "Error updating record: " . $ <input type="text" id="textBox74" name="question74"><span id="checkQ74"></span> ->error;<br></h6>
                <h6 style="text-indent: 2.5em;">}<br></h6>
                <h6 style="text-indent: 2.5em;">$con->close();<br>?></h6>
                <br>

                <h5><br>8) เขียนคำสั่งที่ถูกต้องเพื่อลบข้อมูลในฐานข้อมูล studyphp<br><br></h5>
                <h6>&#60;?php<br></h6>
                <h6 style="text-indent: 2.5em;">$con = mysqli_connect('localhost', 'root', '  ' , 'studyphp');</p></h6>
                <h6 style="text-indent: 2.5em;">$sql = " <input type="text" id="textBox81" name="question81"><span id="checkQ81"></span> <input type="text" id="textBox82" name="question82"><span id="checkQ82"></span> profiles WHERE id = 1";</h6>
                <h6 style="text-indent: 2.5em;">if ($con-> <input type="text" id="textBox83" name="question83"><span id="checkQ83"></span> ($sql) == TRUE) {</h6>
                <h6 style="text-indent: 5em;">echo "Record deleted successfully";</h6>
                <h6 style="text-indent: 2.5em;">} else {</h6> 
                <h6 style="text-indent: 5em;">echo "Error deleting record: " . $con ->error;<br></h6>
                <h6 style="text-indent: 2.5em;">}<br></h6>
                <h6 style="text-indent: 2.5em;">$<input type="text" id="textBox84" name="question84"><span id="checkQ84"></span> ->close();<br>?></h6>
                <br>

                <h5><br>9) เลือกคำสั่ง SQL ที่ถูกต้องเพื่อเพิ่มคอลัมน์ประเภท DATE ที่ชื่อว่า Birthday จากตาราง Persons<br><br></h5>
                <input type = "radio" name = "question9" value = "ALTER TABLE ADD Birthday DATE;"> ALTER TABLE ADD Birthday DATE;<br><br>
                <input type = "radio" name = "question9" value = "ALTER TABLE Persons ADD DATE Birthday;"> ALTER TABLE Persons ADD DATE Birthday;<br><br>
                <input type = "radio" name = "question9" value = "ALTER Persons ADD Birthday DATE;"> ALTER Persons ADD Birthday DATE;<br><br>
                <input type = "radio" name = "question9" value = "ALTER TABLE Persons ADD Birthday DATE;"> ALTER TABLE Persons ADD Birthday DATE;<br><br>
                <p id="checkQ9"></p>
                <br>

                <h5><br>10) เลือกคำสั่ง SQL ที่ถูกต้องเพื่อลบคอลัมน์ที่ชื่อว่า Birthday จากตาราง Persons<br><br></h5>
                <input type = "radio" name = "question10" value = "ALTER TABLE Persons DELETE COLUMN Birthday;"> ALTER TABLE Persons DELETE COLUMN Birthday;<br><br>
                <input type = "radio" name = "question10" value = "ALTER TABLE Persons DROP Birthday;"> ALTER TABLE Persons DROP Birthday;<br><br>
                <input type = "radio" name = "question10" value = "ALTER TABLE Persons DROP COLUMN Birthday;"> ALTER TABLE Persons DROP COLUMN Birthday;<br><br>
                <input type = "radio" name = "question10" value = "ALTER TABLE Persons DESTROY COLUMN Birthday;"> ALTER TABLE Persons DESTROY COLUMN Birthday;<br><br>
                <p id="checkQ10"></p>
                <br>

                <h5><br>11) ฟังก์ชันใดทำหน้าที่ในการเชื่อมต่อฐานข้อมูล<br><br></h5>
                <input type = "radio" name = "question11" value = "mysqli_select_db"> mysqli_select_db<br><br>
                <input type = "radio" name = "question11" value = "mysqli_query"> mysqli_query<br><br>
                <input type = "radio" name = "question11" value = "mysqli_connect"> mysqli_connect<br><br>
                <input type = "radio" name = "question11" value = "mysqli_close"> mysqli_close<br><br>
                <p id="checkQ11"></p>
                <br>

                <h5><br>12) ฟังก์ชัน mysqli_error ทำหน้าที่ใดในการเชื่อมต่อฐานข้อมูล<br><br></h5>
                <input type = "radio" name = "question12" value = "ฟังก์ชันในการปิดการเชื่อมต่อฐานข้อมูล"> ฟังก์ชันในการปิดการเชื่อมต่อฐานข้อมูล<br><br>
                <input type = "radio" name = "question12" value = "ฟังก์ชันในการส่งคืนคำอธิบายข้อผิดพลาด"> ฟังก์ชันในการส่งคืนคำอธิบายข้อผิดพลาด<br><br>
                <input type = "radio" name = "question12" value = "ฟังก์ชันในการส่งคืนรหัสข้อผิดพลาด"> ฟังก์ชันในการส่งคืนรหัสข้อผิดพลาด<br><br>
                <input type = "radio" name = "question12" value = "ฟังก์ชันเพื่อดำเนินการแก้ไขข้อบกพร่อง"> ฟังก์ชันเพื่อดำเนินการแก้ไขข้อบกพร่อง<br><br>
                <p id="checkQ12"></p>
                <br>
                
                <h5><br>13) ฟังก์ชันใดทำหน้าที่แทรกข้อมูลไปยังตารางในฐานข้อมูล<br><br></h5>
                <input type = "radio" name = "question13" value = "mysqli_query"> mysqli_query<br><br>
                <input type = "radio" name = "question13" value = "mysqli_fetch_array"> mysqli_fetch_array<br><br>
                <input type = "radio" name = "question13" value = "mysqli_num_fields"> mysqli_num_fields<br><br>
                <input type = "radio" name = "question13" value = "mysqli_select_db"> mysqli_select_db<br><br>
                <p id="checkQ13"></p>
                <br>

                <h5><br>14) Object ใดทำหน้าที่ในการติดต่อสื่อสารและรับส่งข้อมูลกับ browser <br><br></h5>
                <input type = "radio" name = "question14" value = "ActiveXObject"> ActiveXObject<br><br>
                <input type = "radio" name = "question14" value = "onreadystatechange"> onreadystatechange<br><br>
                <input type = "radio" name = "question14" value = "responseXML"> responseXML<br><br>
                <input type = "radio" name = "question14" value = "XMLHttpRequest"> XMLHttpRequest<br><br>
                <p id="checkQ14"></p>
                <br>

                <h5><br>15) ถ้าต้องการแสดงข้อมูลทั้งหมดในตารางควรใช้คำสั่ง SQL ใด<br><br></h5>
                <input type = "radio" name = "question15" value = "SHOW * FROM table;"> SHOW * FROM table;<br><br>
                <input type = "radio" name = "question15" value = "SHOW * IN table;"> SHOW * IN table;<br><br>
                <input type = "radio" name = "question15" value = "SELECT * FROM table;"> SELECT * FROM table;<br><br>
                <input type = "radio" name = "question15" value = "SELECT * IN table;"> SELECT * IN table;<br><br>
                <p id="checkQ15"></p>
                <br>

                <h5><br>16) คำสั่ง ajax ควรเขียนอยู่ในแท็ก HTML ใด<br><br></h5>
                <input type = "radio" name = "question16" value = "<link></link>"> &#60;link>&#60;/link><br><br>
                <input type = "radio" name = "question16" value = "<table></table>"> &#60;table>&#60;/table><br><br>
                <input type = "radio" name = "question16" value = "<script></script>"> &#60;script>&#60;/script><br><br>
                <input type = "radio" name = "question16" value = "<style></style>"> &#60;style>&#60;/style><br><br>
                <p id="checkQ16"></p>
                <br>

                <h5><br>17) ถ้าต้องการแก้ไขข้อมูลทั้งหมดในตารางควรใช้คำสั่ง SQL ใด<br><br></h5>
                <input type = "radio" name = "question17" value = "UPDATE table_name SET column1 = value1, WHERE condition;"> UPDATE table_name SET column1 = value1 WHERE condition;<br><br>
                <input type = "radio" name = "question17" value = "UPDATE table_name PUT column1 = value1, WHERE condition;"> UPDATE table_name PUT column1 = value1, WHERE condition;<br><br>
                <input type = "radio" name = "question17" value = "EDIT table_name SET column1 = value1, WHERE condition;"> EDIT table_name SET column1 = value1, WHERE condition;<br><br>
                <input type = "radio" name = "question17" value = "EDIT table_name PUT column1 = value1, WHERE condition;"> EDIT table_name PUT column1 = value1, WHERE condition;<br><br>
                <p id="checkQ17"></p>
                <br>

                <h5><br>18) เลือกคำสั่ง SQL ที่ถูกต้องเพื่อทำการอัปเดตคอลัมน์ city และคอลัมน์ country<br><br></h5>
                <input type = "radio" name = "question18" value = "UPDATE customers SET city = 'Bangkok' && country = 'Thailand' WHERE id = 1;"> UPDATE customers SET city = 'Bangkok' && country = 'Thailand' WHERE id = 1;<br><br>
                <input type = "radio" name = "question18" value = "UPDATE customers SET city = 'Bangkok' , country = 'Thailand' WHERE id = 1;"> UPDATE customers SET city = 'Bangkok' , country = 'Thailand' WHERE id = 1;<br><br>
                <input type = "radio" name = "question18" value = "UPDATE customers SET city = 'Bangkok' and country = 'Thailand' WHERE id = 1;"> UPDATE customers SET city = 'Bangkok' and country = 'Thailand' WHERE id = 1;<br><br>
                <input type = "radio" name = "question18" value = "UPDATE customers SET city = 'Bangkok' & country = 'Thailand' WHERE id = 1;"> UPDATE customers SET city = 'Bangkok' & country = 'Thailand' WHERE id = 1;<br><br>
                <p id="checkQ18"></p>
                <br>

                <h5><br>19) ถ้าต้องการลบข้อมูลทั้งหมดในตารางควรใช้คำสั่ง SQL ใด<br><br></h5>
                <input type = "radio" name = "question19" value = "DELETE FROM table_name;"> DELETE FROM table_name;<br><br>
                <input type = "radio" name = "question19" value = "DROP FROM table_name;"> DROP FROM table_name;<br><br>
                <input type = "radio" name = "question19" value = "DELETE IN table_name;"> DELETE IN table_name;<br><br>
                <input type = "radio" name = "question19" value = "DROP IN table_name;"> DROP IN table_name;<br><br>
                <p id="checkQ19"></p>
                <br>

                <h5><br>20) เลือกคำสั่ง SQL ที่ถูกต้องเพื่อทำการลบข้อมูลในตาราง customers เมื่อคอลัมน์ country เท่ากับ Thailand<br><br></h5>
                <input type = "radio" name = "question20" value = "DROP IN customers WHERE country = 'Thailand';"> DROP IN customers WHERE country = 'Thailand';<br><br>
                <input type = "radio" name = "question20" value = "DELETE IN customers WHERE country = 'Thailand';"> DELETE IN customers WHERE country = 'Thailand';<br><br>
                <input type = "radio" name = "question20" value = "DROP FROM customers WHERE country = 'Thailand';"> DROP FROM customers WHERE country = 'Thailand';<br><br>
                <input type = "radio" name = "question20" value = "DELETE FROM customers WHERE country = 'Thailand';"> DELETE FROM customers WHERE country = 'Thailand';<br><br>
                <p id="checkQ20"></p>
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
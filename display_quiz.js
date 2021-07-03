function check()
{
    var question11 = document.quiz.question11.value;
    var question12 = document.quiz.question12.value;
    var question13 = document.quiz.question13.value;
    var question14 = document.quiz.question14.value;
    var question21 = document.quiz.question21.value;
    var question22 = document.quiz.question22.value;
    var question23 = document.quiz.question23.value;
    var question24 = document.quiz.question24.value;
    var question3 = document.quiz.question3.value;
    var question4 = document.quiz.question4.value;
    var question5 = document.quiz.question5.value;
    var question6 = document.quiz.question6.value;
    

    var correct11 = 0;
    var correct12 = 0;
    var correct13 = 0;
    var correct14 = 0;
    var correct21 = 0;
    var correct22 = 0;
    var correct23 = 0;
    var correct24 = 0;
    var correct3 = 0;
    var correct4 = 0;
    var correct5 = 0;
    var correct6 = 0;
    

    // Question 1.1
    if(question11 == "studyphp") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ11").innerHTML = str;

        document.getElementById("textBox11").style.color = "green";
        correct11 = 1;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ11").innerHTML = str;

        document.getElementById("textBox11").style.color = "red";
    }

     // Question 1.2
     if(question12 == "SELECT") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ12").innerHTML = str;

        document.getElementById("textBox12").style.color = "green";
        correct12 = 1;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ12").innerHTML = str;

        document.getElementById("textBox12").style.color = "red";
    }
    
     // Question 1.3
     if(question13 == "$result") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ13").innerHTML = str;

        document.getElementById("textBox13").style.color = "green";
        correct13 = 1;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ13").innerHTML = str;

        document.getElementById("textBox13").style.color = "red";
    }

     // Question 1.4
     if(question14 == "fetch_assoc") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ14").innerHTML = str;

        document.getElementById("textBox14").style.color = "green";
        correct14 = 1;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ14").innerHTML = str;

        document.getElementById("textBox14").style.color = "red";
    }

    // Question 2.1
    if(question21 == "ajax") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ21").innerHTML = str;

        document.getElementById("textBox21").style.color = "green";
        correct21= 1;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ21").innerHTML = str;

        document.getElementById("textBox21").style.color = "red";
    }

    // Question 2.2
    if(question22 == "view_ajax.php") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ22").innerHTML = str;

        document.getElementById("textBox22").style.color = "green";
        correct22 = 1;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ22").innerHTML = str;

        document.getElementById("textBox22").style.color = "red";
    }


    // Question 2.3
    if(question23 == "POST") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ23").innerHTML = str;

        document.getElementById("textBox23").style.color = "green";
        correct23 = 1;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ23").innerHTML = str;

        document.getElementById("textBox23").style.color = "red";
    }

    // Question 2.4
    if(question24 == "data") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ24").innerHTML = str;

        document.getElementById("textBox24").style.color = "green";
        correct24 = 1;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ24").innerHTML = str;

        document.getElementById("textBox24").style.color = "red";
    }

    // Question 3
    if(question3 == "array") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
    document.getElementById("checkQ3").innerHTML = str;
    correct3 = 2;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ3").innerHTML = str;
    }

    // Question 4
    if(question4 == "Table") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
    document.getElementById("checkQ4").innerHTML = str;
    correct4 = 2;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ4").innerHTML = str;
    }

    // Question 5
    if(question5 == "SELECT * FROM table;") {
    str = "<font size='3' color='green'>ถูกต้อง</font>";
    document.getElementById("checkQ5").innerHTML = str;
    correct5 = 2;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ5").innerHTML = str;
    }

    //  Question 6
    if(question6 == "<script></script>") {
    str = "<font size='3' color='green'>ถูกต้อง</font>";
    document.getElementById("checkQ6").innerHTML = str;
    correct6 = 2;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ6").innerHTML = str;
    }

    

    // Display
    var point = correct11 + correct12 + correct13 + correct14 + correct21 + correct22 + correct23 + correct24  + correct3 + correct4 + correct5 + correct6;

    document.getElementById("after_submit").style.visibility = "visible";
    document.getElementById("number_correct").innerHTML = "คุณได้ " + point + " คะแนนจากทั้งหมด 16 คะแนน";
    document.getElementById("point").value = point;
}
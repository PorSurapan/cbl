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
    if(question11 == "UPDATE") {
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
     if(question12 == "SET") {
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
     if(question13 == "$sql") {
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
     if(question14 == "con") {
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
    if(question21 == "saveData.php") {
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
    if(question22 == "?id=") {
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
    if(question23 == "&name=") {
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
    if(question24 == "GET") {
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
    if(question3 == "UPDATE table_name SET column1 = value1, WHERE condition;") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ3").innerHTML = str;
        correct3 = 2;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ3").innerHTML = str;
    }

    // Question 4
    if(question4 == "UPDATE city = 'Bangkok' SET customers;") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ4").innerHTML = str;
        correct4 = 2;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ4").innerHTML = str;
    }

    // Question 5
    if(question5 == "UPDATE customers SET city = 'Bangkok' WHERE country = 'Thailand';") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ5").innerHTML = str;
        correct5 = 2;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ5").innerHTML = str;
    }

    //  Question 6
    if(question6 == "UPDATE customers SET city = 'Bangkok' , country = 'Thailand' WHERE id = 1;") {
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
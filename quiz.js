function check(){

    var question1 = document.quiz.question1.value;
    var question2 = document.quiz.question2.value;
    var question3 = document.quiz.question3.value;
     var question4 = document.quiz.question4.value;
     var question5 = document.quiz.question5.value;
     var question6 = document.quiz.question6.value;

    var correct1 = 0;
    var correct2 = 0;
    var correct3 = 0;
    var correct4 = 0;
    var correct5 = 0;
    var correct6 = 0;

    // Question 1
    if(question1 == "CREATE DATABASE testDB") {
        document.getElementById("textbox1").style.color = "green";
        correct1 = 1;
    } else {
        document.getElementById("textbox1").style.color = "red";
    }

    // Question 2
    if(question2 == "CREATE TABLE") {
        document.getElementById("textbox2").style.color = "green";
        correct2 = 1;
    } else {
        document.getElementById("textbox2").style.color = "red";
    }

    // Question 3
    if(question3 == "DROP DATABASE testDB") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ3").innerHTML = str;
        correct3 = 1;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ3").innerHTML = str;
    }

    // Question 4
     if(question4 == "") {
         document.getElementById("cotext4")
         correct4 = 1;
     } else {
         document.getElementById("inctext4")
     }

    // Question 5
     if(question5 == "") {
         document.getElementById("cotext5")
         correct5 = 1;
     } else {
         document.getElementById("inctext5")
     }

    //  Question 6
     if(question6 == "CREATE TABLE") {
         document.getElementById("cotext6")
         correct6 = 1;
     } else {
         document.getElementById("inctext6")
     }
    
    // Display
    var point = correct1 + correct2 + correct3 + correct4 + correct5 + correct6;

    document.getElementById("after_submit").style.visibility = "visible";
    document.getElementById("number_correct").innerHTML = "คุณได้ " + point + " คะแนนจากทั้งหมด 12 คะแนน";
    document.getElementById("point").value = point;
    
}
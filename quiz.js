function check(){

    var question1 = document.quiz.question1.value;
    var question2 = document.quiz.question2.value;
    var correct = 0;

    if (question1 == "CREATE DATABASE testDB"){
        document.getElementById("textbox1").style.color = "green";
        correct++;
    }if (question2 == "CREATE TABLE"){
        document.getElementById("textbox2").style.color = "green";
        correct++;
        }if(question1 !== "CREATE DATABASE testDB" && question2 !== "CREATE TABLE"){
            document.getElementById("textbox1").style.color = "red";
            document.getElementById("textbox2").style.color = "red";
        }
    

    document.getElementById("after_submit").style.visibility = "visible";
    document.getElementById("number_correct").innerHTML = "คุณได้ " + correct + " คะแนนจากทั้งหมด 10 ข้อ";
}
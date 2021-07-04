function check()
{
    var question1 = document.quiz.question1.value;
    var question2 = document.quiz.question2.value;
    var question3 = document.quiz.question3.value;
    var question4 = document.quiz.question4.value;
    var question51 = document.quiz.question51.value;
    var question52 = document.quiz.question52.value;
    var question53 = document.quiz.question53.value;
    var question54 = document.quiz.question54.value;
    var question61 = document.quiz.question61.value;
    var question62 = document.quiz.question62.value;
    var question63 = document.quiz.question63.value;
    var question64 = document.quiz.question64.value;
    var question71 = document.quiz.question71.value;
    var question72 = document.quiz.question72.value;
    var question73 = document.quiz.question73.value;
    var question74 = document.quiz.question74.value;
    var question81 = document.quiz.question81.value;
    var question82 = document.quiz.question82.value;
    var question83 = document.quiz.question83.value;
    var question84 = document.quiz.question84.value;
    var question9 = document.quiz.question9.value;
    var question10 = document.quiz.question10.value;
    var question11 = document.quiz.question11.value;
    var question12 = document.quiz.question12.value;
    var question13 = document.quiz.question13.value;
    var question14 = document.quiz.question14.value;
    var question15 = document.quiz.question15.value;
    var question16 = document.quiz.question16.value;
    var question17 = document.quiz.question17.value;
    var question18 = document.quiz.question18.value;
    var question19 = document.quiz.question19.value;
    var question20 = document.quiz.question20.value;

    var correct1 = 0;
    var correct2 = 0;
    var correct3 = 0;
    var correct4 = 0;
    var correct51 = 0;
    var correct52 = 0;
    var correct53 = 0;
    var correct54 = 0;
    var correct61 = 0;
    var correct62 = 0;
    var correct63 = 0;
    var correct64 = 0;
    var correct71 = 0;
    var correct72 = 0;
    var correct73 = 0;
    var correct74 = 0;
    var correct81 = 0;
    var correct82 = 0;
    var correct83 = 0;
    var correct84 = 0;
    var correct9 = 0;
    var correct10 = 0;
    var correct11 = 0;
    var correct12 = 0;
    var correct13 = 0;
    var correct14 = 0;
    var correct15 = 0;
    var correct16 = 0;
    var correct17 = 0;
    var correct18 = 0;
    var correct19 = 0;
    var correct20 = 0;


    if(question1 == "CREATE TABLE Persons") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ1").innerHTML = str;

        document.getElementById("textBox1").style.color = "green";
        correct1 = 2;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ1").innerHTML = str;

        document.getElementById("textBox1").style.color = "red";
    }


    if(question9 == "ALTER TABLE Persons ADD Birthday DATE;") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ9").innerHTML = str;
        correct9 = 2;
        } else {
            str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
            document.getElementById("checkQ9").innerHTML = str;
        }
    

    if(question10 == "ALTER TABLE Persons DROP COLUMN Birthday;") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ10").innerHTML = str;
        correct10 = 2;
        } else {
            str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
            document.getElementById("checkQ10").innerHTML = str;
        }

    if(question2 == "localhost") {
            str = "<font size='3' color='green'>ถูกต้อง</font>";
            document.getElementById("checkQ2").innerHTML = str;
    
            document.getElementById("textBox2").style.color = "green";
            correct2 = 1;
        } else {
            str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
            document.getElementById("checkQ2").innerHTML = str;
    
            document.getElementById("textBox2").style.color = "red";
        }
    
        
    if(question3 == "studyphp") {
            str = "<font size='3' color='green'>ถูกต้อง</font>";
            document.getElementById("checkQ3").innerHTML = str;
    
            document.getElementById("textBox3").style.color = "green";
            correct3 = 0.5;
        } else {
            str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
            document.getElementById("checkQ3").innerHTML = str;
    
            document.getElementById("textBox3").style.color = "red";
        }
    
    if(question4 == "close") {
            str = "<font size='3' color='green'>ถูกต้อง</font>";
            document.getElementById("checkQ4").innerHTML = str;
    
            document.getElementById("textBox4").style.color = "green";
            correct4 = 0.5;
        } else {
            str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
            document.getElementById("checkQ4").innerHTML = str;
    
            document.getElementById("textBox4").style.color = "red";
        }  
        
        
    if(question11 == "mysqli_connect") {
            str = "<font size='3' color='green'>ถูกต้อง</font>";
            document.getElementById("checkQ11").innerHTML = str;
            correct11= 2;
            } else {
                str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
                document.getElementById("checkQ11").innerHTML = str;
            }

    if(question12 == "ฟังก์ชันในการส่งคืนคำอธิบายข้อผิดพลาด") {
             str = "<font size='3' color='green'>ถูกต้อง</font>";
            document.getElementById("checkQ12").innerHTML = str;
             correct12 = 2;
             } else {
                str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
                document.getElementById("checkQ12").innerHTML = str;
             }
             
    if(question51 == "INSERT") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ51").innerHTML = str;

        document.getElementById("textBox51").style.color = "green";
        correct51 = 0.5;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ51").innerHTML = str;

        document.getElementById("textBox51").style.color = "red";
    }

     
     if(question52 == "VALUES") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ52").innerHTML = str;

        document.getElementById("textBox52").style.color = "green";
        correct52 = 0.5;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ52").innerHTML = str;

        document.getElementById("textBox52").style.color = "red";
    }
    
    
     if(question53 == "$sql") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ53").innerHTML = str;

        document.getElementById("textBox53").style.color = "green";
        correct53 = 0.5;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ53").innerHTML = str;

        document.getElementById("textBox53").style.color = "red";
    }

     
     if(question54 == "$result") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ54").innerHTML = str;

        document.getElementById("textBox54").style.color = "green";
        correct54 = 0.5;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ54").innerHTML = str;

        document.getElementById("textBox54").style.color = "red";
    }


    if(question13 == "mysqli_query") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
    document.getElementById("checkQ13").innerHTML = str;
    correct13 = 2;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ13").innerHTML = str;
    }


    if(question14 == "XMLHttpRequest") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ14").innerHTML = str;
        correct14 = 2;
        } else {
            str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
            document.getElementById("checkQ14").innerHTML = str;
        }


    if(question61 == "ajax") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ61").innerHTML = str;

        document.getElementById("textBox61").style.color = "green";
        correct61= 0.5;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ61").innerHTML = str;

        document.getElementById("textBox61").style.color = "red";
    }

    
    if(question62 == "view_ajax.php") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ62").innerHTML = str;

        document.getElementById("textBox62").style.color = "green";
        correct62 = 0.5;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ62").innerHTML = str;

        document.getElementById("textBox62").style.color = "red";
    }


    
    if(question63 == "POST") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ63").innerHTML = str;

        document.getElementById("textBox63").style.color = "green";
        correct63 = 0.5;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ63").innerHTML = str;

        document.getElementById("textBox63").style.color = "red";
    }

   
    if(question64 == "data") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ64").innerHTML = str;

        document.getElementById("textBox64").style.color = "green";
        correct64 = 0.5;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ64").innerHTML = str;

        document.getElementById("textBox64").style.color = "red";
    }

    if(question15 == "SELECT * FROM table;") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ15").innerHTML = str;
        correct15 = 2;
        } else {
            str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
            document.getElementById("checkQ15").innerHTML = str;
    }

   
    if(question16 == "<script></script>") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ16").innerHTML = str;
        correct16 = 2;
        } else {
            str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
            document.getElementById("checkQ16").innerHTML = str;
    }

    if(question71 == "UPDATE") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ71").innerHTML = str;

        document.getElementById("textBox71").style.color = "green";
        correct71 = 0.5;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ71").innerHTML = str;

        document.getElementById("textBox71").style.color = "red";
    }

     
     if(question72 == "SET") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ72").innerHTML = str;

        document.getElementById("textBox72").style.color = "green";
        correct72 = 0.5;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ72").innerHTML = str;

        document.getElementById("textBox72").style.color = "red";
    }
    
     
     if(question73 == "$sql") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ73").innerHTML = str;

        document.getElementById("textBox73").style.color = "green";
        correct73 = 0.5;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ73").innerHTML = str;

        document.getElementById("textBox73").style.color = "red";
    }

     
     if(question74 == "conn") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ74").innerHTML = str;

        document.getElementById("textBox74").style.color = "green";
        correct74 = 0.5;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ74").innerHTML = str;

        document.getElementById("textBox74").style.color = "red";
    }

    if(question17 == "UPDATE table_name SET column1 = value1, WHERE condition;") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
    document.getElementById("checkQ17").innerHTML = str;
    correct17 = 2;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ17").innerHTML = str;
    }

    if(question18 == "UPDATE customers SET city = 'Bangkok' , country = 'Thailand' WHERE id = 1;") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ18").innerHTML = str;
        correct18 = 2;
        } else {
            str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
            document.getElementById("checkQ18").innerHTML = str;
        }

    if(question81 == "DELETE") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ81").innerHTML = str;

        document.getElementById("textBox81").style.color = "green";
        correct81 = 0.5;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ81").innerHTML = str;

        document.getElementById("textBox81").style.color = "red";
    }

     
     if(question82 == "FROM") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ82").innerHTML = str;

        document.getElementById("textBox82").style.color = "green";
        correct82 = 0.5;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ82").innerHTML = str;

        document.getElementById("textBox82").style.color = "red";
    }
    
     
     if(question83 == "query") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ83").innerHTML = str;

        document.getElementById("textBox83").style.color = "green";
        correct83 = 0.5;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ83").innerHTML = str;

        document.getElementById("textBox83").style.color = "red";
    }

     
     if(question84 == "conn") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
        document.getElementById("checkQ84").innerHTML = str;

        document.getElementById("textBox84").style.color = "green";
        correct84 = 0.5;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ84").innerHTML = str;

        document.getElementById("textBox84").style.color = "red";
    }

    if(question19 == "DELETE FROM table_name;") {
        str = "<font size='3' color='green'>ถูกต้อง</font>";
    document.getElementById("checkQ19").innerHTML = str;
    correct19 = 2;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ19").innerHTML = str;
    }

   
    if(question20 == "DELETE FROM customers WHERE country = 'Thailand';") {
    str = "<font size='3' color='green'>ถูกต้อง</font>";
    document.getElementById("checkQ20").innerHTML = str;
    correct20 = 2;
    } else {
        str = "<font size='3' color='red'>ไม่ถูกต้อง</font>";
        document.getElementById("checkQ20").innerHTML = str;
    }
    // Display
    var point = correct1 + correct2 + correct3 + correct4 + correct51 + correct52 + correct53 + correct54 + correct61 + correct62 + correct63 + correct64 + correct71 + correct72 + correct73 + correct74 + correct81 + correct82 + correct83 + correct84 + correct9 + correct10 + correct11 + correct12 + correct13 + correct14 + correct15 + correct16 + correct17 + correct18 + correct19 + correct20;

    document.getElementById("after_submit").style.visibility = "visible";
    document.getElementById("number_correct").innerHTML = "คุณได้ " + point + " คะแนนจากทั้งหมด 40 คะแนน";
    document.getElementById("point").value = point;
}
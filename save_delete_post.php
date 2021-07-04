<?php
    $id = $_GET["id"];
    $point = $_GET["point"];

    $con = mysqli_connect("localhost", "root", "", "studyphp");
    $con->query("SET NAMES UTF8");

    if ($id != null)
        $sql = "SELECT user_id FROM deletepost WHERE user_id = $id";

    $rs = $con->query($sql);
    
    if(!$rs || mysqli_num_rows($rs) == 0)
    {
        $sql = "SELECT username, name FROM profiles WHERE id = $id";
        $rs = $con->query($sql);

        $username = "";
        $name = "";
        while($row = $rs->fetch_assoc()) {
            $username = $row['username'];
            $name = $row['name'];
        }

        $finish = 1;
        $status = "ไม่ผ่าน";
        if($point >= 10)
            $status = "ผ่าน";

        $sql = "INSERT INTO deletepost (user_id, user_username, user_name, post_test, pass, finished)
                VALUES('" . $id . "', '" . $username . "', '" . $name . "', '" . $point . "', '" . $status . "', '" . $finish . "')";

        $rs = $con->query($sql);
        if($rs)
            echo "success";
        else
            echo "fails";
    }
    else
    {
        echo "pass";
    }

    $con->close();
?>
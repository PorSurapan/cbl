<?php
    session_start();

    $id = $_GET["id"];
    $point = $_GET["point"];

    $con = mysqli_connect("localhost", "root", "", "studyphp");
    $con->query("SET NAMES UTF8");

    if ($id != null)
        $sql = "SELECT username, name FROM profiles WHERE id != ".$id.";

    $rs = $con->query($sql);

    $username = "";
    $name = "";
    while($row = $rs->fetch_assoc()) {
        $username = $row['username'];
        $name =  $row['name'];
    }

    $status = "ยังไม่ผ่าน"
    if($point >= 10)
        $status = "ผ่านแล้ว"
    $sql = "INSERT INTO design (user_id,user_username, user_name, pre_test,finished)
				VALUES('" . $id . "', '" . $username . "', '" . $name . "','". $point"','".$status"');

    $con->close();
?>
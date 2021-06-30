<?php
    $id = $_GET["id"];
    $point = $_GET["point"];

    $con = mysqli_connect("localhost", "root", "", "studyphp");
    $con->query("SET NAMES UTF8");

    if ($id != null)
        $sql = "SELECT username, name FROM profiles WHERE id = $id";


    $rs = $con->query($sql);

    $username = "";
    $name = "";
    while($row = $rs->fetch_assoc()) {
        $username = $row['username'];
        $name = $row['name'];
    }


    $status = "ไม่ผ่าน";
    if($point >= 10)
        $status = "ผ่าน";

    $sql = "INSERT INTO designpre (user_id, user_username, user_name, pre_test, finished)
			VALUES('" . $id . "', '" . $username . "', '" . $name . "', '" . $point . "', '" . $status . "')";

    $rs = $con->query($sql);
    if($rs)
        echo '--- Saved!! ---' . ' id:' . $id . ' username: ' . $username . ' name: ' . $name . ' point: ' . $point . ' status: ' . $status;
    else
        echo '';

    $con->close();
?>
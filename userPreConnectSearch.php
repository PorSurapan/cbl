<?php
    session_start();

    $word = $_GET["word"];
    
    $con = mysqli_connect("localhost", "root", "", "studyphp");
    $con->query("SET NAMES UTF8");

    if ($word != null)
        $sql = "SELECT user_username, user_name FROM connectpre WHERE user_username LIKE '%$word%' OR user_name LIKE '%$word%'";
    else
        $sql = "SELECT user_username, user_name FROM connectpre WHERE user_id = 0";

    $rs = $con->query($sql);

    $all = "";
    while($row = $rs->fetch_assoc()) {
        $all .= $row['user_username'] . "^" . $row['user_name'] . "^";
    }

    echo $all;

    $con->close();
?>
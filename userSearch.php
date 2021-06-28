<?php
    session_start();

    $word = $_GET["word"];
    
    $con = mysqli_connect("localhost", "root", "", "studyphp");
    $con->query("SET NAMES UTF8");

    if ($word != null)
        $sql = "SELECT username, name FROM profiles WHERE (id != 1) AND (username LIKE '%$word%' OR name LIKE '%$word%')";
    else
        $sql = "SELECT username, name FROM profiles WHERE id = 0";

    $rs = $con->query($sql);

    $all = "";
    while($row = $rs->fetch_assoc()) {
        $all .= $row['username'] . "^" . $row['name'] . "^";
    }

    echo $all;

    $con->close();
?>
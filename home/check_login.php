<?php
    $username = $_GET["username"];
    $password = $_GET["password"];
    
    $con = mysqli_connect("localhost", "root", "", "studyphp");
    $con->query("SET NAMES UTF8");
    $sql = "SELECT * FROM profiles WHERE username = '$username' AND password = '$password'";
    $rs = $con->query($sql);

    $user = "";
    if(!$rs || mysqli_num_rows($rs) == 0) {
        echo "";
    } else {
        while($row = $rs->fetch_assoc()) {
            $user = $row['id'] . "^" . $row['username'] . "^" . $row['name'];
        }

        echo "$user";
    }

    $con->close();
?>
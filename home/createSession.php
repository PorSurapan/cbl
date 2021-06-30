<?php
    $id = $_GET['id'];
    $username = $_GET['username'];
    $name = $_GET['name'];
    
    session_start();

    $_SESSION['logged'] = true;
    $_SESSION["s_id"] = $id;
    $_SESSION["s_username"] = $username;
    $_SESSION["s_name"] = $name;

    if($username == "Admin" && $name == "Admin CBL")
        header("Location: /cbl/dashboard_admin.php");
    else
        header("Location: /cbl/index.php");
?>
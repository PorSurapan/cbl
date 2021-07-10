<?php

    $con = mysqli_connect("localhost", "root", "");

    if(!$con){
        die("Could not connect: " . mysqli_error());
    }

    mysqli_select_db($con,"studyphp");

    $con -> query("SET NAMES UTF8");

    mysqli_close($con);

?>


<?php
    
    $id = $_GET['id'];
    $fname = $_GET['firstName'];
    $lname = $_GET['lastName'];
    $address = $_GET['address'];
    $birthday = $_GET['birthDay'];

    $con = mysqli_connect("localhost", "root", "");
    if(!$con)
        die("Could not connect: " . mysqli_error());

    mysqli_select_db($con, "example");
    $con -> query("SET NAMES UTF8");
    
    $sql = "UPDATE persons SET first_name = '" . $fname . "',
                                last_name = '" . $lname . "',
                                address = '" . $address . "',
                                birthday = '" . $birthday . "'
                                WHERE person_id = " . $id;

    $rs = mysqli_query($con, $sql);
    if(!$rs)
        
        echo "Error Update record";
    else    
        echo "Record update successfully";

    mysqli_close($con);
?>
<?php                
    $con = mysqli_connect("localhost", "root", "", "studyphp");
    $con->query("SET NAMES UTF8");

    // All Users ---------------------------------------------
    $sql = "SELECT * FROM profiles";
    $rs = $con->query($sql);
    $allUser = 0;
    while($row = $rs->fetch_assoc()) {
        $allUser = $allUser + 1;
    }
    $allUser = $allUser - 1;


    // Design Pre-Test ---------------------------------------
    $sql = "SELECT pass FROM designpre";
    $rs = $con->query($sql);
    $design_pre_pass = 0;
    $design_pre_fail = 0;
    while($row = $rs->fetch_assoc()) {
        if($row['pass'] == "ผ่าน")
            $design_pre_pass = $design_pre_pass + 1;
        else
            $design_pre_fail = $design_pre_fail + 1;
    }

    // Design Post-Test
    $sql = "SELECT pass FROM designpost";
    $rs = $con->query($sql);
    $design_post_pass = 0;
    $design_post_fail = 0;
    while($row = $rs->fetch_assoc()) {
        if($row['pass'] == "ผ่าน")
            $design_post_pass = $design_post_pass + 1;
        else
            $design_post_fail = $design_post_fail + 1;
    }


    // Connect Pre-Test -------------------------------------
    $sql = "SELECT pass FROM connectpre";
    $rs = $con->query($sql);
    $connect_pre_pass = 0;
    $connect_pre_fail = 0;
    while($row = $rs->fetch_assoc()) {
        if($row['pass'] == "ผ่าน")
            $connect_pre_pass = $connect_pre_pass + 1;
        else
            $connect_pre_fail = $connect_pre_fail + 1;
    }

    // Connect Post-Test
    $sql = "SELECT pass FROM connectpost";
    $rs = $con->query($sql);
    $connect_post_pass = 0;
    $connect_post_fail = 0;
    while($row = $rs->fetch_assoc()) {
        if($row['pass'] == "ผ่าน")
            $connect_post_pass = $connect_post_pass + 1;
        else
            $connect_post_fail = $connect_post_fail + 1;
    }


    // Insert Pre-Test -------------------------------------
    $sql = "SELECT pass FROM insertpre";
    $rs = $con->query($sql);
    $insert_pre_pass = 0;
    $insert_pre_fail = 0;
    while($row = $rs->fetch_assoc()) {
        if($row['pass'] == "ผ่าน")
            $insert_pre_pass = $insert_pre_pass + 1;
        else
            $insert_pre_fail = $insert_pre_fail + 1;
    }

    // Insert Post-Test
    $sql = "SELECT pass FROM insertpost";
    $rs = $con->query($sql);
    $insert_post_pass = 0;
    $insert_post_fail = 0;
    while($row = $rs->fetch_assoc()) {
        if($row['pass'] == "ผ่าน")
            $insert_post_pass = $insert_post_pass + 1;
        else
            $insert_post_fail = $insert_post_fail + 1;
    }


    // Display Pre-Test -------------------------------------
    $sql = "SELECT pass FROM displaypre";
    $rs = $con->query($sql);
    $display_pre_pass = 0;
    $display_pre_fail = 0;
    while($row = $rs->fetch_assoc()) {
        if($row['pass'] == "ผ่าน")
            $display_pre_pass = $display_pre_pass + 1;
        else
            $display_pre_fail = $display_pre_fail + 1;
    }

    // Display Post-Test
    $sql = "SELECT pass FROM displaypost";
    $rs = $con->query($sql);
    $display_post_pass = 0;
    $display_post_fail = 0;
    while($row = $rs->fetch_assoc()) {
        if($row['pass'] == "ผ่าน")
            $display_post_pass = $display_post_pass + 1;
        else
            $display_post_fail = $display_post_fail + 1;
    }


    // Edit Pre-Test -------------------------------------
    $sql = "SELECT pass FROM editpre";
    $rs = $con->query($sql);
    $edit_pre_pass = 0;
    $edit_pre_fail = 0;
    while($row = $rs->fetch_assoc()) {
        if($row['pass'] == "ผ่าน")
            $edit_pre_pass = $edit_pre_pass + 1;
        else
            $edit_pre_fail = $edit_pre_fail + 1;
    }

    // Edit Post-Test
    $sql = "SELECT pass FROM editpost";
    $rs = $con->query($sql);
    $edit_post_pass = 0;
    $edit_post_fail = 0;
    while($row = $rs->fetch_assoc()) {
        if($row['pass'] == "ผ่าน")
            $edit_post_pass = $edit_post_pass + 1;
        else
            $edit_post_fail = $edit_post_fail + 1;
    }




    $con->close();
?>
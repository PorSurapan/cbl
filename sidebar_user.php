<?php
    $con = mysqli_connect("localhost", "root", "", "studyphp");
    $con->query("SET NAMES UTF8");

    $id = $_SESSION['s_id'];
    
    // Design
    $sql = "SELECT * FROM designpre WHERE user_id = " . $id;
    $rs = $con->query($sql);
    if(!$rs || mysqli_num_rows($rs) == 0) {
        $design1 = "ยังไม่ทำ";
        $d1 = 0;
    } else {
        while($row = $rs->fetch_assoc()) {
            $d0 = $row['pre_test'] . "/12) " . $row['pass'];
        }
        $design1 = "ทำแล้ว (" . $d0;
        $d1 = 7;
    }
    
    $sql = "SELECT * FROM designpost WHERE user_id = " . $id;
    $rs = $con->query($sql);
    if(!$rs || mysqli_num_rows($rs) == 0) {
        $design2 = "ยังไม่ทำ";
        $d2 = 0;
    } else {
        while($row = $rs->fetch_assoc()) {
            $d0 = $row['post_test'] . "/12) " . $row['pass'];
        }
        $design2 = "ทำแล้ว (" . $d0;
        $d2 = 7;
    }


    // Connect
    $sql = "SELECT * FROM connectpre WHERE user_id = " . $id;
    $rs = $con->query($sql);
    if(!$rs || mysqli_num_rows($rs) == 0) {
        $connect1 = "ยังไม่ทำ";
        $c1 = 0;
    } else {
        while($row = $rs->fetch_assoc()) {
            $c0 = $row['pre_test'] . "/18) " . $row['pass'];
        }
        $connect1 = "ทำแล้ว (" . $c0;
        $c1 = 7;
    }
    
    $sql = "SELECT * FROM connectpost WHERE user_id = " . $id;
    $rs = $con->query($sql);
    if(!$rs || mysqli_num_rows($rs) == 0) {
        $connect2 = "ยังไม่ทำ";
        $c2 = 0;
    } else {
        while($row = $rs->fetch_assoc()) {
            $c0 = $row['post_test'] . "/18) " . $row['pass'];
        }
        $connect2 = "ทำแล้ว (" . $c0;
        $c2 = 7;
    }

    // Insert
    $sql = "SELECT * FROM insertpre WHERE user_id = " . $id;
    $rs = $con->query($sql);
    if(!$rs || mysqli_num_rows($rs) == 0) {
        $insert1 = "ยังไม่ทำ";
        $i1 = 0;
    } else {
        while($row = $rs->fetch_assoc()) {
            $i0 = $row['pre_test'] . "/16) " . $row['pass'];
        }
        $insert1 = "ทำแล้ว (" . $i0;
        $i1 = 7;
    }

    $sql = "SELECT * FROM insertpost WHERE user_id = " . $id;
    $rs = $con->query($sql);
    if(!$rs || mysqli_num_rows($rs) == 0) {
        $insert2 = "ยังไม่ทำ";
        $i2 = 0;
    } else {
        while($row = $rs->fetch_assoc()) {
            $i0 = $row['post_test'] . "/16) " . $row['pass'];
        }
        $insert2 = "ทำแล้ว (" . $i0;
        $i2 = 7;
    }

    // Display
    $sql = "SELECT * FROM displaypre WHERE user_id = " . $id;
    $rs = $con->query($sql);
    if(!$rs || mysqli_num_rows($rs) == 0) {
        $display1 = "ยังไม่ทำ";
        $p1 = 0;
    } else {
        while($row = $rs->fetch_assoc()) {
            $p0 = $row['pre_test'] . "/16) " . $row['pass'];
        }
        $display1 = "ทำแล้ว (" . $p0;
        $p1 = 7;
    }

    $sql = "SELECT * FROM displaypost WHERE user_id = " . $id;
    $rs = $con->query($sql);
    if(!$rs || mysqli_num_rows($rs) == 0) {
        $display2 = "ยังไม่ทำ";
        $p2 = 0;
    } else {
        while($row = $rs->fetch_assoc()) {
            $p0 = $row['post_test'] . "/16) " . $row['pass'];
        }
        $display2 = "ทำแล้ว (" . $p0;
        $p2 = 7;
    }

    // Edit
    $sql = "SELECT * FROM editpre WHERE user_id = " . $id;
    $rs = $con->query($sql);
    if(!$rs || mysqli_num_rows($rs) == 0) {
        $edit1 = "ยังไม่ทำ";
        $e1 = 0;
    } else {
        while($row = $rs->fetch_assoc()) {
            $e0 = $row['pre_test'] . "/16) " . $row['pass'];
        }
        $edit1 = "ทำแล้ว (" . $e0;
        $e1 = 7;
    }

    $sql = "SELECT * FROM editpost WHERE user_id = " . $id;
    $rs = $con->query($sql);
    if(!$rs || mysqli_num_rows($rs) == 0) {
        $edit2 = "ยังไม่ทำ";
        $e2 = 0;
    } else {
        while($row = $rs->fetch_assoc()) {
            $e0 = $row['post_test'] . "/16) " . $row['pass'];
        }
        $edit2 = "ทำแล้ว (" . $e0;
        $e2 = 7;
    }

    // Delete
    $sql = "SELECT * FROM deletepre WHERE user_id = " . $id;
    $rs = $con->query($sql);
    if(!$rs || mysqli_num_rows($rs) == 0) {
        $delete1 = "ยังไม่ทำ";
        $t1 = 0;
    } else {
        while($row = $rs->fetch_assoc()) {
            $t0 = $row['pre_test'] . "/16) " . $row['pass'];
        }
        $delete1 = "ทำแล้ว (" . $t0;
        $t1 = 7;
    }

    $sql = "SELECT * FROM deletepost WHERE user_id = " . $id;
    $rs = $con->query($sql);
    if(!$rs || mysqli_num_rows($rs) == 0) {
        $delete2 = "ยังไม่ทำ";
        $t2 = 0;
    } else {
        while($row = $rs->fetch_assoc()) {
            $t0 = $row['post_test'] . "/16) " . $row['pass'];
        }
        $delete2 = "ทำแล้ว (" . $t0;
        $t2 = 7;
    }

    // Final Exam
    $sql = "SELECT * FROM posttest WHERE user_id = " . $id;
    $rs = $con->query($sql);
    if(!$rs || mysqli_num_rows($rs) == 0) {
        $final = "ยังไม่ทำ";
        $point = "-";
        $f = 0;
    } else {
        while($row = $rs->fetch_assoc()) {
            $point = $row['test'] . "/16 (" . $row['pass'] . ")";
        }
        $final = "ทำแล้ว";
        $f = 16;
    }

    // Progress
    $sum = $d1 + $d2 + $c1 + $c2 + $i1 + $i2 + $p1 + $p2 + $e1 + $e2 + $t1 + $t2 + $f;
    $sql = "UPDATE profiles SET progress = '" . $sum . "%' WHERE id = " . $id;
    mysqli_query($con, $sql);

    $con->close();
?>

<nav id="sidebar">

    <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
        </button>
    </div>

    <div class="p-4 pt-5">
        <h3><a href="index.php" class="logo">Database Management with PHP</a></h3>

        <ul class="list-unstyled components mb-5">

            <!-- Profile -->
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">โปรไฟล์</a>
                
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="me.php">ข้อมูลส่วนตัว</a>
                    </li>
                    <li>
                        <a href="/cbl/home/logout.php">ออกจากระบบ</a>
                    </li>
                </ul>
            </li>

            <!-- Introduction -->
            <li>
                <a href="#pageSubmenuIntro" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">บทนำ</a>
                
                <ul class="collapse list-unstyled" id="pageSubmenuIntro">
                    <li>
                        <a href="content.php">ความรู้เบื้องต้น PHP</a>
                    </li>
                    <li>
                        <a href="tools.php">เตรียมเครื่องมือ</a>
                    </li>
                </ul>
            </li>

            <!-- Database design -->
            <li>
                <a href="#pageSubmenuDB" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">การออกแบบฐานข้อมูล</a>
                
                <ul class="collapse list-unstyled" id="pageSubmenuDB">
                    <li>
                        <a href="quiz_design.php">แบบทดสอบก่อนเรียน</a>
                    </li>
                    <li>
                        <a href="intro_phpmyadmin.php">การออกแบบฐานข้อมูล</a>
                    </li>
                    <li>
                        <a href="quiz_design_post.php">แบบทดสอบหลังเรียน</a>
                    </li>
                </ul>
            </li>

            <!-- Connect to db -->
            <li>
                <a href="#pageSubmenuConn" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">การเชื่อมต่อฐานข้อมูล</a>
                
                <ul class="collapse list-unstyled" id="pageSubmenuConn">
                    <li>
                        <a href="quiz_connect.php">แบบทดสอบก่อนเรียน</a>
                    </li>
                    <li>
                        <a href="connect_db.php">การเชื่อมต่อฐานข้อมูล</a>
                    </li>
                    <li>
                        <a href="quiz_connect_post.php">แบบทดสอบหลังเรียน</a>
                    </li>
                </ul>
            </li>

            <!-- Add data to db -->
            <li>
                <a href="#pageSubmenuAdd" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">การเพิ่มข้อมูล</a>
                
                <ul class="collapse list-unstyled" id="pageSubmenuAdd">
                    <li>
                        <a href="quiz_insert.php">แบบทดสอบก่อนเรียน</a>
                    </li>
                    <li>
                        <a href="add_data_php.php">การเพิ่มข้อมูล</a>
                    </li>
                    <li>
                        <a href="quiz_insert_post.php">แบบทดสอบหลังเรียน</a>
                    </li>
                </ul>
            </li>

            <!-- Show data from db -->
            <li>
                <a href="#pageSubmenuShow" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">การแสดงข้อมูล</a>
                
                <ul class="collapse list-unstyled" id="pageSubmenuShow">
                    <li>
                        <a href="quiz_display.php">แบบทดสอบก่อนเรียน</a>
                    </li>
                    <li>
                        <a href="show_data_php.php">การแสดงข้อมูล</a>
                    </li>
                    <li>
                        <a href="quiz_display_post.php">แบบทดสอบหลังเรียน</a>
                    </li>
                </ul>
            </li>

            <!-- Edit data in db -->
            <li>
                <a href="#pageSubmenuEdit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">การแก้ไขข้อมูล</a>
                
                <ul class="collapse list-unstyled" id="pageSubmenuEdit">
                    <li>
                        <a href="quiz_edit.php">แบบทดสอบก่อนเรียน</a>
                    </li>
                    <li>
                        <a href="update_data_php.php">การแก้ไขข้อมูล</a>
                    </li>
                    <li>
                        <a href="quiz_edit_post.php">แบบทดสอบหลังเรียน</a>
                    </li>
                </ul>
            </li>

            <!-- Delete data in db -->
            <li>
                <a href="#pageSubmenuDel" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">การลบข้อมูลด้วย</a>
                
                <ul class="collapse list-unstyled" id="pageSubmenuDel">
                    <li>
                        <a href="quiz_delete.php">แบบทดสอบก่อนเรียน</a>
                    </li>
                    <li>
                        <a href="del_data_php.php">การลบข้อมูล</a>
                    </li>
                    <li>
                        <a href="quiz_delete_post.php">แบบทดสอบหลังเรียน</a>
                    </li>
                </ul>
            </li>

            <!-- Final test -->
            <li>
                <a href="posttest.php">แบบทดสอบท้ายการเรียน</a>
            </li>

            <!-- About -->
            <li>
                <a href="about.php">เกี่ยวกับ</a>
            </li>
        </ul>

        <!-- Not use -->
        <!-- <div class="mb-5">
            <h3 class="h6">Subscribe for newsletter</h3>
            <form action="#" class="colorlib-subscribe-form">
                <div class="form-group d-flex">
                    <div class="icon"><span class="icon-paper-plane"></span></div>
                    <input type="text" class="form-control" placeholder="Enter Email Address">
                </div>
            </form>
        </div> -->
        
        <div class="footer">
            <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by 
                <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>

    </div>

</nav>
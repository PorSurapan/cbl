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
                        <a href="#">ข้อมูลส่วนตัว</a>
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
                        <a href="content.php">เนื้อหา</a>
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
                        <a href="intro_phpmyadmin.php">ความรู้เบื้องต้น phpMyAdmin</a>
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
                        <a href="add_data_php.php">เพิ่มข้อมูลด้วย PHP</a>
                    </li>
                    <li>
                        <a href="add_data_ajax.php">เพิ่มข้อมูลด้วย PHP & AJAX</a>
                    </li>
                    <li>
                        <a href="#">แบบทดสอบหลังเรียน</a>
                    </li>
                </ul>
            </li>

            <!-- Show data from db -->
            <li>
                <a href="#pageSubmenuShow" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">การแสดงข้อมูล</a>
                
                <ul class="collapse list-unstyled" id="pageSubmenuShow">
                    <li>
                        <a href="#">แบบทดสอบก่อนเรียน</a>
                    </li>
                    <li>
                        <a href="show_data_php.php">แสดงข้อมูลด้วย PHP</a>
                    </li>
                    <li>
                        <a href="show_data_ajax.php">แสดงข้อมูลด้วย PHP & AJAX</a>
                    </li>
                    <li>
                        <a href="#">แบบทดสอบหลังเรียน</a>
                    </li>
                </ul>
            </li>

            <!-- Edit data in db -->
            <li>
                <a href="#pageSubmenuEdit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">การแก้ไขข้อมูล</a>
                
                <ul class="collapse list-unstyled" id="pageSubmenuEdit">
                    <li>
                        <a href="#">แบบทดสอบก่อนเรียน</a>
                    </li>
                    <li>
                        <a href="update_data_php.php">แก้ไขข้อมูลด้วย PHP</a>
                    </li>
                    <li>
                        <a href="update_data_ajax.php">แก้ไขข้อมูลด้วย PHP & AJAX</a>
                    </li>
                    <li>
                        <a href="#">แบบทดสอบหลังเรียน</a>
                    </li>
                </ul>
            </li>

            <!-- Delete data in db -->
            <li>
                <a href="#pageSubmenuDel" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">การลบข้อมูลด้วย</a>
                
                <ul class="collapse list-unstyled" id="pageSubmenuDel">
                    <li>
                        <a href="#">แบบทดสอบก่อนเรียน</a>
                    </li>
                    <li>
                        <a href="del_data_php.php">ลบข้อมูลด้วย PHP</a>
                    </li>
                    <li>
                        <a href="del_data_ajax.php">ลบข้อมูลด้วย PHP & AJAX</a>
                    </li>
                    <li>
                        <a href="#">แบบทดสอบหลังเรียน</a>
                    </li>
                </ul>
            </li>

            <!-- Final test -->
            <li>
                <a href="#">แบบทดสอบท้ายการเรียน</a>
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
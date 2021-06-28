<?php
    session_start();
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $conn = mysqli_connect("localhost", "root", "", "studyphp");
    $conn->query("SET NAMES UTF8");
    $sql = "SELECT * FROM profiles WHERE username = '$username' AND password = '$password'";
    $rs = $conn->query($sql);

    if(!$rs || mysqli_num_rows($rs) == 0) {
        echo '<script type="text/javascript">';
        echo 'if(!alert("ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง!")) document.location = "index.php";';
        echo '</script>';
    }
    else
    {
        while($row = $rs->fetch_assoc()) {
            $id = $row['id'];
            $username = $row['username'];

            $_SESSION['logged'] = true;
            $_SESSION["s_id"] = $id;
			$_SESSION["s_username"] = $username;

            $conn->close();

            if($username == "Admin")
            {
                header("Location: /cbl/dashboard_admin.php");
            }
            else
            {
                header("Location: /cbl/index.php");
            }
        }
    }
?>
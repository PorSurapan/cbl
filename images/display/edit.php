<?php 

    $id = $_GET['id'];
    // Create connection
    $connect = new mysqli('localhost', 'root', '', 'example');

    // Check Connection
    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
      }

    $sql = "SELECT * FROM persons WHERE person_id='$id'";
    $result = $connect->query($sql);
    
    while($row = $result->fetch_assoc()) {
        $id1 = $row['person_id'];
        $fname = $row['first_name'];
        $lname = $row['last_name'];
        $address = $row['address'];
        $birthday = $row['birthday'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profiles_php</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <form method="POST" action="save_edit.php">    
    <div class="container">
        <h1>Profiles</h1>
        <table>
            <thead>
                <tr>
                   
                    <td width="15%">ชื่อ</td>
                    <td width="15%">นามสกุล</td>
                    <td width="15%">ที่อยู่</td>
                    <td width="15%">วันเกิด</td>
                   
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                                
                        <td><input type="text" id="firstName" name="firstName" value="<?php echo $fname ?>" ></td>
                        <td><input type="text" id="lastName" name="lastName" value="<?php echo $lname ?>" ></td>
                        <td><input type="text" id="address" name="address" value="<?php echo $address ?>" ></td>
                        <td><input type="text" id="birthDay" name="birthDay" value="<?php echo $birthday ?>" ></td>
                        
                    </tr>
                
            </tbody>
        </table>
        <br>
        <input id="uid" name="uid" type="hidden" value="<?php echo $id1 ?>">
        <input type="submit" id="submit" value="บันทึก">

    </div>
    </form>
</body>
</html>
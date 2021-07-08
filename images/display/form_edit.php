<?php 
    // Create connection
    $connect = new mysqli('localhost', 'root', '', 'example');

    // Check Connection
    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
      }

    $sql = "SELECT * FROM persons";
    $result = $connect->query($sql);

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
    <div class="container">
        <h1>Profiles</h1>
        <table>
            <thead>
                <tr>
                    <td width="20%">ชื่อ</td>
                    <td width="20%">นามสกุล</td>
                    <td width="20%">ที่อยู่</td>
                    <td width="20%">วันเกิด</td>
                    <td width="20%"></td>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['first_name']; ?></td>
                        <td class="name">
                         <?php echo $row['last_name'];?>
                        </td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['birthday']; ?></td>
                        <td><a href="edit.php?id=<?php echo $row['person_id']; ?>">แก้ไข</a></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>

    </div>
</body>
</html>
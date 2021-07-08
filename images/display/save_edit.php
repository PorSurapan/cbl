<?php
    
    $id = $_POST['uid'];
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $address = $_POST['address'];
    $birthday = $_POST['birthDay'];

    $conn = mysqli_connect("localhost", "root", "");
    if(!$conn)
        die("Could not connect: " . mysqli_error());

    mysqli_select_db($conn, "example");
    $conn -> query("SET NAMES UTF8");
    
    $sql = "UPDATE persons SET first_name = '" . $fname . "',
                                last_name = '" . $lname . "',
                                address = '" . $address . "',
                                birthday = '" . $birthday . "'
                                WHERE person_id = " . $id;

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

$conn->close();
?>

<a href="form_edit.php">Back</a>
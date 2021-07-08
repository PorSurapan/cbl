<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Ajax</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
        <div class="container">
        <h2>View data</h2>
            <table class="table table-bordered table-sm" >
            <thead><html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>View Register Database</title>
        <script src="showName.js"></script>
</head>
<body>
        <form action="view.php" method="get">
            <input list="name" name="search" onkeyup="searchName(this.value)">
            <datalist id="name">
            <option value="%">
            </datalist>
            <input type="submit" value="search">
        </form>
<?php
        // connect to the database
        $conn=mysqli_connect("localhost", "root", "","example");
        $conn->query("SET NAMES UTF8");
        // get results from database
        if (isset($_GET["search"])) {
        $name = $_GET["search"];
        $sql="SELECT * FROM persons WHERE first_name LIKE '$name'";
        } else {
        $sql="SELECT * FROM persons";
        }
        $rs=$conn->query($sql);
        // Print Header of Table
        echo "<table border='1' cellpadding='10' width=80%>";
        echo "<tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
				<th>Birthday</th>
              </tr>";
        // loop through results of database query, displaying them in the table
        while($row = $rs->fetch_assoc()) {

        // echo out the contents of each row into a table
        echo "<tr>";
        echo '<td>' . $row['first_name'] . '</td>';
        echo '<td>' . $row['last_name'] . '</td>';
        echo '<td>' . $row['address'] . '</td>';
		echo '<td>' . $row['birthday'] . '</td>';
        echo "</tr>";
        }
        echo "</table>"; // close table>
        $conn->close();
?>
</body>
</html>
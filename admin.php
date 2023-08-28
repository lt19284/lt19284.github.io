<!-- admin.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Panel</title>
</head>
<body>
<h1>Admin Panel</h1>
<?php
@include 'config.php';

$sql = "SELECT * FROM ketqua";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table><tr><th>ID</th><th>Điểm</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["diem"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Không có dữ liệu.";
}

mysqli_close($conn);
?>
</body>
</html>
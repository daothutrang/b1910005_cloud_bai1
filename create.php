<?php
$MYSQL_ADDON_HOST=getenv('MYSQL_ADDON_HOST');
$MYSQL_ADDON_PORT=getenv('MYSQL_ADDON_PORT');
$MYSQL_ADDON_BD=getenv('MYSQL_ADDON_DB'); $MYSQL_ADDON_USER=getenv('MYSQL_ADDON_USER'); $MYSQL_ADDON_PASSWORD=getenv('MYSQL_ADDON_PASSWORD');
$MYSQL_ADDON_URI=getenv('MYSQL_ADDON_URI');

echo "$MYSQL_ADDON_URI";
// Kết nối cơ sở dữ liệu MySQL
$conn = mysqli_connect($MYSQL_ADDON_HOST, $MYSQL_ADDON_USER, $MYSQL_ADDON_PASSWORD, $MYSQL_ADDON_BD); // Kiểm tra kết nối
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Hàm tạo bảng
$sql = "CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)";
if (mysqli_query($conn, $sql)) {
    echo "Table created successfully.";
} else {
    echo "ERROR: Could not able to execute $sql." mysqli_error($conn);
}
?>
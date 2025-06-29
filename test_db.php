<?php
$conn = new mysqli('localhost', 'root', '', 'testdb');

if ($conn->connect_error) {
    die("Lỗi kết nối: " . $conn->connect_error);
}

echo "✅ Kết nối thành công!";
?>
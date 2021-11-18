<?php

$servername = "localhost:3306";
$username = "admin";
$password = "123456";
$dbname = "igg";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$sql = "SELECT * FROM new_product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] ;
    }
} else {
    echo "0 结果";
}
$conn->close();
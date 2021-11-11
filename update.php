<?php
$con = mysqli_connect("localhost:3306", "admin", "123456", "1");
if (mysqli_connect_errno()) {
    echo "连接失败: " . mysqli_connect_error();
}

mysqli_query($con, "UPDATE just SET email='wuyou@126.com' WHERE FirstName='John' AND LastName='Doe'");
mysqli_close($con);


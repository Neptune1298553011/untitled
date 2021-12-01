
<?php

function conn(){
    $servername = "localhost:3306";
    $username = "admin";
    $password = "123456";
    $dbname = "igg";

// 创建连接
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    }
    return $conn;
}
$conn=conn();
$keywords=$_POST['keywords'];
$sql="SELECT * FROM product where id like '%$keywords'";
$result = $conn->query($sql);
if (!$result){
    die('wufaduqushuju:'.mysqli_error());
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>搜索</title>
</head>
<body>
      <form action="search.php" method="post">
          用户名: <input type="text" name="keywords" placeholder="请输入查询内容"/>
          <input type="submit" value="提交查询"/>
      </form>

</body>
</html>
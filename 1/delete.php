<?php
$con=mysqli_connect("localhost:3306","admin","123456","1");
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

mysqli_query($con,"DELETE FROM just WHERE LastName='Moe'");

mysqli_close($con);
echo "删除成功";
?><?php

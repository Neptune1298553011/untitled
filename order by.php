<?php
    $con=mysqli_connect("localhost:3306","admin","123456","1");
    if (mysqli_connect_errno())
    {
        echo "连接失败: " . mysqli_connect_error();
    }

    $result = mysqli_query($con,"SELECT * FROM just order by id");

    while($row = mysqli_fetch_array($result)){
        echo $row['firstname'];
        echo " " . $row['lastname'];
        echo " " . $row['id'];
        echo "<br>";
    }




mysqli_close($con);
?>

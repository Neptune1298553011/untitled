<?php
       include("config.php");
$conn=conn();
$keywords=$_POST['keywords'];
$sql="SELECT * FROM product where id like '%$keywords'";
$result = $conn->query($sql);
if (!$result){
    die('wufaduqushuju:'.mysqli_error());
}
       echo "<h2> Mysql Where </h2>";
       echo "<table border='1'><tr><td>ID</td><td>id</td><td>product_price</td>>";
       while($row=mysqli_fetch_assoc($result)){
           echo "<tr><td>{$row['id']}</td>>";
           echo "<tr><td>{$row['product_price']}</td>>";
           echo"</tr>";
       }
       echo"</table>";
       ?>
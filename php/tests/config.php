<?php
$conn=mysqli_connect("localhost:3306","admin","123456");
if(!$conn){
    die('could not connnect:' .mysqli_error());
}
mysqli_query("set name latinl");
mysqli_select_db("igg",$conn);

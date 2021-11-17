<?php
$servername = "localhost:3306";
$username = "admin";
$password = "123456";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
echo "";
?>
<!DOCTYpe html>
<html lang="zh-cn">

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <mete http-equiv="Content-Type" content="'text/html; charset=utf-8" />
    <title>商城</title>
    <link href="./css/2.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="jquery-1.11.0.js"></script>

</head>

<div id="#nav-header">
    <div class="header">

<a href="http://localhost/school/0.php">
    <img src="./image/statics/3.jpg">
</a>
<nav>
      <ul>
          <li>首页</li>
          <li><a href="http://localhost/untitled/0.php">首页</a> </li>
          <li>游戏</li>
          <li>类别</li>
      </ul>
</nav>
<div>搜索框</div>
<div>
    if(登入成功的时候)
</div>
    </div>
</div>
<div style="width: 1200px;height: 1900px;border: 1px solid red;margin: 0 auto;margin-top: 20px"></div>

<script type="text/javascript">
$(function (){
    var nav_position=10;
    $('nav-header').height();

    $(document).scroll(function (){
        $(window).scrollTop()>=nav_position?$('#nav-header').addClass('fixed'):$('#nav-header').removeClass
        ('fixed');
    })

})
</script>
<body>

</body>
</html>







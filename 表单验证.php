<h2>PHP 表单验证实例</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    名字: <input type="text" name="name">
    <br><br>
    E-mail: <input type="text" name="email">
    <br><br>
    网址: <input type="text" name="website">
    <br><br>
    备注: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    性别:
    <input type="radio" name="gender" value="female">女
    <input type="radio" name="gender" value="male">男
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>您输入的内容是:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

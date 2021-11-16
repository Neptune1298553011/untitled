<?php
$q = isset($_GET['q'])? htmlspecialchars($_GET['q']) : '';
if($q) {
    if($q =='BAIDU') {
        echo '百度<br>http://www.baidu.com';
    } else if($q =='GOOGLE') {
        echo 'Google 搜索<br>http://www.google.com';
    } else if($q =='TAOBAO') {
        echo '淘宝<br>http://www.taobao.com';
    }
} else {
?>

    <form action="" method="get">
        <select name="q">
            <option value="">选择一个站点:</option>
            <option value="BAIDU">Baidu</option>
            <option value="GOOGLE">Google</option>
            <option value="TAOBAO">Taobao</option>
        </select>
        <input type="submit" value="提交">
    </form>
    <?php
}

$q = isset($_POST['q'])? $_POST['q'] : '';
if(is_array($q)) {
    $sites = array(
        'BAIDU' => '百度: http://www.baidu.com',
        'GOOGLE' => 'Google 搜索: http://www.google.com',
        'TAOBAO' => '淘宝: http://www.taobao.com',
    );
    foreach($q as $val) {
        // PHP_EOL 为常量，用于换行
        echo $sites[$val] . PHP_EOL;
    }

} else {
    ?>
    <form action="" method="post">
        <select multiple="multiple" name="q[]">
            <option value="">选择一个站点:</option>
            <option value="BAIDU">Baidu</option>
            <option value="GOOGLE">Google</option>
            <option value="TAOBAO">Taobao</option>
        </select>
        <input type="submit" value="提交">
    </form>
<?php

}
$q = isset($_GET['q'])? htmlspecialchars($_GET['q']) : '';
    if($q) {
    if($q =='RUNOOB') {
    echo '菜鸟教程<br>http://www.runoob.com';
    } else if($q =='GOOGLE') {
    echo 'Google 搜索<br>http://www.google.com';
    } else if($q =='TAOBAO') {
    echo '淘宝<br>http://www.taobao.com';
    }
    } else {
   ?> <form action="" method="get">
    <input type="radio" name="q" value="RUNOOB" />Runoob
    <input type="radio" name="q" value="GOOGLE" />Google
    <input type="radio" name="q" value="TAOBAO" />Taobao
    <input type="submit" value="提交">
    <?php
    }
    ?>
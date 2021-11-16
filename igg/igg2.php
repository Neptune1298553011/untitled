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
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,Chrome=1" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="author" content="prince59000">

    <meta name="keywords" content="泡泡骚；马克杯；潮玩；火箭鸡；乖乖龙；周边；IGG周边商城；王国纪元; 城堡争霸；IGG； 王国纪元贴吧，王国纪元官网，IGG贴吧，IGG官网；王国纪元官方微博；南瓜公爵；刺客鼠标垫；雷霆之翼，南瓜女巫；誓言骑士；玫瑰骑士；大个子；小恶魔；大帝王座手提袋；英雄帆布袋；">
    <meta name="description" itemprop="description" content="IGG周边商城是IGG游戏王国纪元、时光公主、城堡争霸的官方周边商城。IGG周边团队致力于服务于全球玩家，给到玩家更多更优质体验的地方，我们根据玩家喜爱的英雄原型，设计并制作很多好玩的实物周边通过全球物流配送服务，让游戏进入生活，有更好的线下体验。
">
    <meta itemprop="name" content="IGG周边商城 官方网站 - 王国纪元、时光公主、城堡争霸" />
    <meta itemprop="image" content="//statics.igg.com/game/1993/goods/2021/10/09/062810_61617ccaa13607309.jpg" />
    <title>
        IGG周边商城 官方网站 - 王国纪元、时光公主、城堡争霸    </title>

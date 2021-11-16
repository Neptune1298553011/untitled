<?php

$servername = "localhost:3306";
$username = "admin";
$password = "123456";
$dbname = "igg";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

class Ema
{
    public $id = "";
    public $product_price = "";
    public $product_information = "";
    public $product_name ="";
}

$e = new Ema();
$e->id = "1";
$e->product_price = "10";
$e->product_information = "拉法耶特重磅登场！在现实中苏醒，守护你左右！预售期：9/15 ~ 10/9，购买即赠价值约19RMB的游戏道具礼包！

所属游戏: 《时光公主》

主要材料: 超柔水晶绒、合金、硅胶、毛毡

填充物: 聚酯纤维

尺寸: 高约14CM";
$e->product_name = "《时光公主》拉法耶特Q萌毛绒挂件";

echo json_encode($e);

class Emb
{
    public $id = "";
    public $product_price = "";
    public $product_information = "";
    public $product_name ="";
}

$e = new Emb();
$e->id = "2";
$e->product_price = "16";
$e->product_information = "时光公主 × 维也纳艺术史博物馆梦幻精致礼盒套装，维也纳艺术史博物馆，全世界第四大艺术博物馆。
具有文艺复兴时期的壮丽外观，更巧妙使用各色大理石的庄严内部装饰，不仅以丰富的收藏品吸引群众，更以博物馆的外观与内部装饰驰名于世。

发货时间: 十月中/下旬

所属游戏: 时光公主

书签材质&工艺: 黄铜，烤漆填色，电镀";
$e->product_name = "时光公主 × 维也纳艺术史博物馆 梦幻精致礼盒套装";

echo json_encode($e);

class Emc
{
    public $id = "";
    public $product_price = "";
    public $product_information = "";
    public $product_name ="";
}

$e = new Emc();
$e->id = "3";
$e->product_price = "12";
$e->product_information = "《王国纪元》英雄魔物天团，立志成为制霸世界的传奇英雄 —— 光明之子！

所属游戏: 王国纪元

材质: PVC

尺寸: 78mm*60mm*80mm

数量: 单个盲盒/整盒已售罄

温馨提示: 盲盒为特殊商品，非质量问题不支持退换。想要几个请拍几份，不保证无重复款。";
$e->product_name = "《王国纪元》光明之子魔物天团盲盒";

echo json_encode($e);

class Emd
{
    public $id = "";
    public $product_price = "";
    public $product_information = "";
    public $product_name ="";
}

$e = new Emd();
$e->id = "4";
$e->product_price = "20";
$e->product_information = "2021年《王国纪元》第一款短袖T恤重磅推出，Q版图案可盐可甜；黑、白两色随心选择，时髦百搭；材质亲肤，炎炎夏日的不二之选

品名: 《王国纪元》萌萌英雄现身T恤

所属游戏: 王国纪元

款式: 圆领

颜色: 白色、黑色";
$e->product_name = "《王国纪元》萌萌英雄现身T恤";

echo json_encode($e);

class Eme
{
    public $id = "";
    public $product_price = "";
    public $product_information = "";
    public $product_name ="";
}

$e = new Eme();
$e->id = "5";
$e->product_price = "28";
$e->product_information = "游戏经典LOGO，金色与黑色金属线搭配，简洁百搭。

所属游戏: 城堡争霸

款式: 棒球帽

材质: 30%羊毛，70%涤纶

产品尺寸: 56-60 CM";
$e->product_name = "《城堡争霸》LOGO棒球帽";

echo json_encode($e);

class Emf
{
    public $id = "";
    public $product_price = "";
    public $product_information = "";
    public $product_name ="";
}

$e = new Emf();
$e->id = "6";
$e->product_price = "122";
$e->product_information = "全球500只，限量珍藏。

所属游戏: 王国纪元

主要材质: PU

产品尺寸: 138(L) x 90(W) x 100(H) MM

包装尺寸: 220(L) x 240(W) x 105（H）MM";
$e->product_name = "《王国纪元》异界引路人场景手办";

echo json_encode($e);

class Emg
{
    public $id = "";
    public $product_price = "";
    public $product_information = "";
    public $product_name ="";
}

$e = new Emg();
$e->id = "7";
$e->product_price = "12";
$e->product_information = "《王国纪元》英雄魔物天团，立志成为制霸世界的传奇英雄 —— 光明之子！

所属游戏: 王国纪元

材质: PVC

尺寸: 78mm*60mm*80mm

数量: 单个盲盒/整盒已售罄

温馨提示: 盲盒为特殊商品，非质量问题不支持退换。想要几个请拍几份，不保证无重复款。";
$e->product_name = "《王国纪元》光明之子魔物天团盲盒";

echo json_encode($e);





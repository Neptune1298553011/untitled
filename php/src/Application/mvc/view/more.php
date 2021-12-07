<?php

include_once '../dao/ProductCategoryDao.php';

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
$sql = "SELECT page FROM product ";
$asresult = $conn->query($sql);
$conn->close();
$num=6;
if($_GET["page"]){
    $page=($_GET["page"]-1)*$num;
    $conn=conn();
    $sql= "SELECT * FROM product ORDER  BY id  limit {$page},{$num}";
    $zsresult = $conn ->query($sql);
    $conn ->close();
}else{
    $conn=conn();
    $sql= "SELECT * FROM product ORDER  BY id  limit 0,{$num}";
    $zsresult = $conn ->query($sql);
    $conn ->close();
}





?>

<?php
require 'path.php';
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
        <meta itemprop="name" content="《城堡争霸》LOGO棒球帽- IGG周边商城 官方网站" />
        <meta itemprop="image" content="//statics.igg.com/game/1993/goods/2021/10/09/062810_61617ccaa13607309.jpg" />
        <title>
            《城堡争霸》LOGO棒球帽- IGG周边商城 官方网站    </title>
        <meta property="og:title" content="#IGGStore【《城堡争霸》LOGO棒球帽】" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="//statics.igg.com/shop/goods/2020/12/24/20201224e21ccd01a6b45d315c6d5b3834680f3781867.jpg" />

        <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
        <!-- <link rel="stylesheet" href="/styles/idangerous.swiper.css"> -->
        <link rel="stylesheet" href="<?php echo STYLEPATH ;?>css/swiper.min.css">
        <link rel="stylesheet" href="<?php echo STYLEPATH ;?>css/layout.css">
        <link rel="stylesheet" href="<?php echo STYLEPATH ;?>css/style.css">
        <!--[if lte IE 9]>

        <![endif]-->

        <!-- <script src="//statics.igg.com/shop/js/jquery.min.js"></script> -->
        <script>
            var SHOP_LANGUAGE = 'chs';
        </script>
        <script src="../../../../public/scripts/jquery-1.11.1.min.js"></script>
        <script src="../../../../public/scripts/cookies_popup.php"></script>



        <script>!function(a){var e="https://s.go-mpulse.net/boomerang/",t="addEventListener";if("False"=="True")a.BOOMR_config=a.BOOMR_config||{},a.BOOMR_config.PageParams=a.BOOMR_config.PageParams||{},a.BOOMR_config.PageParams.pci=!0,e="https://s2.go-mpulse.net/boomerang/";if(window.BOOMR_API_key="F8PGR-MHD75-KZ22G-MNSSF-GYYDZ",function(){function n(e){a.BOOMR_onload=e&&e.timeStamp||(new Date).getTime()}if(!a.BOOMR||!a.BOOMR.version&&!a.BOOMR.snippetExecuted){a.BOOMR=a.BOOMR||{},a.BOOMR.snippetExecuted=!0;var i,_,o,r=document.createElement("iframe");if(a[t])a[t]("load",n,!1);else if(a.attachEvent)a.attachEvent("onload",n);r.src="javascript:void(0)",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="width:0;height:0;border:0;display:none;",o=document.getElementsByTagName("script")[0],o.parentNode.insertBefore(r,o);try{_=r.contentWindow.document}catch(O){i=document.domain,r.src="javascript:var d=document.open();d.domain='"+i+"';void(0);",_=r.contentWindow.document}_.open()._l=function(){var a=this.createElement("script");if(i)this.domain=i;a.id="boomr-if-as",a.src=e+"F8PGR-MHD75-KZ22G-MNSSF-GYYDZ",BOOMR_lstart=(new Date).getTime(),this.body.appendChild(a)},_.write("<bo"+'dy onload="document._l();">'),_.close()}}(),"".length>0)if(a&&"performance"in a&&a.performance&&"function"==typeof a.performance.setResourceTimingBufferSize)a.performance.setResourceTimingBufferSize();!function(){if(BOOMR=a.BOOMR||{},BOOMR.plugins=BOOMR.plugins||{},!BOOMR.plugins.AK){var e=""=="true"?1:0,t="",n="ouoooeixziriaynenzxq-f-c71a5b939-clientnsv4-s.akamaihd.net",i="false"=="true"?2:1,_={"ak.v":"32","ak.cp":"842229","ak.ai":parseInt("537709",10),"ak.ol":"0","ak.cr":85,"ak.ipv":4,"ak.proto":"h2","ak.rid":"11c2e8c4","ak.r":40584,"ak.a2":e,"ak.m":"b","ak.n":"ff","ak.bpcip":"117.28.231.0","ak.cport":52838,"ak.gh":"23.202.34.124","ak.quicv":"","ak.tlsv":"tls1.3","ak.0rtt":"","ak.csrc":"-","ak.acc":"","ak.t":"1638166127","ak.ak":"hOBiQwZUYzCg5VSAfCLimQ==2tbKffxMLdupJ12NbnpTvREJe+ONwgQKaChHkhlM7muM+C/bOgwYDn8rptFp7rDpnbIeO0C8jkDlSfAtsBHB/pZOe4FzMY61tpMypKgWuNcZU0ImNBJKnToNOBqjBxzZeNvmvN3GlRMnJPG1ZSTjDjAeeJAuXSPyREAyJXpOct2qmf6BLq5lmj/kICsf8rOV0ClPzs5IXeNCP3hFj6YX7jdVk9Ib8ex7rsHtzyWxGtPNAR+I2cKuWGKewL/MwcHH1MuR2Qy0VnUeMy15boVDxvWee8NeAGUAFnF25B03d3iU2TzhI0kqKjO+C8m+M5kamHM6Sg0jv0puA/RbfK7NMki1Dlk3tNjy4s1Rot3QebYL+hcOmARnq4Uj59K2ENw4KPNkFii2vWyYmBPLqiXPJaYsr+CnIbPzZElSL8wDGUM=","ak.pv":"157","ak.dpoabenc":"","ak.tf":i};if(""!==t)_["ak.ruds"]=t;var o={i:!1,av:function(e){var t="http.initiator";if(e&&(!e[t]||"spa_hard"===e[t]))_["ak.feo"]=void 0!==a.aFeoApplied?1:0,BOOMR.addVar(_)},rv:function(){var a=["ak.bpcip","ak.cport","ak.cr","ak.csrc","ak.gh","ak.ipv","ak.m","ak.n","ak.ol","ak.proto","ak.quicv","ak.tlsv","ak.0rtt","ak.r","ak.acc","ak.t","ak.tf"];BOOMR.removeVar(a)}};BOOMR.plugins.AK={akVars:_,akDNSPreFetchDomain:n,init:function(){if(!o.i){var a=BOOMR.subscribe;a("before_beacon",o.av,null,null),a("onbeacon",o.rv,null,null),o.i=!0}return this},is_complete:function(){return!0}}}}()}(window);</script></head>

    <body class="cn ">

    <script src="../../../../public/scripts/passport.js"></script>
    <div class="js_lang_package" style="display:none;" data-success-title="成功"
         data-fail-title="失败">lang package</div>


    <div class="wrap">

        <div class="head">
            <div class="common-head-tips ie-browser-tip clearfix" style="display: none;;">
                <div class="tips">浏览器版本过低，无法注册登录，请使用 IE 11、Chrome 等浏览器访问</div>
                <span class="head-tips-close"></span>
            </div>

            <div class="fl">
                <a id="head-menu" class="link head-menu"> <i class="icon head-menu-btn"></i> </a>
                <div class="logo"> <a class="link" href="/"></a> </div>
                <!-- <a class="link head-code" href="http://castleclash.igg.com/event/cdkey/" target="_blank"> -->
                <!-- CODE -->
                <!-- </a> -->
            </div>


            <div class="fr">
                <div class="link head-search after open-son">
                    <div class="fl head-search-body">
                        <div class="head-search-search_btn">
                            搜索                        </div>
                        <input type="text" name="sale_name" value=""
                               placeholder="请输入商品名称、游戏..." class="nav-search-input">
                    </div>
                    <a class="fl head-search-btn">
                    </a>
                </div>
                <div class="link head-user low-ie-version-hide">
                    <a class="link-link login-btn" href="javascript:;" data-login-flag="1"
                       data-login-url="https://passport.igg.com/account/login.php?url=https%3A%2F%2Fstore.igg.com%2Fproduct%2Findex%3Fsort%3D3%26page%3D1&lang=cn">
                        登录                    </a>
                    /
                    <a class="link-link register-btn" href="javascript:;">
                        注册                    </a>
                </div>

                <div class="link default low-ie-version-hide">
                    <a class="link-link login-btn" href="javascript:void(0);">我的订单</a>
                </div>

                <div class="link head-select lang">
                    <div class="select-current">
                        US$
                    </div>
                    <ul class="select-list">
                        <li class="select-item currency_switch current" data-type="1">
                            <span class="icon-text">US$ -美元</span>
                        </li></ul>
                </div>                <div class="link head-select">
                    <div class="select-current">
                        <i class="icon icon-cns"></i>
                    </div>
                    <ul class="select-list">
                        <li class="select-item current lang_switch" data-language="chs">
                            <i class="icon icon-cns"></i>
                            <span class="icon-text">- 简体中文</span>
                        </li>
                        <li class="select-item  lang_switch" data-language="eng">
                            <i class="icon icon-en"></i>
                            <span class="icon-text">- English</span>
                        </li>
                        <li class="select-item  lang_switch" data-language="chs_tw">
                            <i class="icon icon-cn"></i>
                            <span class="icon-text">- 繁體中文</span>
                        </li>
                    </ul>
                </div>
                <a class="link" id="cart-menu" data-is-login="">
                    <i class="icon head-cart">
                        <p class="head-cart-num">
                            0                        </p>
                    </i>
                </a>
            </div>
        </div>

        <script>
            var search_gjz = "请用关键字进行搜索"
        </script><div class="nav-body" style="z-index:999;">
            <div class="top">
                <a class="bt-close" id="nav-close">
                    关闭        </a>
            </div>
            <ul class="menu-list">
                <li class="menu-item">
                    <a class="link" href="/index/index">首页</a>
                </li>

                <li class="menu-item open-son">
                    <a class="link" href="#">游戏</a>
                    <div class="secondary_bar ">
                        <ul class="menu-list-list">
                            <li class="menu-item-third">
                                <a class="link-link" href="/product/index?gcid=1051">王国纪元</a>
                            </li>
                            <li class="menu-item-third">
                                <a class="link-link" href="/product/index?gcid=1030">城堡争霸</a>
                            </li>
                            <li class="menu-item-third">
                                <a class="link-link" href="/product/index?gcid=1074">时光公主</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-item open-son">
                    <a class="link" href="#">类别</a>
                    <div class="secondary_bar ">
                        <ul class="menu-list-list">

                            <li class="menu-item-third   more-third ">
                                <a class="link-link" href="javascript:void(0);">数码配件</a>
                                <ul class="menu-list-third third">
                                    <li class="menu-item-item">
                                        <a class="link-third" href="/product/index?level=2&category_id=2&active_id=51">手机壳</a>
                                    </li>
                                    <li class="menu-item-item">
                                        <a class="link-third" href="/product/index?level=2&category_id=58&active_id=51">键盘</a>
                                    </li>
                                    <li class="menu-item-item">
                                        <a class="link-third" href="/product/index?level=2&category_id=52&active_id=51">手机支架</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-third  ">
                                <a class="link-link" href="/product/index?level=1&category_id=55&active_id=55">文具</a>
                            </li>
                            <li class="menu-item-third   more-third ">
                                <a class="link-link" href="javascript:void(0);">收藏品</a>
                                <ul class="menu-list-third third">
                                    <li class="menu-item-item">
                                        <a class="link-third" href="/product/index?level=2&category_id=9&active_id=1">手办模型</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-third  ">
                                <a class="link-link" href="/product/index?level=1&category_id=5&active_id=5">鼠标垫</a>
                            </li>
                            <li class="menu-item-third  ">
                                <a class="link-link" href="/product/index?level=1&category_id=56&active_id=56">家居用品</a>
                            </li>
                            <li class="menu-item-third  ">
                                <a class="link-link" href="/product/index?level=1&category_id=50&active_id=50">杯子</a>
                            </li>
                            <li class="menu-item-third   more-third ">
                                <a class="link-link" href="javascript:void(0);">服饰</a>
                                <ul class="menu-list-third third">
                                    <li class="menu-item-item">
                                        <a class="link-third" href="/product/index?level=2&category_id=23&active_id=8">T恤</a>
                                    </li>
                                    <li class="menu-item-item">
                                        <a class="link-third" href="/product/index?level=2&category_id=24&active_id=8">帽子</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-third  ">
                                <a class="link-link" href="/product/index?level=1&category_id=14&active_id=14">其他</a>
                            </li>
                            <li class="menu-item-third   more-third ">
                                <a class="link-link" href="javascript:void(0);">箱包</a>
                                <ul class="menu-list-third third">
                                    <li class="menu-item-item">
                                        <a class="link-third" href="/product/index?level=2&category_id=47&active_id=46">手提袋</a>
                                    </li>
                                    <li class="menu-item-item">
                                        <a class="link-third" href="/product/index?level=2&category_id=57&active_id=46">化妆包</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <!-- main begin -->

        <div class="list-content">
            <div class="list-select">
                <ul class="list after">
                    <li class="item">
                        <a class="link" href="/product/index">
                            全部					</a>
                    </li>

                    <li class="item more ">
                        <a class="link " href="#">
                            游戏					</a>
                        <ul class="list-list">
                            <li class="item-item "">
                            <a class="link-link" href="/product/index?gcid=1051&sale_name=">王国纪元</a>
                            </li>
                            <li class="item-item "">
                            <a class="link-link" href="/product/index?gcid=1030&sale_name=">城堡争霸</a>
                            </li>
                            <li class="item-item "">
                            <a class="link-link" href="/product/index?gcid=1074&sale_name=">时光公主</a>
                            </li>
                        </ul>
                    </li>

                    <li class="item more  ">
                        <a class="link" href="/product/index?active_id=51&gcid=0&sale_name=&level=1&category_id=51">
                            数码配件
                        </a>
                        <ul class="list-list">
                            <li class="item-item ">
                                <a class="link-link" href="/product/index?active_id=51&gcid=0&sale_name=&level=2&category_id=2">手机壳</a>
                            </li> <li class="item-item ">
                                <a class="link-link" href="/product/index?active_id=51&gcid=0&sale_name=&level=2&category_id=58">键盘</a>
                            </li> <li class="item-item ">
                                <a class="link-link" href="/product/index?active_id=51&gcid=0&sale_name=&level=2&category_id=52">手机支架</a>
                            </li></ul>
                    </li><li class="item  ">
                        <a class="link" href="/product/index?active_id=55&gcid=0&sale_name=&level=1&category_id=55">
                            文具
                        </a>
                    </li> <li class="item more  ">
                        <a class="link" href="/product/index?active_id=1&gcid=0&sale_name=&level=1&category_id=1">
                            收藏品
                        </a>
                        <ul class="list-list">
                            <li class="item-item ">
                                <a class="link-link" href="/product/index?active_id=1&gcid=0&sale_name=&level=2&category_id=9">手办模型</a>
                            </li></ul>
                    </li><li class="item  ">
                        <a class="link" href="/product/index?active_id=5&gcid=0&sale_name=&level=1&category_id=5">
                            鼠标垫
                        </a>
                    </li> <li class="item  ">
                        <a class="link" href="/product/index?active_id=56&gcid=0&sale_name=&level=1&category_id=56">
                            家居用品
                        </a>
                    </li> <li class="item  ">
                        <a class="link" href="/product/index?active_id=50&gcid=0&sale_name=&level=1&category_id=50">
                            杯子
                        </a>
                    </li> <li class="item more  ">
                        <a class="link" href="/product/index?active_id=8&gcid=0&sale_name=&level=1&category_id=8">
                            服饰
                        </a>
                        <ul class="list-list">
                            <li class="item-item ">
                                <a class="link-link" href="/product/index?active_id=8&gcid=0&sale_name=&level=2&category_id=23">T恤</a>
                            </li> <li class="item-item ">
                                <a class="link-link" href="/product/index?active_id=8&gcid=0&sale_name=&level=2&category_id=24">帽子</a>
                            </li></ul>
                    </li><li class="item  ">
                        <a class="link" href="/product/index?active_id=14&gcid=0&sale_name=&level=1&category_id=14">
                            其他
                        </a>
                    </li> <li class="item more  ">
                        <a class="link" href="/product/index?active_id=46&gcid=0&sale_name=&level=1&category_id=46">
                            箱包
                        </a>
                        <ul class="list-list">
                            <li class="item-item ">
                                <a class="link-link" href="/product/index?active_id=46&gcid=0&sale_name=&level=2&category_id=47">手提袋</a>
                            </li> <li class="item-item ">
                                <a class="link-link" href="/product/index?active_id=46&gcid=0&sale_name=&level=2&category_id=57">化妆包</a>
                            </li></ul>
                    </li>
                </ul>
                <ul class="list after sorption">
                    <li class="item more">
                        <a class="link" href="#">
                            最新
                        </a>
                        <ul class="list-list">
                            <li class="item-item current-current">
                                <a class="link-link" href="/product/index?category_id=0&level=0&gcid=0&sale_name=&sort=3">
                                    最新
                                </a>
                            </li>
                            <li class="item-item ">
                                <a class="link-link" href="/product/index?category_id=0&level=0&gcid=0&sale_name=&sort=2">
                                    人气
                                </a>
                            </li>
                            <li class="item-item ">
                                <a class="link-link" href="/product/index?category_id=0&level=0&gcid=0&sale_name=&sort=4">
                                    价格由高到低
                                </a>
                            </li>
                            <li class="item-item ">
                                <a class="link-link" href="/product/index?category_id=0&level=0&gcid=0&sale_name=&sort=5">
                                    价格由低到高
                                </a>
                            </li>
                        </ul>				</li>
                </ul>
            </div>
            <?php


            while($row = mysqli_fetch_assoc($zsresult)) {
            ?>
            <div class="item-list">
                <div class="general-banner">
                    <div class="ban-body">
                        <ul class="list after js_goods_list">

                            <li class="item topToBottom" data-goods_id="100483" >

                                <a class="link" target="_blank" href="view.php?id=<?php echo $row['id'];?>">
                                    <div class="img show_tag " style="" >
                                        <img style="" src="../../../../public/images/statics/<?php  echo $row["product_img"]
                                        ?>">




                                    </div>

                                    <div class="all-name ">
                                        <div class="product-name">
                                            <span class="item-icon new"></span>                                        <?php echo $row["product_name"] ?>       </div>
                                        <div class="product-price"> ￥ <?php echo $row["product_price"]; ?> </div>
                                    </div>
                                </a>
                            </li>
                            <?php

                            }
                            ?>

                            <!--                        <li class="item topToBottom" data-goods_id="100482" >-->
                            <!---->
                            <!--                            <a class="link" target="_blank" href="/product/100482.html">-->
                            <!--                                <div class="img show_tag " style="" >-->
                            <!--                                    <img style="" src="//statics.igg.com/game/1993/goods/2021/08/27/020145_61288dd99ea496410.jpg">-->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!--                                </div>-->
                            <!---->
                            <!--                                <div class="all-name ">-->
                            <!--                                    <div class="product-name">-->
                            <!--                                        <span class="item-icon new"></span>                                                 时光公主 × 维也纳艺术史博物馆 梦幻精致礼盒套装                    </div>-->
                            <!--                                    <div class="product-price">US$16.90</div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                        </li>-->
                            <!---->
                            <!--                        <li class="item topToBottom" data-goods_id="100457" >-->
                            <!---->
                            <!--                            <a class="link" target="_blank" href="/product/100457.html">-->
                            <!--                                <div class="img show_tag " style="" >-->
                            <!--                                    <img style="" src="//statics.igg.com/game/1993/goods/2021/05/23/213922_60ab11da4a84d3713.jpg">-->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!--                                </div>-->
                            <!---->
                            <!--                                <div class="all-name ">-->
                            <!--                                    <div class="product-name">-->
                            <!--                                        <span class="item-icon new"></span>                         <span class="item-icon hot"></span>                        《王国纪元》光明之子魔物天团盲盒                    </div>-->
                            <!--                                    <div class="product-price">US$12.00</div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                        </li>-->
                            <!---->
                            <!--                        <li class="item topToBottom" data-goods_id="100456" >-->
                            <!---->
                            <!--                            <a class="link" target="_blank" href="/product/100456.html">-->
                            <!--                                <div class="img show_tag " style="" >-->
                            <!--                                    <img style="" src="//statics.igg.com/game/1993/goods/2021/05/17/023624_60a21cf83bc1a3835.jpg">-->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!--                                </div>-->
                            <!---->
                            <!--                                <div class="all-name ">-->
                            <!--                                    <div class="product-name">-->
                            <!--                                        <span class="item-icon new"></span>                                                 《王国纪元》萌萌英雄现身T恤                    </div>-->
                            <!--                                    <div class="product-price">US$19.90</div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                        </li>-->
                            <!---->
                            <!--                        <li class="item topToBottom" data-goods_id="100477" >-->
                            <!---->
                            <!--                            <a class="link" target="_blank" href="/product/100477.html">-->
                            <!--                                <div class="img show_tag " style="" >-->
                            <!--                                    <img style="" src="//statics.igg.com/game/1993/goods/2021/07/05/011015_60e2a247cfde29092.jpg">-->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!--                                </div>-->
                            <!---->
                            <!--                                <div class="all-name ">-->
                            <!--                                    <div class="product-name">-->
                            <!--                                        <span class="item-icon new"></span>                                                 王国纪元 × 铜师傅英雄系列黄铜手办                    </div>-->
                            <!--                                    <div class="product-price">US$98.90</div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                        </li>-->
                            <!---->
                            <!--                        <li class="item topToBottom" data-goods_id="100410" >-->
                            <!---->
                            <!--                            <a class="link" target="_blank" href="/product/100410.html">-->
                            <!--                                <div class="img show_tag " style="" >-->
                            <!--                                    <img style="" src="//statics.igg.com/shop/goods/2020/03/18/2020031878c3a237036bdf2e930f5cceb84c60bc96782.jpg">-->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!--                                </div>-->
                            <!---->
                            <!--                                <div class="all-name ">-->
                            <!--                                    <div class="product-name">-->
                            <!--                                        <span class="item-icon new"></span>                                                 《城堡争霸》熔岩之翼龙蛋手办                    </div>-->
                            <!--                                    <div class="product-price">US$79.00</div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                        </li>-->
                            <!---->
                            <!--                        <li class="item topToBottom" data-goods_id="100373" >-->
                            <!---->
                            <!--                            <a class="link" target="_blank" href="/product/100373.html">-->
                            <!--                                <div class="img show_tag " style="" >-->
                            <!--                                    <img style="" src="//statics.igg.com/shop/goods/2018/06/26/f4eb3362320c978df480b3f269800f5c53586.jpg">-->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!--                                </div>-->
                            <!---->
                            <!--                                <div class="all-name ">-->
                            <!--                                    <div class="product-name">-->
                            <!--                                        《王国纪元》英雄手办胜利版套组                    </div>-->
                            <!--                                    <div class="product-price">US$217.00</div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                        </li>-->
                            <!---->
                            <!--                        <li class="item topToBottom" data-goods_id="100363" >-->
                            <!---->
                            <!--                            <a class="link" target="_blank" href="/product/100363.html">-->
                            <!--                                <div class="img show_tag " style="" >-->
                            <!--                                    <img style="" src="//statics.igg.com/shop/goods/2018/04/18/583cf783fc9cb70d4753ef0396b6290d63528.jpg">-->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!--                                </div>-->
                            <!---->
                            <!--                                <div class="all-name ">-->
                            <!--                                    <div class="product-name">-->
                            <!--                                        《王国纪元》玫瑰骑士手办 胜利版                    </div>-->
                            <!--                                    <div class="product-price">US$30.00</div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                        </li>-->
                            <!---->
                            <!--                        <li class="item topToBottom" data-goods_id="100367" >-->
                            <!---->
                            <!--                            <a class="link" target="_blank" href="/product/100367.html">-->
                            <!--                                <div class="img show_tag " style="" >-->
                            <!--                                    <img style="" src="//statics.igg.com/shop/goods/2018/04/18/6a93da76d1a15b02d8ab69b1cbd491e133366.jpg">-->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!--                                </div>-->
                            <!---->
                            <!--                                <div class="all-name ">-->
                            <!--                                    <div class="product-name">-->
                            <!--                                        《王国纪元》仙境守护者手办 胜利版                    </div>-->
                            <!--                                    <div class="product-price">US$52.00</div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                        </li>-->
                            <!---->
                            <!--                        <li class="item topToBottom" data-goods_id="100366" >-->
                            <!---->
                            <!--                            <a class="link" target="_blank" href="/product/100366.html">-->
                            <!--                                <div class="img show_tag " style="" >-->
                            <!--                                    <img style="" src="//statics.igg.com/shop/goods/2018/04/18/6e0360fda40eea026aec47672a00bd1922669.jpg">-->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!--                                </div>-->
                            <!---->
                            <!--                                <div class="all-name ">-->
                            <!--                                    <div class="product-name">-->
                            <!--                                        《王国纪元》光明之子手办 胜利版                    </div>-->
                            <!--                                    <div class="product-price">US$32.00</div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                        </li>-->
                            <!---->
                            <!--                        <li class="item topToBottom" data-goods_id="100365" >-->
                            <!---->
                            <!--                            <a class="link" target="_blank" href="/product/100365.html">-->
                            <!--                                <div class="img show_tag " style="" >-->
                            <!--                                    <img style="" src="//statics.igg.com/shop/goods/2018/04/18/f16f1666768a127fae125ced5154836245035.jpg">-->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!--                                </div>-->
                            <!---->
                            <!--                                <div class="all-name ">-->
                            <!--                                    <div class="product-name">-->
                            <!--                                        《王国纪元》小恶魔手办 胜利版                    </div>-->
                            <!--                                    <div class="product-price">US$30.00</div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                        </li>-->
                            <!---->
                            <!--                        <li class="item topToBottom" data-goods_id="100433" >-->
                            <!---->
                            <!--                            <a class="link" target="_blank" href="/product/100433.html">-->
                            <!--                                <div class="img show_tag " style="" >-->
                            <!--                                    <img style="" src="//statics.igg.com/shop/goods/2020/10/20/20201020f30f2b33dd381b9b54bd3845f2a9a1d837744.jpg">-->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!--                                </div>-->
                            <!---->
                            <!--                                <div class="all-name ">-->
                            <!--                                    <div class="product-name">-->
                            <!--                                        <span class="item-icon hot"></span>                        《王国纪元》异界引路人场景手办                    </div>-->
                            <!--                                    <div class="product-price">US$122.00</div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                        </li>-->
                            <!---->
                            <!--                        <li class="item topToBottom" data-goods_id="100443" >-->
                            <!---->
                            <!--                            <a class="link" target="_blank" href="/product/100443.html">-->
                            <!--                                <div class="img show_tag " style="" >-->
                            <!--                                    <img style="" src="//statics.igg.com/shop/goods/2020/12/24/20201224d7cda280eb35ca9fff6691a4ae77919756623.jpg">-->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!--                                </div>-->
                            <!---->
                            <!--                                <div class="all-name ">-->
                            <!--                                    <div class="product-name">-->
                            <!--                                        <span class="item-icon hot"></span>                        《城堡争霸》LOGO棒球帽                    </div>-->
                            <!--                                    <div class="product-price">US$28.00</div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                        </li>-->
                            <!---->
                            <!--                        <li class="item topToBottom" data-goods_id="100396" >-->
                            <!---->
                            <!--                            <a class="link" target="_blank" href="/product/100396.html">-->
                            <!--                                <div class="img show_tag " style="" >-->
                            <!--                                    <img style="" src="//statics.igg.com/shop/goods/2019/08/13/20190813df15996df9d11b3e19ddf5efc129593f83303.jpg">-->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!--                                </div>-->
                            <!---->
                            <!--                                <div class="all-name ">-->
                            <!--                                    <div class="product-name">-->
                            <!--                                        <span class="item-icon hot"></span>                        《王国纪元》格里芬马克杯                    </div>-->
                            <!--                                    <div class="product-price">US$53.00</div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                        </li>-->
                            <!---->
                            <!--                        <li class="item topToBottom" data-goods_id="100395" >-->
                            <!---->
                            <!--                            <a class="link" target="_blank" href="/product/100395.html">-->
                            <!--                                <div class="img show_tag " style="" >-->
                            <!--                                    <img style="" src="//statics.igg.com/shop/goods/2019/08/12/2019081290a1c6dde599336a8423dc0e9714adbb51927.jpg">-->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!--                                </div>-->
                            <!---->
                            <!--                                <div class="all-name ">-->
                            <!--                                    <div class="product-name">-->
                            <!--                                        《王国纪元》冰霜翼龙马克杯                    </div>-->
                            <!--                                    <div class="product-price">US$53.00</div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                        </li>-->
                            <!---->
                            <!--                        <li class="item topToBottom" data-goods_id="100399" >-->
                            <!---->
                            <!--                            <a class="link" target="_blank" href="/product/100399.html">-->
                            <!--                                <div class="img show_tag " style="" >-->
                            <!--                                    <img style="" src="//statics.igg.com/shop/goods/2019/09/18/20190918b7e1e75e9cc993b0455ff9c999d1570136756.jpg">-->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!--                                </div>-->
                            <!---->
                            <!--                                <div class="all-name ">-->
                            <!--                                    <div class="product-name">-->
                            <!--                                        《王国纪元》魔物马克杯套装                    </div>-->
                            <!--                                    <div class="product-price">US$129.00</div>-->
                            <!--                                </div>-->
                            <!--                            </a>-->
                            <!--                        </li>-->
                            <!--                    </ul>-->
                            <!--                </div>-->
                            <!--            </div>-->

                            <div class="page after js_page">


                                <a class="link" href="more.php?page=1">1</a>
                                <a class="link" href="more.php?page=2">2</a>
                                <a class="link" href="more.php?page=3">3</a>

                                </a>	</div>
                    </div>

                    <script type="text/javascript">

                        $(document).ready(function(){
                            var list_item = $(".list-select .list .item");
                            list_item.hoverAddClassOpenson("open-son")
                        });

                    </script>
                    <!-- main end -->

                    <div class="footer">
                        <div class="back-top">
                            回到顶部	    	</div>
                        <div class="footer-site after">
                            <div class="site-item Guide">
                                <div class="site-item-son">
                                    <div class="heading">
                                        <div class="icon"></div>
                                        <h5 class="title"><b>服务指南</b></h5>
                                    </div>
                                    <div class="body">
                                        <ul class="site-item-list">
                                            <li class="item">
                                                <a class="link" target="_blank" href="/faq/list?faq_type_id=34&faq_id=70">购物流程</a>
                                            </li>
                                            <li class="item">
                                                <a class="link" target="_blank" href="http://policies.igg.com/terms_of_service/chs/store">使用条款</a>
                                            </li>
                                            <li class="item">
                                                <a class="link" target="_blank" href="http://policies.igg.com/privacy_policy/chs/store">隐私政策</a>
                                            </li>
                                            <li class="item">
                                                <a class="link" target="_blank" href="/faq">帮助</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="site-item Payment">
                                <div class="site-item-son">
                                    <div class="heading">
                                        <div class="icon"></div>
                                        <h5 class="title"><b>支付方式</b></h5>
                                    </div>
                                    <div class="body">
                                        <ul class="site-item-list">
                                            <li class="item">
                                                <a class="link no-url">Paypal</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="site-item Delivery">
                                <div class="site-item-son">
                                    <div class="heading">
                                        <div class="icon"></div>
                                        <h5 class="title"><b>配送</b></h5>
                                    </div>
                                    <div class="body">
                                        <ul class="site-item-list">
                                            <li class="item">
                                                <a class="link" href="/faq/list?faq_type_id=35&faq_id=71">配送方式</a>
                                            </li>
                                            <li class="item">
                                                <a class="link" href="/faq/list?faq_type_id=35&faq_id=72">配送区域</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="site-item Contact">
                                <div class="site-item-son">
                                    <div class="heading">
                                        <div class="icon"></div>
                                        <h5 class="title"><b>联系我们</b></h5>
                                    </div>
                                    <div class="body">
                                        <ul class="site-item-list">
                                            <li class="item">
                                                <a class="link " target="_blank" href="/index/livechat">在线客服</a>
                                            </li>
                                            <li class="item">
                                                <a class="link " target="_blank" href="/index/contact">在线提交</a>
                                            </li>
                                            <li class="item">

                                                <a class="link no-url" href="mailto:help.cn.store@igg.com">联系邮箱：help.cn.store@igg.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="site-item Attention">
                                <div class="site-item-son">
                                    <div class="heading">
                                        <div class="icon"></div>
                                        <h5 class="title"><b>关注我们</b></h5>
                                    </div>
                                    <div class="body">
                                        <ul class="site-item-list">
                                            <li class="item">
                                                <a class="link" target="_blank" href="https://weibo.com/p/1006066427157252/home?from=page_100606&mod=TAB&is_all=1#place">微博</a>
                                            </li>
                                            <li class="item show-qr">
                                                <a class="link"  href="javascript:void(0);">微信                                    <span class="QR"></span>
                                                </a>
                                            </li>
                                            <li class="item">
                                                <a class="link" target="_blank"  href="https://www.facebook.com/iggstore/">Facebook</a>
                                            </li>
                                            <li class="item">
                                                <a class="link" target="_blank"  href="https://twitter.com/IggStore">Twitter</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="site-item Others">
                                <div class="site-item-son">
                                    <div class="heading">
                                        <div class="icon"></div>
                                        <h5 class="title"><b>其他</b></h5>
                                    </div>
                                    <div class="body">
                                        <ul class="site-item-list">
                                            <li class="item">
                                                <a class="link" href="https://www.igg.com/game" target="_blank" >游戏下载</a>
                                            </li>
                                            <li class="item">
                                                <a class="link" href="https://www.igg.com" target="_blank">关于我们</a>
                                            </li>
                                            <li class="item">
                                                <a class="link" href="http://hr.igg.com" target="_blank">加入我们</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="copyright">
                            <div class="footer-logo"></div>
                            <div class="copyright-text">
                                &copy; 2021 IGG All Rights Reserved.
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--购物车-->
            <div class="my_cart">
                <div class="top">
                    <a class="cart-close">关闭</a>
                </div>
                <ul class="cart-list" id="cart_list_div" data-qty-text="数量" data-limit-tip="最多只能购买%s件" data-stocknum-tip="库存不足" > </ul>
                <div class="bottom">
                    <div class="all_price after">
                        <div class="fl price_name">总计</div>
                        <div class="fr price_much" id="cart_price_total">$0.00</div>
                    </div>

                    <div class="price-discount" id="price_discount_div"></div>

                    <div class="checkout checkout_btn">
                        <a class="link" href="javascript:;">结算</a>
                    </div>
                    <div class="all_error" id="cart_all_err_div">
                    </div>
                </div>
            </div>
            <!--// 购物车-->


            <!--[if lte IE 9]>
            <!--<script src="/scripts/general_ie8.js"></script>-->
            <![endif]-->
            <script src="../../../../public/scripts/general.js"></script>
            <script>
                var pleaseAddGoods = '请先添加商品';
                var pleaseSelectGoods = '请选择要操作的商品';
                var cartNumLimitTip = '最多只能购买%d件';
                jsUpdateCartNum();

            </script>


            <script>
                var cartGoodsMaxLimitTip = '商品已购买的数量，超过限购数，无法继续购买！';

                var autoOpenCart = "";</script>


            <!-- Matomo -->
            <script type="text/javascript">
                var _paq = window._paq || [];
                /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
                _paq.push(['trackPageView']);
                _paq.push(['enableLinkTracking']);
                (function() {
                    var u="https://analytics.igg.com/";
                    _paq.push(['setTrackerUrl', u+'matomo.php']);
                    _paq.push(['setSiteId', '17']);
                    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
                    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
                })();
            </script>
            <!-- End Matomo Code -->

    </body>
    </html>

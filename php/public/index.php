<?php


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
$sql = "SELECT * FROM new_product ";
$zsresult = $conn->query($sql);
$conn->close();

$conn=conn();
$sql = "SELECT * FROM hot_product ";
$asresult = $conn->query($sql);
$conn->close();
?>

<!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">

    <meta name="keywords" content="igg周边商城；">
    <meta name="description" itemprop="description" content="IGG周边商城最新商品，周边商场最热商品">
    <meta itemprop="name" content="IGG周边商城" />
    <title>igg 商城 </title>
    <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
    <link href="css/swiper.min.css" rel="stylesheet" type="text/css">
    <link href="css/layout.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <script>
        var SHOP_LANGUAGE = 'chs';
    </script>
    <script src="scripts/jquery-1.11.1.min.js"></script>
    <script src="scripts/cookies_popup.php"></script>

    <script>!function(a){var e="https://s.go-mpulse.net/boomerang/",t="addEventListener";if("False"=="True")a.BOOMR_config=a.BOOMR_config||{},a.BOOMR_config.PageParams=a.BOOMR_config.PageParams||{},a.BOOMR_config.PageParams.pci=!0,e="https://s2.go-mpulse.net/boomerang/";if(window.BOOMR_API_key="F8PGR-MHD75-KZ22G-MNSSF-GYYDZ",function(){function n(e){a.BOOMR_onload=e&&e.timeStamp||(new Date).getTime()}if(!a.BOOMR||!a.BOOMR.version&&!a.BOOMR.snippetExecuted){a.BOOMR=a.BOOMR||{},a.BOOMR.snippetExecuted=!0;var i,_,o,r=document.createElement("iframe");if(a[t])a[t]("load",n,!1);else if(a.attachEvent)a.attachEvent("onload",n);r.src="javascript:void(0)",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="width:0;height:0;border:0;display:none;",o=document.getElementsByTagName("script")[0],o.parentNode.insertBefore(r,o);try{_=r.contentWindow.document}catch(O){i=document.domain,r.src="javascript:var d=document.open();d.domain='"+i+"';void(0);",_=r.contentWindow.document}_.open()._l=function(){var a=this.createElement("script");if(i)this.domain=i;a.id="boomr-if-as",a.src=e+"F8PGR-MHD75-KZ22G-MNSSF-GYYDZ",BOOMR_lstart=(new Date).getTime(),this.body.appendChild(a)},_.write("<bo"+'dy onload="document._l();">'),_.close()}}(),"".length>0)if(a&&"performance"in a&&a.performance&&"function"==typeof a.performance.setResourceTimingBufferSize)a.performance.setResourceTimingBufferSize();!function(){if(BOOMR=a.BOOMR||{},BOOMR.plugins=BOOMR.plugins||{},!BOOMR.plugins.AK){var e=""=="true"?1:0,t="",n="ouoooeixziriaymr26hq-f-441da49ad-clientnsv4-s.akamaihd.net",i="false"=="true"?2:1,_={"ak.v":"32","ak.cp":"842229","ak.ai":parseInt("537709",10),"ak.ol":"0","ak.cr":69,"ak.ipv":4,"ak.proto":"h2","ak.rid":"ca31710","ak.r":40584,"ak.a2":e,"ak.m":"b","ak.n":"ff","ak.bpcip":"117.28.231.0","ak.cport":52459,"ak.gh":"23.202.34.124","ak.quicv":"","ak.tlsv":"tls1.3","ak.0rtt":"","ak.csrc":"-","ak.acc":"","ak.t":"1636947855","ak.ak":"hOBiQwZUYzCg5VSAfCLimQ==/rvj7h1W4mLCdHQCbqBj+yx5DT+eIrylTv1AvIhpHgCNwIR5N/NrwOYVk9+j6oNiEP9Zhha1CYEvjZ3JfbSNzrN17r7zlSaVRsTEwz+Iu9RXaSBdR3qHQolA+WrYZOX3dwSEYoxWEzStKhddozHtRRNJCWla792z5CrKFaOYkVTdEZp7RpqrV9n/f8Fmw9VN5l0lhR/Xg5lJphj6F614BMzis/HmJ64ypOaJaIzA3k76lA8egVSEwnTFo8zFQkPElmZB4ygZzPhxK0nziunesK0kOM4+Mh9E1IQXZANyyLu/fnqy0a+EYpx5i3pz+WqYbAiB/t1PWwVbAshdd6uC1SOWGLg3C/ezv/6Kz3dKu0Yv/HdC1InG68dih+Z2A/K4Xowk9GH8jnVm4FZ3oX2Wc0ogplP7Fu+waasHQDBhOKw=","ak.pv":"149","ak.dpoabenc":"","ak.tf":i};if(""!==t)_["ak.ruds"]=t;var o={i:!1,av:function(e){var t="http.initiator";if(e&&(!e[t]||"spa_hard"===e[t]))_["ak.feo"]=void 0!==a.aFeoApplied?1:0,BOOMR.addVar(_)},rv:function(){var a=["ak.bpcip","ak.cport","ak.cr","ak.csrc","ak.gh","ak.ipv","ak.m","ak.n","ak.ol","ak.proto","ak.quicv","ak.tlsv","ak.0rtt","ak.r","ak.acc","ak.t","ak.tf"];BOOMR.removeVar(a)}};BOOMR.plugins.AK={akVars:_,akDNSPreFetchDomain:n,init:function(){if(!o.i){var a=BOOMR.subscribe;a("before_beacon",o.av,null,null),a("onbeacon",o.rv,null,null),o.i=!0}return this},is_complete:function(){return!0}}}}()}(window);</script></head>

<body class="cn ">


<script src="scripts/passport.js"></script>
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
<!--            <div class="logo"> <a class="link" href="http://10.0.8.125/untitled/php/1.php"><img src='../php/image/statics/3.jpg' ></a> </div>-->
<!--             <a class="link head-code" href="http://castleclash.igg.com/event/cdkey/" target="_blank">-->
<!--             CODE-->
<!--             </a>-->
        </div>

        <div class="fr">
            <div class="link head-search after open-son">
                <div class="fl head-search-body">
                    <div class="head-search-search_btn">
                        搜索                        </div>
                    <input type="text" name="sale_name" value=""
                           placeholder="请输入商品名称..." class="nav-search-input">
                </div>
                <a class="fl head-search-btn">
                </a>
            </div>
            <div class="link head-user ">
                <img src="//statics.igg.com/ums/passport/images/avatar_148.jpg">
                <a class="link-link-name" href="/member"><span class="user_name">
                            个人中心                        </span></a>
                <a class="link-link-message "
                   href="/message/system">
                    我的消息                    </a>
                <a class="link-link-coupon" href="/coupon/index">
                    我的优惠券                    </a>
                <a class="link-link-logout logout-btn" href="javascript:void(0);" data-login-flag="1"
                   data-login-url="https://passport.igg.com/account/login.php?url=https%3A%2F%2Fstore.igg.com%2F&lang=cn">
                    退出                    </a>
            </div>

            <div class="link default ">
                <a class="link-link" href="/order">
                    我的订单                    </a>
            </div>

            <div class="link head-select lang">
                <div class="select-current">
                    ￥
                </div>
                <ul class="select-list">
                    <li class="select-item currency_switch current" data-type="1">
                        <span class="icon-text">￥-元</span>
                    </li></ul>
            </div>                <div class="link head-select">
                <div class="select-current">
                    <i class="icon icon-text"> language </i>
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
            <a class="link" id="cart-menu" data-is-login="1">
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
                                    <a class="link-third" href="/mvc/view/1.php">手机壳</a>
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
    <style>
    .redirct_taobao .redirect_pop_close:before {
    transition: all .125s ease;
    content: "\20";
    width: 28px;
    height: 3px;
    position: absolute;
    right: 0;
    top: 0;
    background: #a6cc63;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    }

    .redirct_taobao .redirect_pop_close:after {
    transition: all .125s ease;
    content: "\20";
    width: 28px;
    height: 3px;
    position: absolute;
    right: 0;
    top: 0;
    background: #a6cc63;
    -webkit-transform: rotate(135deg);
    transform: rotate(135deg);
    }

    .redirct_taobao .redirect_pop_close:hover:before,
    .redirct_taobao .redirect_pop_close:hover:after {
    background-color: #a6cc63;
    }

    </style>

    <div class="index-content">

        <div class="swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <a target='_blank' class='link' href='http://10.0.8.125/untitled/mvc/view/new1.php'><img src='images/statics/1.jpg' ></a>            </div>
                <div class="swiper-slide">
                    <a target='_blank' class='link' href='http://10.0.8.125/untitled/mvc/view/new2.php'><img src='images/statics/2.jpg' ></a>            </div>
<!--                <div class="swiper-slide">-->
<!--                    <a target='_blank' class='link' href='https://store.igg.com/product/100477.html'><img src='//statics.igg.com/game/1993/goods/2021/07/05/014251_60e2a9ebc26623143.jpg' ></a>            </div>-->
                <div class="swiper-slide">
                    <a target='_blank' class='link' href='http://10.0.8.125/untitled/mvc/view/new3.php'><img src='images/statics/15.jpg' ></a>            </div>
                <div class="swiper-slide">
                    <a target='_blank' class='link' href='http://10.0.8.125/untitled/mvc/view/new4.php'><img src='images/statics/16.jpg' ></a>            </div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next btn"></div>
            <div class="swiper-button-prev btn"></div>
        </div>

        <div class="gg_banner">
        </div>

        <div class="item-list">
            <div class="general-banner">
                <div class="banner-heading after">
                    <div class="fl">
                        <h3 class="title">
                            最新商品                    </h3>
                    </div>
                    <div class="fr">
                        <a class="view" href="/product/index?sort=3">
                            更多                    </a>
                    </div>
                </div>
                <div class="ban-body">
                    <ul class="list after only_one_row ">
                       <?php
                       while($row = mysqli_fetch_assoc($zsresult)) {
                           ?>
                        <li class="item topToBottom"  >
                            <a class="link" target="_blank"
                               href="http://10.0.8.125/untitled/php/src/Application/mvc/view/new<?php  echo $row["address"]
                               ?>.php?=<?php echo $row{"id"} ?>>"

                            >
                                <div class="img show_tag " style="" >
                                    <img style="" src="images/statics/<?php  echo $row["product_img"]
                                    ?>"
                                </div>

                                <div class="all-name ">
                                    <div class="product-name">
                                        <span class="item-icon new"></span>
                                        <?php echo $row["product_name"] ?>
                                    </div>
                                    <div class="product-price">
                                        <?php echo $row["product_price"]; ?>
                                    </div>
                                </div>
                            </a>
                        </li>
<?php
                       }
?>

                    </ul>
                </div>
            </div>

            <div class="general-banner">
                <div class="banner-heading after">
                    <div class="fl">
                        <h3 class="title">
                            热门商品                    </h3>
                    </div>
                    <div class="fr">
                        <a class="view" href="/product/index?sort=2">
                            更多                    </a>
                    </div>
                </div>
                <div class="ban-body">
                    <ul class="list after only_one_row news_goods_list">
<?php
while($row = mysqli_fetch_assoc($asresult)) {
    ?>

                        <li class="item topToBottom" data-goods_id="100443" >

                            <a class="link" target="_blank" href="http://10.0.8.125/untitled/php/src/Application/mvc/view/hot<?php  echo $row["address"]
                            ?>.php">
                                <div class="img show_tag " style="" >
                                    <img style="" src="images/statics/<?php  echo $row["product_img"]
                                    ?>">




                                </div>

                                <div class="all-name ">
                                    <div class="product-name">
                                        <span class="item-icon hot"></span>  <?php echo $row["product_name"] ?>    </div>
                                    <div class="product-price">  <?php echo $row["product_price"]; ?>   </div>
                                </div>
                            </a>
                        </li>

    <?php
}
?>
            <a class="item-list-more get_more_data" data-click-count="1">
                更多        </a>
        </div>
<!---->
<!--        <div class="redirct_taobao" style="background: rgba(0, 0, 0, .5); position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 99999;display: none;">-->
<!--            <div style="position: absolute; left: 50%; top: 18%; margin-left: -300px; background-color: #f8f8f8; width: 600px;">-->
<!--                <i  class="redirect_pop_close"></i>-->
<!--                <div class="alert_body">-->
<!--                    <img style="max-width: 100%;" src="https://statics.igg.com/shop/goods/2021/01/12/202101128c3da1d8d15499fccdd762d543b9438998482.jpg">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

        <script src="scripts/swiper.min.js"></script>

        <script>

            var mySwiper = new Swiper('.swiper-container', {
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                autoplay: { delay: 3000 },
                speed: 500,
                loop: true,
                autoplayDisableOnInteraction: false,
            });

            $(function () {
                var dealing = 0;
                $(".get_more_data").click(function () {

                    if (dealing == 1) {
                        return false;
                    }

                    var _self = $(this);
                    var click_count = parseInt(_self.data("click-count"));

                    if (click_count == 2) {
                        window.location.href = "/product/index?sort=2";
                        return false;
                    }

                    dealing = 1;

                    $.get('/Index/getHotGoodsList', {}, function (data) {
                        if (data) {
                            $(".news_goods_list").removeClass("only_one_row");
                            click_count = click_count + 1;
                            _self.data('click-count', click_count);
                            _self.html("查看所有商品");
                            $(".news_goods_list").append(data);

                            $('.sellout').prev('img').css({
                                opacity: '.5'
                            });
                        } else {
                            _self.hide();
                        }

                        dealing = 0;
                    });
                });

                if (SHOP_LANGUAGE == 'chs') {
                    $(".redirct_taobao").show();

                    $(".redirct_taobao img").click(function() {
                        $.get('/api/message/tbClick');
                        window.location.href = "https://shop595307717.taobao.com/";
                    });

                    $(".redirect_pop_close").click(function() {
                        $(".redirct_taobao").hide();
                    });
                }
            })

            window.onload = function () {
                var autoOpenCart = '0';
                if (parseInt(autoOpenCart) == 1) {
                    $("#cart-menu").click();
                }
            }
        </script>	<!-- main end -->
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
<script src="scripts/general.js"></script>
<![endif]-->
<script src="scripts/general.js"></script>
<script>
    var pleaseAddGoods = '请先添加商品';
    var pleaseSelectGoods = '请选择要操作的商品';
    var cartNumLimitTip = '最多只能购买%d件';


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


</body>
</html>
<?php

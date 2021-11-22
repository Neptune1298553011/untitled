document.write("<style>    .alert-info-cookie-policy{position: fixed;background:rgba(0,0,0,.6);bottom: 0;left: 0;width: 100%;line-height:20px;font-size: 13px;border-bottom: 1px solid #6d6d6d;color: #ffffff;z-index: 999;}    .alert-info-wrap-cookie-policy{padding: 5px 75px 5px 10px; position: relative; text-align:left ;}    .alert-info-wrap-cookie-policy a{color: #f5bd35;}    .alert-info-wrap-cookie-policy a:active{text-decoration: underline;}    .alert-info-wrap-cookie-policy .btn-gotit{width: 60px; text-align:center;background-color: #fc8301; padding:2px 0;color: #fff; transition: all .3s ease 0s;position: absolute;right: 10px; top:50%; margin-top: -8px; font-size: 13px}    .alert-info-wrap-cookie-policy .btn-gotit:active{ font-size: 14px; text-decoration: none; text-transform: uppercase; }    @media screen and (min-width: 480px) {        .alert-info-wrap-cookie-policy{padding: 10px 75px 10px 10px;}    }</style><div id=\"cross_site_cookie_popup\" class=\"alert-info-cookie-policy\" style=\"display: none;\">    <div class=\"alert-info-wrap-cookie-policy\">         <div>我们的网站使用Cookies来进行流量分析。 <a href=\"https://policies.igg.com/privacy_policy#cookies\" target=\"_blank\">了解更多</a></div> <a href=\"javascript:closeCrossSiteCookiePopup();\" class=\"btn-gotit\">明白了</a>    </div></div>");function setCookieForCookiePopup(name,value, Days) {
    Days = parseInt(Days);
    var exp = new Date();
    exp.setTime(exp.getTime() + Days*24*60*60*1000);
    document.cookie = name + "="+ escape (value) + ";domain=.igg.com;expires=" + exp.toGMTString() + ";path=/";
}

function getCookieForCookiePopup(name) {
    var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
    if(arr = document.cookie.match(reg))
        return unescape(arr[2]);
    else
        return null;
}

function closeCrossSiteCookiePopup() {
    setCookieForCookiePopup('_cookie_pop', '1', 365);
    document.getElementById('cross_site_cookie_popup').style.display = 'none';
}

/* 兼容旧代码，执行一阵子后可以扔掉 2018-12-06 */
function fixOldCookie() {
    // setCookieForCookiePopup('alert_info_wrap_dismissed', '1', 2);
    var oldFlag = getCookieForCookiePopup('alert_info_wrap_dismissed');
    /* 假如存在旧的cookie直接干掉，设置新的cookie */
    if(oldFlag != null) {
        setCookieForCookiePopup('alert_info_wrap_dismissed', '', -1);
        setCookieForCookiePopup('_cookie_pop', '1', 365);
    }
}

function cookieMain() {
    var isShow = getCookieForCookiePopup('_cookie_pop');
    if(isShow == null) {
        /* 不存在 _cookie_pop 显示弹窗 */
        document.getElementById('cross_site_cookie_popup').style.display = '';
        
        /* 如果存在旧的cookie 隐藏弹窗 */
        var oldFlag = getCookieForCookiePopup('alert_info_wrap_dismissed');
        if(parseInt(oldFlag) == 1) {
            document.getElementById('cross_site_cookie_popup').style.display = 'none';
        }
    }
}

/* 流程，加一点延时等待处理旧cookie */
fixOldCookie();
setTimeout(function() {
    cookieMain();
}, 200);
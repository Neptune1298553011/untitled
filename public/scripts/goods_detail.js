
window.onload=function(){
    var star = $(".item-content .igg-stars");
    commentOffsetTop = $(".item-content .item-comment").offset().top - 100;
    star.click(function(event) {
        $("html,body").animate({scrollTop:commentOffsetTop}, 300);
    });
}

function keyPress(event) {
    var keyCode = 0;

    var userAgent = navigator.userAgent; //取得浏览器的userAgent字符串
    var isOpera = userAgent.indexOf("Opera") > -1 ? 1 : 0;
    var isIE = userAgent.indexOf("compatible") > -1 && userAgent.indexOf("MSIE") > -1 && !isOpera ? 1 : 0;
    var isFF = userAgent.indexOf("Firefox") > -1 ? 1 : 0;

    //判断是否IE浏览器
    if (isIE && !isOpera) {
        keyCode = event.keyCode;
    } else if (isFF) {
        keyCode = event.keyCode;

        if(keyCode === 0) {
            keyCode = event.charCode;
        } else if (keyCode === 8) {
            return;
        }
    } else {
        keyCode = event.charCode;
    }

    if (keyCode >= 48 && keyCode <= 57) {
        event.returnValue = true;
    }else {

        if (isFF) {
            event.preventDefault();// 火狐有效 和 ie9+有效
        } else {
            (event.preventDefault) ? event.preventDefault() : event.returnValue = false;
        }
    }
}


$(function(){
    var sale_info = {};
    var stock_num = 0;
    var buyNum = 1;
    var limit_num = 0;
    var max_buy_num_tip = '';
    var max_limit_num_tip = '';

    //订单选属性的选择切换
    var item = $(".js_spec_link");

    var	itemInput = $(".quantity_input");
    var lower = $(".less");
    var plus = $(".plus");

    item.each(function(){
        // 初始化信息e
        if($(this).hasClass("active")) {
            sale_info[$(this).data("sort")] = $(this).data("speckey");
            calculate(sale_info);
        }

        $(this).click(function(){
            clearError();

            if($(this).hasClass("active")) {
            }
            else{
                $(this).parent().children(".js_spec_link").removeClass("active");
                $(this).addClass("active");
            }

            itemInput.val(1);

            if($(this).hasClass("active")) {
                sale_info[$(this).data("sort")] = $(this).data("speckey");
                calculate(sale_info);
            } else {
                // sale_info[$(this).data("sort")] = 0;
            }

            if($(this).hasClass("size_item")) {
                $(this).parents(".change_img_size").children('.size_title').children(".text").html($(this).data('name'));
            }

        });
    });


    function calculate(sale_info) {

        var tmpArr = [];
        var keys = [];

        for(var i in sale_info) {
            keys.push(i);
        }

        keys.sort();
        var len = keys.length;

        for( i = 0; i< len; i++) {
            var k = keys[i];
            tmpArr.push(sale_info[k]);
        }

        key = tmpArr.join('|');

        var current_spec = goods_spec_detail[key];

        if($(".add_to_cart").hasClass("not_allow_buy")) {
            return false;
        }

        if(current_spec) {
            stock_num = parseInt(current_spec.stock_num);
            limit_num = parseInt(current_spec.limit_num);
            max_buy_num_tip = current_spec.max_buy_num_tip;
            max_limit_num_tip = current_spec.max_limit_num_tip;

            if(stock_num === 0) {
                showError(jsData.stockLessVar);

                $(".add_to_cart").addClass('dis');

                resetNumInput();

                return false;
            } else {
                $(".add_to_cart").removeClass('dis');
                $(".add_to_cart .error").html("");

                initNumInput();
            }

            $(".add_to_cart").data("gsd_id", current_spec.gsd_id);
        } else {
            $(".add_to_cart").data("gsd_id", 0);
        }
    }

    $(".add_to_cart").on("click", "a", function() {

        if($(this).parent().hasClass('dis')) {
            return false;
        }

        var gsdId = $(".add_to_cart").data("gsd_id");

        clearError();

        if(!gsdId) {
            showError(jsData.selectSpec, -10000);
            return false;
        }

        calculate(sale_info);

        $(".add_to_cart error").html("");

        addCart(gsdId, itemInput.val());
    });


    $(".item-comment").on('click', '.page a', function(event) {
        event.preventDefault();
        var url = $(this).attr('href');

        if(url && url != 'javascript:;') {
            $.get(url, {}, function(data){
                $(".item-comment .item-comment-body").html(data);

                $("html,body").animate({scrollTop:commentOffsetTop}, 300);
            });
        }
    });

    function addCart(gsdId, buyNum) {
        if(!gsdId) {
            return false;
        }

        if(!buyNum) {
            buyNum = 1;
        }

        $(".add_to_cart").addClass("loading-general");
        $.ajax({
            type: 'post',
            'url': '/cart/addCart',
            dataType: 'json',
            data: 'gsd_id='+gsdId+'&buy_num='+buyNum,
            success: function(data) {
                if(data.code == 0) {
                    var msg = data.msg;
                    $(".head-cart-num").html(data.data.cart_count);
                    $(".quantity_body .error").html('');
                    $("#cart-menu").click();
                } else if(data.code == 1) {
                    // 未登录状态，则直接加入本地购物车
                    addCartToCookie(gsdId, buyNum);
                    $("#cart-menu").click();
                } else {
                    showError(data.msg, data.code);
                }

                $(".add_to_cart").removeClass("loading-general");
            }
        });
    }

    lower.click(function(){
        var num = itemInput.val();

        clearError();

        if(num > 1){
            num = -- num;
            itemInput.val(num);

            if(num < stock_num) {
                plus.removeClass("cant");
            }

            if(num > stock_num) {
                itemInput.val(stock_num);
                showError(max_buy_num_tip);
                plus.removeClass("cant");
            }

            if(num == 1) {
                $(this).addClass("cant");
            }

        } else {
            $(this).addClass("cant");
        }

    });

    plus.click(function(){
        var num = itemInput.val();

        if($(this).hasClass('cant')) {
            return false;
        }

        clearError();

        lower.removeClass("cant");

        if(stock_num) {
            if(parseInt(num) < stock_num){
                num = ++ num;

                if(limit_num) {
                    if(num > limit_num) {
                        itemInput.val(limit_num);
                        showError(max_limit_num_tip);
                        plus.addClass("cant");
                        return false;
                    } else {
                        itemInput.val(num);
                        plus.removeClass("cant");
                    }
                } else {
                    itemInput.val(num);
                    plus.removeClass("cant");
                }

                return false;
            } else{
                itemInput.val(stock_num);
                showError(max_buy_num_tip);
                plus.addClass("cant");
                return false;
            }
        } else {
            var gsdId = $(".add_to_cart").data("gsd_id");

            if(!gsdId) {
                showError(jsData.selectSpec);
            }
        }

        if(num == 1) {
            lower.addClass("cant");
        }
    });

    itemInput.blur(function(){
        var origin_val = $(this).val();

        if(origin_val.length ===  0) {
            $(this).val(1);
        }
    });

    itemInput.keyup(function(event) {
        if ( event.which == 13 ) {
            event.preventDefault();
        }

        var origin_val = $(this).val();

        if(origin_val.length > 0) {
            var patrn=/^[0-9]{1,20}$/;
            if (!patrn.exec(origin_val)) {
                $(this).val(1);
            }
        }

        var value = parseInt($(this).val());

        if(stock_num && value !== 0) {
            if(limit_num) {
                if(limit_num > stock_num) {
                    if(value > stock_num) {
                        showError(max_buy_num_tip);
                        $(this).val(stock_num);
                    }
                } else {
                    if(value > limit_num) {
                        showError(max_limit_num_tip);
                        $(this).val(limit_num);
                    }
                }
            } else {
                if(value > stock_num) {
                    showError(max_buy_num_tip);
                    $(this).val(stock_num);
                }
            }

            if(value > 1) {
                lower.removeClass("cant");
                plus.removeClass("cant");
            }
        } else {
            $(this).val(1);
        }
    });



    function initNumInput() {

        var val	= itemInput.val();

        if (val == 1) {
            lower.addClass("cant");
        } else {
            lower.removeClass("cant");
        }

        plus.removeClass("cant");
    }

    function resetNumInput() {
        var val	= itemInput.val();

        if (val == 1) {
            lower.addClass("cant");
        } else {
            lower.removeClass("cant");
        }

        plus.addClass("cant");
    }

    function showError(msg, code) {
        code = parseInt(code);
        switch (code)  {
            case -10000:
                $(".add_to_cart .error").html(msg);
                break;
            default:
                $(".quantity_body .error").html(msg);
                break;
        }
    }

    function clearError() {
        $(".quantity_body .error").html('');

        if(!$(".add_to_cart").hasClass("not_allow_buy")) {
            $(".add_to_cart .error").html('');
        }
    }

});



/**
 * 新窗口打开URL
 *
 * @param string  url     新窗口的url
 * @param string  name    新窗口名称
 * @param integer iWidth  内部宽度
 * @param integer iHeight 内部高度
 * @return void
 */
function openWindow(url, name, iWidth, iHeight) {
    var iTop = (window.screen.availHeight - 30 - iHeight) / 2;  // 获得窗口的垂直位置
    var iLeft = (window.screen.availWidth - 10 - iWidth) / 2;  // 获得窗口的水平位置
    window.open(url, name, 'height=' + iHeight + ',innerHeight=' + iHeight + ',width=' + iWidth + ',innerWidth=' + iWidth + ',top=' + iTop + ',left=' + iLeft);
}

/**
 * facebook分享
 * 使用方式 <a target="_blank" onclick="fbShare();void(0);"> FB</a>
 */
function fbShare() {
    var baseFbSahreUrl = 'http://www.facebook.com/sharer.php?'; // facebook分享URL
    var shareUrl = 'u=' + encodeURIComponent(window.location.href); // u是所分享的网页url，
    var shareTitle = '&t=' + encodeURIComponent(document.title); // t是标题
    var openUrl = baseFbSahreUrl + shareUrl + shareTitle;
    openWindow(openUrl, 'fbShare', 686, 435);
}

/**
 * 推特分享
 * 使用方式 <a target="_blank" onclick="ttShare();void(0);"> FB</a>
 */
function ttShare(obj) {
    var $share = $(obj);
    var title = $share.data('title');

    var baseFbSahreUrl = 'https://twitter.com/?'; // facebook分享URL
    var shareUrl = 'status=' + encodeURIComponent(window.location.href)+' '; // u是所分享的网页url，
    title = encodeURIComponent(title); // t是标题
    var openUrl = baseFbSahreUrl + shareUrl + title;
    openWindow(openUrl, 'fbShare', 686, 435);
}

/**
 * weibo分享
 * obj.title 标题
 * obj.pic   图片地址
 */
function weiboShare(obj) {
    var $share = $(obj);
    var title = $share.data('title');
    var pic = $share.data('pic');

    var baseFbSahreUrl = 'http://service.weibo.com/share/share.php?'; // weibo分享URL
    var shareUrl = 'url=' + encodeURIComponent(window.location.href)+'&'; // url是所分享的网页url，
    var shareTitle = 'title=' + encodeURIComponent(title) + '&';
    var sharePic = 'pic=' + pic;
    var openUrl = baseFbSahreUrl + shareUrl + shareTitle + sharePic;
    openWindow(openUrl, 'weiboShare', 635, 472);
}

